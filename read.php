<?php
		# Set $path_to_json to where you create the torrent scraper's json db file is
		# Be sure to create this file in a convenient location for torrent-feed-scraper.
		# View and edit the source code as necessary.

    $path_to_json = '/Users/admin/Desktop/feed_list.json';
    $command = 'cat ' . $path_to_json;
    $rawjson = shell_exec($command);
    $feed_list = json_decode($rawjson);
?>
