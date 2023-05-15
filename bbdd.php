<?php

/*
  $url = "http://127.0.0.1:8080/api/preguntasIngles";    
 
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
 
                $json_response = curl_exec($curl);
                $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
 
                curl_close($curl);
                $response = json_decode($json_response, true);
                $response=(object)$response;
 
                $sessionKey= $response->results['session-key'];
        */
                echo $json_parameters.'</br>';
                echo $signature.'</br>';
                echo $sessionKey.'</br>';
 
 
                $json_parameters = json_encode((Array)$parameters);
                $signature = md5($json_parameters . $session_key);
    

                $url = "http://127.0.0.1:8080/api/preguntasIngles";    
                
 
 
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
 
                $json_response = curl_exec($curl);
                $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
              
 
                curl_close($curl);
                $response = json_decode($json_response, true);
                $response=(object)$response;
                $elarray=(array)$response;
 
               
                end($elarray[results][resultado]);
                $fin = key($elarray[results][resultado]); 
 
                
                printr($response);


?>