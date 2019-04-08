<?php
/*Template Name: Download*/
define('EXPIRATION_TIME', '+24 hours');
define('TOKEN_DIR', 'tokens');

if(isset($_GET["fid"])){
	// Get parameters
    
    $fid = base64_decode(trim($_GET['fid']));
    $folderName = explode('-', $fid);
    $folderName = $folderName[0];
    $imgName = $fid.'.png';

    $key = trim($_GET['key']);

    // Calculate link expiration time
    $currentTime = time();
    $keyTime = explode('-',$key);
    $expTime = strtotime(EXPIRATION_TIME, $keyTime[0]);

    $filepath = 'https://s3.us-east-2.amazonaws.com/bucket.coadb/' . $folderName.'/shop-images/'. $imgName;

    // Retrieve the keys from the tokens file
    $keys = file(TOKEN_DIR.'/keys');
    $match = false;
    // Loop through the keys to find a match
    // When the match is found, remove it
    
    foreach($keys as &$one) {
        if(rtrim($one)==$key){
            $match = true;
            $one = '';
        }
    }

    // Put the remaining keys back into the tokens file
    file_put_contents(TOKEN_DIR.'/keys',$keys);

    // If match found and the link is not expired
    if($match !== false && $currentTime <= $expTime) {
        if (headers_sent()) {
            die("Redirect failed. Please click on this link: <a href=...>");
        }
        else {
           if(file_exists($filepath)) {
                $buffer = file_get_contents($filename);
                header("Content-Type: application/force-download");
                header("Content-Type: application/octet-stream");
                header("Content-Type: application/download");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Content-Type: application/octet-stream");
                header("Content-Transfer-Encoding: binary");
                header("Content-Length: " . strlen($buffer));
                header("Content-Disposition: attachment; filename=$filename");
                echo $buffer; 
            }
        }
    } else {
        echo '<h1>Download link is expired...</h1>';
        exit();
    }
    
}
