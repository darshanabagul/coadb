<?php
ini_set('max_execution_time', 0); 

defined('BASEPATH') OR exit('No direct script access allowed');

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
//require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
    
    $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6YYIYUYOT', 'KrEECjus211eVsiyuEFJYskkV2GmD34m2pHqqsjP');
    $bucket = 'bucket.coadb';
    //$bucket = 'test-coadb';
    $s3Client = new Aws\S3\S3Client([
         'version' => '2006-03-01',
         'region'  => 'us-east-2',
         'credentials' => $credentials
     ]);

    $cmd = $s3Client->getCommand('GetObject', [
      'Bucket' => $bucket,
      'Key' => 'a\'court/shop-images/a\'court-coat-of-arms-family-crest-1.png'
    ]);

    $request = $s3Client->createPresignedRequest($cmd, '+1 days');
    $presignedUrl = (string)$request->getUri();


    $woocommerce = new Client(
      'http://ec2-3-16-187-143.us-east-2.compute.amazonaws.com/coadb', // Your store URL
              'ck_6a066ae8baa265294cdca8f06a5558f7951a56d3', // Your consumer key
              'cs_658a1649288ce50999fb8f7867e5489904c7ab3a',
      [
          'wp_api' => true, // Enable the WP REST API integration
          'version' => 'wc/v3' // WooCommerce WP REST API version
      ]
    );

    $data = [
      'name' => 'Premium two',
      'type' => 'simple',
      'regular_price' => '13.99',
      'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
      'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
      'categories' => [
          [
              'id' => 42
          ]
      ],
      'downloadable' => 1,
      'downloads' => [
          [
            'id' => 'a\'court/shop-images/a\'court-coat-of-arms-family-crest-1.png',
            'name' => 'a\'court/shop-images/a\'court-coat-of-arms-family-crest-1.png',
            'file' => $presignedUrl
          ]
      ],
      'images' => [
        [
            'src' =>  $presignedUrl
        ]
      ]
    ];

    if($woocommerce->post('products', $data)) {
      echo 'product added successfuly';
    } else {
      echo 'something went wrong';
    }

    die();
		$this->load->view('welcome_message');
	}

  public function getValidUrl() {
    $post_data = $_POST['Key'];
    $force_download = false;
    $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6YYIYUYOT', 'KrEECjus211eVsiyuEFJYskkV2GmD34m2pHqqsjP');
    $bucket = 'bucket.coadb';
      //$bucket = 'test-coadb';
    $s3Client = new Aws\S3\S3Client([
         'version' => '2006-03-01',
         'region'  => 'us-east-2',
         'credentials' => $credentials
     ]);

    $cmd = $s3Client->getCommand('GetObject', [
      'Bucket' => $bucket,
      'Key' => $post_data,
      'ResponseContentType' => 'application/octet-stream',
      'ResponseContentDisposition' => 'attachment; filename="'.$post_data.'"'
    ]);

    if($force_download){
      $params['ResponseContentType'] = 'application/octet-stream';
      $params['ResponseContentDisposition'] = 'attachment; filename="'.$post_data.'"';
    }
    $request = $s3Client->createPresignedRequest($cmd, '+1 days');
    echo $presignedUrl = (string)$request->getUri();
  }

	public function addProduct() {
    $product_obj = array();
    $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6YYIYUYOT', 'KrEECjus211eVsiyuEFJYskkV2GmD34m2pHqqsjP');
    $bucket = 'bucket.coadb';

    $s3Client = new Aws\S3\S3Client([
       'version' => '2006-03-01',
       'region'  => 'us-east-2',
       'credentials' => $credentials
   ]);
    
    $results = $s3Client->getPaginator('ListObjects', [
      'Bucket' => $bucket
    ]);
   
    $whitelist = array(
      '127.0.0.1',
      '::1'
    );

    foreach ($results as $result) {
        foreach ($result['Contents'] as $object) {
            $explode_path = explode('/', $object['Key']);
            if (!empty($explode_path[1])) {
                  if ($explode_path[1]=='shop-images') {
                    $explode_path1 = explode('/', $object['Key']);
                    $value = end($explode_path1);
                    if (!empty($value)) {
                      $product_obj[] = $value;
                    }
                  }
            }
        }
    }

    if (!empty($product_obj)) {
        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
            $woocommerce = new Client(
              'http://ec2-3-16-187-143.us-east-2.compute.amazonaws.com/coadb', // Your store URL
              'ck_6a066ae8baa265294cdca8f06a5558f7951a56d3', // Your consumer key
              'cs_658a1649288ce50999fb8f7867e5489904c7ab3a', // Your consumer secret
              [
                'wp_api' => true, // Enable the WP REST API integration
                'version' => 'wc/v3' // WooCommerce WP REST API version
              ]
            );
        } else {
            $woocommerce = new Client(
              'http://localhost/coadb', // Your store URL
              'ck_17372d3e88c7c8c9e82466673640582350a88780', // Your consumer key
              'cs_276e9985c68244d7e3db685489a12c3fbf35dcf9', // Your consumer secret*/
              [
                  'wp_api' => true, // Enable the WP REST API integration
                  'version' => 'wc/v3' // WooCommerce WP REST API version
              ]
          );
        }

        foreach($product_obj as $key=>$val) {
            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $val);
            //str_replace('-',' ',$withoutExt);
            //check if product is already exists or not
            $existProduct = $woocommerce->get('products', ['search' => $withoutExt]);
            
            if (empty($existProduct)) {
                //find the parent category for this digital jpg image
                $parentCategory = $woocommerce->get('products/categories',['search' => 'JPG', 'per_page' => 1]);
                
                //create category name from name of image
                $catName = explode('-', $withoutExt);
                $existCat = $woocommerce->get('products/categories',['search' => $catName[0]]);

                if (empty($existCat)) {
                    $cat_data = [
                      'name' => $catName[0],
                      'parent' => $parentCategory[0]->id,
                    ];
                    $woocommerce->post('products/categories', $cat_data);
                    //take current saved category id
                    $existCat = $woocommerce->get('products/categories',['search' => $catName[0]]);
                }

                //create authorised image url
                $cmd = $s3Client->getCommand('GetObject', [
                  'Bucket' => $bucket,
                  'Key' => $catName[0].'/shop-images/'.$val
                ]);

                $request = $s3Client->createPresignedRequest($cmd, '+20 minutes');
                $presignedUrl = (string)$request->getUri();

                $data = [
                'name' => $withoutExt,
                'type' => 'simple',
                'regular_price' => '13.99',
                'description' => 'Digital JPG Image',
                'short_description' => 'Digital JPG Image',
                'categories' => [
                    [
                        'id' => $parentCategory[0]->id
                    ],
                    [
                        'id' => $existCat[0]->id
                    ]
                ],
                'downloadable' => 1,
                'images' => [
                  [
                      'src' =>  $presignedUrl
                  ]
                ]
              ];
              $woocommerce->post('products', $data);
            } else {
              //update product as downloadable
              $product_id = $existProduct[0]->id;
              $data = [
                'downloadable' => 1
              ];
              $woocommerce->put('products/'.$product_id, $data);
            }
        }
        echo 'product added successfuly';
    }
    die();
	}



}
