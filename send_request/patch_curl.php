<?php
    /**
     * Send Post data using CURL 
     */

     $data = array('name' => 'Thananjeyan2', 'job' => 'CEO2');
     $json_data = json_encode($data);

     $url = "https://reqres.in/api/users/2";

     $curl = curl_init($url);

     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLINFO_HEADER_OUT, true);
     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
     curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);

     curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length:' . strlen($json_data)
     ));
     
     $response = curl_exec($curl);
     curl_close($curl);


     $response = json_decode($response);

     print_r($response);
     
     echo " <br> Results List .. <br>";
     echo $response->name . "\n";
     echo $response->job . "\n";



?>