<?php
		# /home/narkath/.torrent_scraper/feed_list.json
		# put $path_to_json to where the torrent scraper's json db file is
    $path_to_json = '/<path>/<to>/<feedlist>/feed_list.json';
    $command = 'cat ' . $path_to_json;
    $rawjson = shell_exec($command);
    $feed_list = json_decode($rawjson);

?>
