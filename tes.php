<?php

function ul($pat){
$home = "https://api.youtubemultidownloader.com/$pat";
$x = json_decode(file_get_contents($home),1);
$x = $x["items"];$no=1;
foreach ($x as $i){
$idx = $i["id"];
$img = "<center><img src='https://i.ytimg.com/vi/$idx/hqdefault.jpg' /> </center>";
$title = $i["title"];
$link = $i["url"];
echo "<p>$img <br>
[$no] $title <br>";
donl($link);
echo "<br>";
$no++;
}}
function donl($pat){
$pot = "https://api.youtubemultidownloader.com/video?url=$pat";
$x = json_decode(file_get_contents($pot),1);
$x = $x["format"];
foreach($x as $i){
$format = $i["height"];
$urldl = $i["url"];
if($urldl == null){ $urldl = $i["manifestUrl"]; }
$dl = "<a href='$urldl' > $format </a>";
echo "$dl | ";
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
    
    <?php if($msg==true){echo "URL INVALID <br>";} ?>
    <form action="" method="post" >
      <input type="url" name="url" value="" />
      <input type="submit" name="go" value=" Download " />
    </form>
  <?php
if(isset($_POST["go"])){
$link = $_POST["url"];
$l = array("youtube.com","youtu.be","playlist");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
if(strpos($link,$l[2]) != null)){
$url = "playlist?url=$link&nextPageToken=";
ul($url);
}else{
donl($link);
}
}else{
$msg = 1; 
}}
?>
    
  </body>
</html>
