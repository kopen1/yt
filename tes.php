<?php

if(isset($_POST["go"])){
$link = $_POST["url"];
$url = "https://api.youtubemultidownloader.com/playlist?url=$link&nextPageToken=";
$x = json_decode(file_get_contents($url),1);
print_r($x);
}else{
  $msg = true;$text = " URL INVALID ";
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
    
    <?php if($msg==true) echo $txt; ?>
    <form action="dl.php" method="post" >
      <input type="url" name="url" value="" />
      <input type="submit" name="go" value=" Download " />
      
    </form>
    
    
  </body>
</html>
