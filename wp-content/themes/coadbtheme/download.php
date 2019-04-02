<?php
/*Template Name: Download*/
define('EXPIRATION_TIME', '+24 hours');
define('TOKEN_DIR', 'tokens');

if(isset($_REQUEST["fid"])){
	// Get parameters
    $file = urldecode($_REQUEST["file"]);
    //$string = str_replace('/', ' ', $file); 
    //$folder = explode(" ", $string);
    
    $fid = base64_decode(trim($_GET['fid']));
    $key = trim($_GET['key']);

    // Calculate link expiration time
    $currentTime = time();
    $keyTime = explode('-',$key);
    $expTime = strtotime(EXPIRATION_TIME, $keyTime[0]);

    $filepath = 'wp-content/uploads/processed_images/' . $fid;
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
    if($match !== false && $currentTime <= $expTime){
        if (headers_sent()) {
            die("Redirect failed. Please click on this link: <a href=...>");
        }
        else {
           if(file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($filepath));
                flush(); // Flush system output buffer
                readfile($filepath);
                header("Location: index.php");
                exit;
            }
        }
    } else {
        echo '<h1>Download link is expired...</h1>';
        exit();
    }
    
}
