<?php
/*Template Name: Download*/

if(isset($_REQUEST["file"])){
	// Get parameters
    $file = urldecode($_REQUEST["file"]);

    //$string = str_replace('/', ' ', $file); 
    //$folder = explode(" ", $string);
    
    $filepath = 'wp-content/uploads/processed_images/' . $file;
    if (headers_sent()) {
        die("Redirect failed. Please click on this link: <a href=...>");
    }
    else{
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
}
