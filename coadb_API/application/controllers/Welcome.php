<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Aws\S3\S3Client;
use Aws\Exception\AwsException;
//require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

use Printful\Exceptions\PrintfulApiException;
use Printful\Exceptions\PrintfulException;
use Printful\Exceptions\PrintfulSdkException;
use Printful\PrintfulApiClient;
use Printful\PrintfulProducts;
use Printful\Structures\Sync\SyncProductCreationParameters;

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

    $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6WD5NE6WP', 'bCoZcAmp16YdFyxcHkFo0WMGIa6p3nPSkQ/N4IOP');
    
    $sharedConfig = [
      'region' => 'us-east-2',
      'version' => 'latest',
      'credentials' => $credentials
    ];

    // Create an SDK class used to share configuration across clients.
    $sdk = new Aws\Sdk($sharedConfig);

    // Create an Amazon S3 client using the shared configuration data.
    $client = $sdk->createS3();  
    $woocommerce = new Client(
      'http://localhost/coadb', // Your store URL
      'ck_17372d3e88c7c8c9e82466673640582350a88780', // Your consumer key
      'cs_276e9985c68244d7e3db685489a12c3fbf35dcf9', // Your consumer secret
      [
          'wp_api' => true, // Enable the WP REST API integration
          'version' => 'wc/v3' // WooCommerce WP REST API version
      ]
    );

    $data = [
      'name' => 'Premium',
      'type' => 'simple',
      'regular_price' => '13.99',
      'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
      'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
      'categories' => [
          [
              'id' => 42
          ]
      ],

      'images' => [
        [
            'src' =>  $client->getObjectUrl('bucket.coadb','merrick/shop-images/merrick-coat-of-arms-family-crest-1.png')//'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
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


	public function addProduct() {
    $product_obj = array();
    $credentials = new Aws\Credentials\Credentials('AKIAXSHLW3R6WD5NE6WP', 'bCoZcAmp16YdFyxcHkFo0WMGIa6p3nPSkQ/N4IOP');
    
    $sharedConfig = [
      'region' => 'us-east-2',
      'version' => 'latest',
      'credentials' => $credentials
    ];

    // Create an SDK class used to share configuration across clients.
    $sdk = new Aws\Sdk($sharedConfig);

    // Create an Amazon S3 client using the shared configuration data.
    $client = $sdk->createS3();
    
    $objects = $client->listObjects([
        'Bucket' => 'bucket.coadb',
        //"Delimiter" => "/"
    ]);

    foreach ($objects['Contents']  as $object) {
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

    if (!empty($product_obj)) {
        $woocommerce = new Client(
          /*
          'http://ec2-3-16-187-143.us-east-2.compute.amazonaws.com/coadb', // Your store URL
          'ck_6a066ae8baa265294cdca8f06a5558f7951a56d3', // Your consumer key
          'cs_658a1649288ce50999fb8f7867e5489904c7ab3a', // Your consumer secret
          */
          'http://localhost/coadb', // Your store URL
          'ck_17372d3e88c7c8c9e82466673640582350a88780', // Your consumer key
          'cs_276e9985c68244d7e3db685489a12c3fbf35dcf9', // Your consumer secret*/
          [
              'wp_api' => true, // Enable the WP REST API integration
              'version' => 'wc/v3' // WooCommerce WP REST API version
          ]
        );

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
                'images' => [
                  [
                      'src' =>  $client->getObjectUrl('bucket.coadb', $catName[0].'/shop-images/'.$val)//'https://s3.us-east-2.amazonaws.com/bucket.coadb/'.$catName[0].'/shop-images/'.$val
                  ]
                ]
              ];

              $woocommerce->post('products', $data);
            }
        }
        echo 'product added successfuly';
    }
    die();
	}

  public function test() {
      $apiKey = '5ahnt8xq-3hml-hfy9:tefm-kqiu9sjacra8'; //live server api key
      try {
          // create ApiClient
          $pf = new PrintfulApiClient($apiKey);

          echo '<pre>';
          print_r($pf);
          echo '</pre>';

          $products = $pf->get('products');
          

          // create Products Api object
          $productsApi = new PrintfulProducts($pf);
          
          echo '<pre>';
          print_r($productsApi);
          echo '</pre>';

          die();

          $data = [
              'sync_product' => [
                  'external_id' => 1, // set id in my store for this product (optional)
                  'name' => 'My new shirt',
                  'thumbnail' => 'https://www.my-webshop.com/shirt.jpg', // set thumbnail url
              ],
              'sync_variants' => [ // add sync variants
                  [
                      'external_id' => 1, // set id in my store for this variant (optional)
                      'retail_price' => 21.00, // set retail price that this item is sold for (optional)
                      'variant_id' => 4011, // set variant in from Printful Catalog(https://www.printful.com/docs/catalog)
                      'files' => [
                          [
                              'url' => 'https://www.my-webshop.com/shirt.jpg',
                          ],
                          [
                              'type' => 'back', // set print file placement on item. If not set, default placement for this product will be used
                              'id' => 1, // file id from my File library in Printful (https://www.printful.com/docs/files)
                          ],
                      ],
                      'options' => [
                          [
                              'id' => 'embroidery_type',
                              'value' => 'flat'
                          ],
                      ],
                  ],
                  [
                      'external_id' => 2, // set id in my store for this variant (optional)
                      'retail_price' => 21.00, // set retail price that this item is sold for (optional)
                      'variant_id' => 4012, // set variant in from Printful Catalog(https://www.printful.com/docs/catalog)
                      'files' => [
                          [
                              'url' => 'https://www.my-webshop.com/shirt.jpg',
                          ],
                          [
                              'type' => 'back', // set print file placement on item. If not set, default placement for this product will be used
                              'id' => 1, // file id from my File library in Printful (https://www.printful.com/docs/files)
                          ],
                      ],
                      'options' => [
                          [
                              'id' => 'embroidery_type',
                              'value' => 'flat'
                          ],
                      ],
                  ],
              ],
          ];
          $creationParams = SyncProductCreationParameters::fromArray($data);
          $product = $productsApi->createProduct($creationParams);
      } catch (PrintfulApiException $e) { // API response status code was not successful
          echo 'Printful API Exception: ' . $e->getCode() . ' ' . $e->getMessage();
      } catch (PrintfulSdkException $e) { // SDK did not call API
          echo 'Printful SDK Exception: ' . $e->getMessage();
      } catch (PrintfulException $e) { // API call failed
          echo 'Printful Exception: ' . $e->getMessage();
          var_export($pf->getLastResponseRaw());
      }
  }

}
