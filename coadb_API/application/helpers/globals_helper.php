<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Application specific global variables
class Globals
{
    public static $api_url = 'https://app.onebillsoftware.com';
    // public static $ss_api_url = 'https://private-anon-167188d028-shipstation.apiary-mock.com';
    public static $ss_api_url = 'https://ssapi.shipstation.com';
    public static $client_id = 'blazing2';
    public static $client_secret = 'c86f02c82a9b3ade6f50422ad6f5a2d36df1a966c11159606fc1e4495423456e';
    public static $username = 'matej.h@codaemonsoftwares.com';
    public static $password = 'f03d3e44e8ebea6d3689ad07103564c51f575d6878f570d5895016657024633b';
    public static $ss_token = 'ZDc2YTUxODQ2MzFhNGIwYjkwZDQ1OGFkNDUzYmEzMmE6MmZhODY5MjNmZDBkNDI3NzllYWI4MGM3NTE5MGI3M2Y=';


    public static function api_url()
    {
       
        return self::$api_url;
    }

    public static function client_id()
    {
       
        return self::$client_id;
    }

    public static function client_secret()
    {
       
        return self::$client_secret;
    }

    public static function username()
    {
       
        return self::$username;
    }

    public static function password()
    {
       
        return self::$password;
    }

    public static function token()
    {
       
        return self::$password;
    }

    public static function gettoken()
    {
            $url = self::$api_url.'/oauth/token';

            $data = [
                        "client_id" => self::$client_id,
                        "client_secret" => self::$client_secret,
                        "username" => self::$username,
                        "password" => self::$password,
                        "scope" => 'trust',
                        "grant_type" => 'password',
                       
                    ];

            $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_POST => 1,
                    CURLOPT_HTTPHEADER => [
                       // "Content-Type: application/json ", 
                        //"Authorization:".$apiKey, 
                    ],
                    CURLOPT_POSTFIELDS => http_build_query($data)
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($resp);
            //     echo '<pre>';
            // print_r($resp->token_type); exit;

            return $resp->token_type.' '.$resp->access_token;

    }

}