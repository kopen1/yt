<?php

if(isset($_POST["go"])){
echo $link = $_POST["url"];

$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";

$x = json_decode(file_get_contents($url),1);
print_r($x);
}else{
  echo " input kosong ";
}
?>
