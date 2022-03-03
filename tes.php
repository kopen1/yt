<?php

if(isset($_POST["go"])){
$link = $_POST["url"];

$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";

$x = json_decode(file_get_contents($url),1);
print_r($x);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="YouTube Download" content="Irkop">
    <title></title>
  </head>
  <body>
    
    <form action="" method="post" accept-charset="utf-8">
      <input type="text" name="url" value="" />
      <input type="button" name="go" id="go" value=" Download " />
      
    </form>
    
    
  </body>
</html>
