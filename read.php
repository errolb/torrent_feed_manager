<?php
    $path_to_json = '/home/narkath/.torrent_scraper/feed_list.json';
    $command = 'cat ' . $path_to_json;
    $rawjson = shell_exec($command);
    $feed_list = json_decode($rawjson);
    //var_dump($feed_list);
    # How to acces the data
    # $feed_list->rss[0]->feedTitle
    # $feed_list->rss[0]->feedUrl
    # 0 being array index

?>
