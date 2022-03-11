<?php
    /**
     * Get Curl data using CURL 
     */


     $url = "https://reqres.in/api/users/2";

     $curl = curl_init($url);

     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
     ));
     
     $response = curl_exec($curl);
     curl_close($curl);


     $response = json_decode($response);

     print_r($response);
    //  echo " <br> Results List .. <br>";
    //  echo $response->name . "\n";
    //  echo $response->job . "\n";
    //  echo $response->id . "\n";
    //  echo $response->createdAt . "\n";


?>