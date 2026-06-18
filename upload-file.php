<?php 
$url = $_FILES["fileTest"]["tmp_name"];
print_r($_FILES);

if(empty($url)){
    $url = './json/data.txt';
}
  $response = file_get_contents($url);
  $data_json = json_decode($response,true);
  $data = $data_json['data'];

  print_r($data);