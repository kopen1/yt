<?php


$link = "https://youtube.com/playlist?list=PLKmkwxhfdH9FHLW7NsVY-Mv0fb23IMJDg";
$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";

echo file_get_contents($url);

?>
