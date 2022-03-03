<?php

function ul($pat){
$home = "https://api.youtubemultidownloader.com/$pat";
$x = json_decode(file_get_contents($home),1);
$x = $x["items"];$no=1;
foreach ($x as $i){
$idx = $i["id"];
$img = "<img src='https://i.ytimg.com/vi/$idx/hqdefault.jpg' /> ";
$title = $i["title"];
$link = $i["url"];
echo "<p>$img <br>
$no | $title <br> $url <br> </p>";
$no++;
}}

if(isset($_POST["go"])){
$link = $_POST["url"];
$l = array("youtube.com","youtu.be");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
$url = "/playlist?url=$link&nextPageToken=";
ul($url);
/*
$x = $x["items"];$no=1;
foreach($x as $i){
$id = $i["id"];
$img = "<img src='https://i.ytimg.com/vi/$id/hqdefault.jpg' /> ";
$title = $i["title"];
$url = $i["url"];
$pot = "https://api.youtubemultidownloader.com/video?url=$url";
echo "<p>$img <br>
$no | $title <br> $url <br> </p>";
$no++;
}
$x = json_decode(file_get_contents($pot),1);
$x = $x["format"];
foreach($x as $i){
$url = $i["height"];
*/
}else{
  $msg = 1; 
}}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="YouTube Download" content="Irkop">
    <title></title>
  </head>
  <body>
    
    <?php if($msg==true){echo "\e[1;31m URL INVALID <br>";} ?>
    <form action="" method="post" >
      <input type="url" name="url" value="" />
      <input type="submit" name="go" value=" Download " />
      
    </form>
    
    
  </body>
</html>
