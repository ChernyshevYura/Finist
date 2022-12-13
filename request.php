<?php

class Request{

    public function GetData($url){

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 	
        $res = curl_exec($ch);
        curl_close($ch);
        $jsObj = json_decode($res, true);
        $result = $jsObj['results'];

        return($result);
    }
    

    public function SearchAdress($url, $region){

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 	
        $res = curl_exec($ch);
        curl_close($ch);
        $jsObj = json_decode($res, true);
        $result = $jsObj['results'];

        return($result);
    }

    
    
}
?>