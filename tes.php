<?php

function ul($pat){
$home = "https://api.youtubemultidownloader.com/$pat";
$x = json_decode(file_get_contents($home),1);
$x = $x["items"];
foreach ($x as $i){
$link = $i["url"];
donl($link);
}}
function donl($pat){
$pot = "https://api.youtubemultidownloader.com/video?url=$pat";
$i = json_decode(file_get_contents($pot),1);
$thum = $i["thumbnails"];
$idx = str_replace("default","hqdefault",$thum);
$img = "<center><img src='$idx' alt='IRKOP' /> </center>";
$title = $i["title"];
echo "<br><p>$img <br>
$title <br> Download : 
<ul class='menu'> ";
$x = $i["format"];
foreach($x as $i){
$format = $i["height"];
$urldl = $i["url"];
if($urldl == null){ $urldl = $i["manifestUrl"]; }
$dl = "<a href='$urldl' > {$format}P </a>";
echo "<li> $dl </li>";
if($format == 144){ break; }
}
echo "</ul>";
}
if(isset($_POST["go"])){
  $m = 1;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <title>YouTube Download</title>
  </head>
  <body>
       <div class="con">
       <div class="box">
      <p> Download Video YouTube Singel / Playlist </p>
    <form action="" method="post" >
      <input type="url" name="url" placeholder="Input Url YouTube" />
      <input type="submit" name="go" value=" Download " />
    </form>
       </div></div>
       
<?php
if($m == 1){
echo '<div class="con"><div class="box">';
$link = $_POST["url"];
$l = array("youtube.com","youtu.be","playlist","c","user","channel");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
if(strpos($link,$l[2]) != null | strpos($link,$l[3]) != null | strpos($link,$l[4]) != null | strpos($link,$l[5]) != null ){
$url = "playlist?url=$link&nextPageToken=";
ul($url);
}else{
donl($link);
}
}else{
echo "URL INVALID <br>";
}}
echo "</div></div>";
?>
    
  </body>
</html>
