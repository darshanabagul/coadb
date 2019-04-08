<?php

	$url = "https://blazinghog.com/onebill-shipstation/index.php/api/test_cron";
	//$url = "https://blazinghog.com/onebill-shipstation/index.php/api/cron";
   $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                    CURLOPT_HTTPHEADER => [
                       // "Content-Type: application/json ", 
                        //"Authorization:".$apiKey, 
                    ],
                ]);
                $resp = curl_exec($curl);
                curl_close($curl);
echo 'success';

?>