<?php
    /**
     * Delete Curl data using CURL 
     */



     $url = "https://dummyjson.com/products/1";

     $curl = curl_init($url);

     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
     ));
     
     $response = curl_exec($curl);
     curl_close($curl);


     $response = json_decode($response);

     print_r($response);


?>