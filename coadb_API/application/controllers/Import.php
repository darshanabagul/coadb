<?php
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');

defined('BASEPATH') OR exit('No direct script access allowed');

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

class Import extends CI_Controller {


public function all(){

	  $path = __DIR__ .'/../../upload_to_s3';
	  //echo $path; exit;
	
	  $list = $this->get_dir_contents($path);
	  $count_of_files = count($list);
	  $list_uploaded = $this->send_to_s3($list);
	  $count_uploaded = count($list_uploaded);
	  $deleted = '';
	  if($count_of_files == $count_uploaded){
	  	$to_remove = $this->get_dir_contents2($path);
	  	$deleted = $this->remove_all($to_remove);	 	
	  	//echo '<pre>'; print_r($to_remove); exit;
	  }

	   echo  'Files to Upload- '.$count_of_files.'<br>';
	   echo  'Files Uploaded- '.$count_uploaded.'<br>';
	   echo  'Deleted Folder- '.$deleted.'<br>';
	   //print_r($list_uploaded); exit;

}

public function remove_dir(){

	$dir = '/var/www/html/test/upload_to_s3/test1/full_images';

	// if(!rmdir($dir))
	//   {
	//   echo ("Could not remove $dir");
	//   }
	if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir"){
            rrmdir($dir."/".$object);
         }else{ 
            unlink($dir."/".$object);
         }
       }
     }
     reset($objects);
     rmdir($dir);
  }
}

public function remove_all($list){
		$count = 0;
		foreach ( $list as $dir ) {
				if (is_dir($dir)) {
				     $objects = scandir($dir);
				     foreach ($objects as $object) {
				       if ($object != "." && $object != "..") {
				         if (filetype($dir."/".$object) == "dir"){
				            rrmdir($dir."/".$object);
				         }else{ 
				            unlink($dir."/".$object);
				         }
				       }
				     }
				     reset($objects);
				     rmdir($dir);
				  }
			$count++;
		    ///$file->isDir() ?  rmdir($file) : unlink($file);
		}

		return $count;
}

public function send_to_s3($list){

	$credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6YYIYUYOT', 'KrEECjus211eVsiyuEFJYskkV2GmD34m2pHqqsjP');   
	  // $bucket = 'bucket.coadb';
	  $bucket = 'test-coadb';
	  $s3Client = new Aws\S3\S3Client([
            'version' => '2006-03-01',
            'region'  => 'us-east-2',
            'credentials' => $credentials
        ]);

	   $data = [];
	  foreach($list as $img){

	  	  $filepath = $img;	
		  $keyname = str_replace("/var/www/html/test/upload_to_s3/","",$img);
		 // $data[] = $keyname;
		 try {
	 
	              $params = [
	                        'Bucket' => $bucket,
	                        'Key'    => $keyname,
	                        'SourceFile'   => $filepath,
	                        'ACL'    => 'private',//'authenticated-read'
	                        'ContentType' => 'image/jpeg'
	                ];
	            $result = $s3Client->putObject($params);

	           $data[] = $result['ObjectURL'];
	            } catch (S3Exception $e) {
	              
	            }
	   }

	return $data;

}


public function get_dir_contents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
          //  if (strpos($path, 'full_size') !== false || strpos($path, 'shop-images') !== false) {
            $results[] = $path;
         //   }
        } else if($value != "." && $value != "..") {
            $this->get_dir_contents($path, $results);
           // $results[] = $path;
        }
    }

    return $results;
}


public function get_dir_contents2($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
           //  if (strpos($path, 'full_size') !== false || strpos($path, 'shop-images') !== false) {
           // // $results[] = $path;
           //  }
        } else if($value != "." && $value != "..") {
            $this->get_dir_contents2($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}


public function test(){

	//echo 'here'; 
	  $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6YYIYUYOT', 'KrEECjus211eVsiyuEFJYskkV2GmD34m2pHqqsjP');   
	  $bucket = 'bucket.coadb';
	  $s3Client = new Aws\S3\S3Client([
            'version' => '2006-03-01',
            'region'  => 'us-east-2',
            'credentials' => $credentials
        ]);


		 $filepath = FCPATH.'images/test.jpg';
		$keyname = 'test/test.jpg';	
	
	  
		//$data[] = $keyname;
		   try {
	 
	              $params = [
	                        'Bucket' => $bucket,
	                        'Key'    => $keyname,
	                        'SourceFile'   => $filepath,
	                        'ACL'    => 'private',//'authenticated-read'
	                        'ContentType' => 'image/jpeg'
	                ];
	            $result = $s3Client->putObject($params);

	             echo $result['ObjectURL'];
	            } catch (S3Exception $e) {
	              
	            }
}



}