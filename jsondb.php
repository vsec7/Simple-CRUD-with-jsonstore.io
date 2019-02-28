<?php

/*
    Simple C.R.U.D with jsonstore.io
    Created by versailles ~ Sec7or Team
*/

function insert($jsonDb, $key, $jsonData){
    return req("POST", $jsonDb."/".$key, $jsonData, array('Content-Type: application/json'));
}

function get($jsonDb, $key){
    return req("GET", $jsonDb."/".$key);
}

function getAll($jsonDb){
    return req("GET", $jsonDb);
}

function update($jsonDb, $key, $jsonData){
    return req("PUT", $jsonDb."/".$key, $jsonData, array('Content-Type: application/json'));
}

function delete($jsonDb, $key){
    return req("DELETE", $jsonDb."/".$key);
}


function req($method, $url, $post=null, $header=null) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    switch ($method) {
        case "GET":
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            break;
        case "POST":
            if($post != null){
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				}
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            break;
        case "PUT":
            if($post != null){
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				}
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            break;
        case "DELETE":
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");             
            break;
    }
    if($header != null){
    	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
return curl_exec($ch); 	
}
