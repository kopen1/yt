<?php

if(isset($_POST["go"])){
$link = $_POST["url"];
$l = array("youtube.com","youtu.be");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";
$x = json_decode(file_get_contents($url),1);
$total = $x["totalResults"];
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
print_r($x);

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
