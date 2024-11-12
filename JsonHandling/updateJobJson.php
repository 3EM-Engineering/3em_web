<?php
    header("Access-Control-Allow-Origin: http://app.3em.it");
    header("Access-Control-Allow-Headers: *");
$newJson = $_POST["json"];
$sent_Token = $_POST["token"];
$secureCode = "!LBp&#N%s@#4_vD6y54NnwFL*__&%?ZAYWvfu3NE";

if($sent_Token == $secureCode){
    $data_to_write = $newJson;
    $file_path = "../resources/jsonOffers.json";
    unlink($file_path);
    $file_handle = fopen($file_path, 'w'); 
    fwrite($file_handle, $data_to_write);
    fclose($file_handle);
    http_response_code(200);
    header('Content-Type: application/json');
    echo '{"statusCode" : "200", "statusText" : "Success"}';
}
else {
    http_response_code(401);
    header('Content-Type: application/json');
    echo '{"statusCode" : "401", "statusText" : "User not autorized"}';
}
?>