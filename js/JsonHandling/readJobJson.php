<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header('Content-Type: application/json');
    $json = file_get_contents('../resources/jsonOffers.json');
    echo $json;
?>