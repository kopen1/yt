<?php

function curl($url,$data = ""){

 $ch = curl_init();

 curl_setopt($ch, CURLOPT_URL,$url);

 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

 curl_setopt($ch, CURLOPT_HTTPHEADER,array(

   "user-agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36"

   ));

if($data != null){

  curl_setopt($ch, CURLOPT_POST,1);

  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

}

$result = curl_exec($ch);

return $result;

}

function ex($a,$b,$i,$get){

  $x = explode($a,$get);

  $x = explode($b,$x[$i])[0];

  return $x;

}

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
