<?php
    header("Access-Control-Allow-Origin: http://app.3em.it");
    header("Access-Control-Allow-Headers: *");
$sent_Token = $_POST["token"];
$secureCode = "!LBp&#N%s@#4_vD6y54NnwFL*__&%?ZAYWvfu3NE";
$addString = "";
if($sent_Token == $secureCode){
    if(isset($_FILES['file_1'])){
    $file_1_tmp = $_FILES['file_1']['tmp_name'];
    $addString.= ',"file1" : "'.$file_1_tmp.'"';
    $file_path_1 = "../resources/FeedData/Feed1.jpeg";
    unlink($file_path_1);
    move_uploaded_file($file_1_tmp,$file_path_1);
    }
    if(isset($_FILES['file_2'])){
    $file_2_tmp = $_FILES['file_2']['tmp_name'];
    $addString.= ',"file2" : "'.$file_2_tmp.'"';
    $file_path_2 = "../resources/FeedData/Feed2.jpeg";
    unlink($file_path_2);
    move_uploaded_file($file_2_tmp,$file_path_2);
    }
    if(isset($_FILES['file_3'])){
    $file_3_tmp = $_FILES['file_3']['tmp_name'];
    $addString.= ',"file3" : "'.$file_3_tmp.'"';
    $file_path_3 = "../resources/FeedData/Feed3.jpg";
    unlink($file_path_3);
    move_uploaded_file($file_3_tmp,$file_path_3);
    }
    http_response_code(200);
    header('Content-Type: application/json');
    echo '{"statusCode" : "200", "statusText" : "Success"'.$addString.'}';
}
else {
    http_response_code(401);
    header('Content-Type: application/json');
    echo '{"statusCode" : "401", "statusText" : "User not autorized", "token" : "'.$sent_Token.'}';
}
?>