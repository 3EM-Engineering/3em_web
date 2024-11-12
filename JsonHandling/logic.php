<?php 
function returnJson() {
    $json = file_get_contents('../resources/jsonFeed.json');
    return $json;
}
function readJson() {
    $json = file_get_contents('../resources/jsonFeed.json');
    //Decode JSON
    $json_data = json_decode($json,true);
    return $json_data;
}
function saveJson($newJson) {
    $data_to_write = $newJson;
$file_path = "resources/jsonFeed.json";
$file_handle = fopen($file_path, 'w'); 
fwrite($file_handle, $data_to_write);
fclose($file_handle);
}
?>