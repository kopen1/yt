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
$title = $i["title"];
$img = "<center><img src='$idx' width='100%' alt='IRKOP - $title' /> </center>";
echo "<br><p>$img <br>
$title <br> Download : 
";
$x = $i["format"];
foreach($x as $i){
$format = $i["height"];
$urldl = $i["url"];
if($urldl == null){ $urldl = $i["manifestUrl"]; }
$dl = "<a class='url' href='$urldl' > {$format}P </a>";
echo "$dl";
if($format == 144){ break; }
}
}
if(isset($_POST["go"])){
  $m = 1;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Youtube Multi Downloader">
<link rel="icon" href="https://youtubemultidownloader.net/favicon.ico">
<meta name="title" content="Youtube Multi Downloader Online Free">
<meta name="description" content="Free youtube downloader online, free youtube video downloader online, download youtube online free, youtube downloader mp3 online free without any software, youtube multi downloader v3">
<meta name="keywords" content="Download youtube, multi download, youtube multi downloader">
<meta property="og:title" content="Youtube Multi Downloader Online Free">
<meta property="og:description" content="Free youtube downloader online, free youtube video downloader online, download youtube online free, youtube downloader mp3 online free without any software, youtube multi downloader v3">
<meta property="og:site_name" content="Youtube Multi Downloader">
<title>Youtube Multi Downloader Online Free</title>
  </head>
  <body>
       <div class="con">
      <h2> Youtube Multi Downloader Online </h2>
      <p> Link Singel,Playlist and Channel.
      Example Link/URL :
      Singel : https://www.youtube.com/watch?v=pqkq.....
      Playlist : https://youtube.com/playlist?list=PLq.....
      Channel : https://youtube.com/c/....| https://youtube.com/user/.... | https://youtube.com/channel/....
      </p>
    <div class="box">
    <form action="" method="post" >
      <input type="url" name="url" placeholder="Input Url YouTube" />
      <input type="submit" name="go" value=" Download " />
    </form>
       </div></div>
       
<?php
if($m == 1){
echo '<div class="con"><div class="box">';
$link = $_POST["url"];
$l = array("youtube.com","youtu.be","watch");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
if(strpos($link,$l[2]) != null){
donl($link);
}else{
 //(strpos($link,$l[2]) != null | strpos($link,$l[3]) != null | strpos($link,$l[4]) != null | strpos($link,$l[5]) != null ){
$url = "playlist?url=$link&nextPageToken=";
ul($url);
}



}else{
echo "URL INVALID <br>";
}}
echo "</div></div>";
?>
    
  </body>
</html>
