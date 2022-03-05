<?php



function save($x){

  $a = fopen("save.html","a+");

  fwrite($a, $x);

  fclose($a);

}

$url = "https://yt5s.com/api/ajaxSearch";

$data = "q=$link&vt=home";

$res = json_decode(curl($url,$data),1);

$vid = $res["vid"];

$title = $res["title"];

$token = $res["token"];

$time = $res["timeExpires"];

$mp4 = $res["links"]["mp4"];

$img = "<a href='https://img.youtube.com/vi/$vid/hqdefault.jpg' > </a> 

";

save($img);

foreach($mp4 as $x){

  $f = $x["f"];

  $q = $x["q"];

  $size = $x["size"];

$url = "https://dd28.vnaydjzfazd.xyz/api/json/convert";

$data = "v_id=$vid&ftype=$f&fquality=$q&fname=$title&token=$token&timeExpire=$time";

$get = json_decode(curl($url,$data),1);

$linkdl = $get["result"];

$msg = "

$size | $q | <a href='$linkdl' > Download </a>";

save($msg);

}

?>
