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
$title <br>";
$x = $i["format"];
foreach($x as $i){
$format = $i["height"];
$urldl = $i["url"];
if($urldl == null){ $urldl = $i["manifestUrl"]; }
$dl = "<a class='url' href='$urldl' > {$format}P </a>";
echo "$dl ";
if($format == 144){ break; }
}
}
function ads(){
  echo "
  <script type=\"text/javascript\">
	atOptions = {
		'key' : 'c1d5f82105b2c6ab8fa71fe7f430d631',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type=\"text/javascript\" src=\"http' + (location.protocol === 'https:' ? 's' : '') + '://navigablepiercing.com/c1d5f82105b2c6ab8fa71fe7f430d631/invoke.js\"></scr' + 'ipt>');
</script>
";
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
<link rel="icon" href="https://icon-library.com/images/youtube-icon-download-for-desktop/youtube-icon-download-for-desktop-12.jpg">
<meta name="title" content="Youtube Multi Downloader">
<meta name="description" content="Free youtube downloader online, free youtube video downloader online, download youtube online free, youtube downloader mp3 online free without any software, youtube multi downloader v3">
<meta name="keywords" content="Download youtube, multi download, youtube multi downloader">
<meta property="og:title" content="Youtube Multi Downloader Online Free">
<meta property="og:description" content="Free youtube downloader online, free youtube video downloader online, download youtube online free, youtube downloader mp3 online free without any software, youtube multi downloader v3">
<meta property="og:site_name" content="Youtube Multi Downloader">
<title>Youtube Multi Downloader</title>
  </head>
  <body>
    <div class="con">
      <a href="/" ><h2 class="tc">Youtube Multi Downloader</h2></a>
      <p>Download Video YouTube Via Link Singel,Playlist and Channel.<br>
      Example Link/URL : <br></p>
      <p>
      Singel : <br>
      <bold>
      https://www.youtube.com/watch?v=abc123 <br>
      </bold><br /></p>
      <p>
      Playlist : <br />
      <bold>
      https://www.youtube.com/watch?v=abc123 <br>
      </bold><br />
      Channel : <br><bold>
      https://youtube.com/c/name_channel<br>
      https://youtube.com/user/name_channel<br>
      https://youtube.com/channel/abc123 <br>
      </bold>
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
ads();
$link = $_POST["url"];
$l = array("youtube.com","youtu.be","playlist","/c/","/channel/");
if(strpos($link,$l[0]) != null | strpos($link,$l[1]) != null){
if(strpos($link,$l[2]) != null | strpos($link,$l[3]) != null | strpos($link,$l[4]) != null){
$url = "playlist?url=$link&nextPageToken=";
ul($url);
}else{
donl($link);}
}else{
echo "URL INVALID <br>";
}}
ads();
echo "</div></div>";
?>
 
 <footer>
  <p>
 <a href="Privacy_Policy.html" target="_blank" >Privacy Policy</a>
 <a href="terms.html" target="_blank" >Terms & Conditions</a>
 <a href="Disclaimer.html" target="_blank" > Disclaimer </a>
 <a href="https://t.me/IRK0P/" target="_blank"> CONTACT </a>
 </p>
  <p><a href="/" >YouTube Multi Downloader</a></p>
  <p>Irkop ©2022</p>
</footer>
 
 
    
  </body>
</html>
