<?php

$json = file_get_contents('http://ps4trainer.com/Trainer/list.json');
$obj = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json));
file_put_contents("list.json", str_replace("/games", "", $json));

foreach ($obj->games as $game) {
	file_put_contents(str_replace("./games/", "", $game->url), file_get_contents(str_replace('./', 'http://ps4trainer.com/Trainer/', $game->url)));
	file_put_contents($game->title.".jpg", file_get_contents("http://ps4trainer.com/Trainer/img/".$game->title.".jpg"));
}

?>
