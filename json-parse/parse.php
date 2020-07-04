<?php

$json = file_get_contents('res.json');

$modified_json = preg_replace("/(\s*?{\s*?|\s*?,\s*?)(['\"])?([a-zA-Z0-9]+)(['\"])?:/m", '$1"$3":', $json);

$arr = json_decode($modified_json, true);

// var_dump($arr);

foreach($arr['Data']['list'] as $list){
	echo $list['Name']."<br>";
}

?>
