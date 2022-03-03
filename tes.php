<?php


$link = readline(" Enter Your Link : ");
$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";
if($link){
echo file_get_contents($url);
}
?>
