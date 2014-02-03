# Front end for [torrent-feed-scraper](https://github.com/errolb/torrent-feed-scraper)

This a simple PHP inerface for managing a JSON db of rss feed for [torrent-feed-scraper](https://github.com/errolb/torrent-feed-scraper) that would be hosted on your local/remote (X)AMP server.

The way it works is as follows: locate a site that provides torrent searches and a rss feed of that specific search. The key is to narrow the search down so that, if periodically pinged, would return up-to-date yet relevant results. The scraper (see [torrent-feed-scraper](https://github.com/errolb/torrent-feed-scraper)), assumedly  operating on a cron, will download all torrents in the XML that isn't already appended with `.added` as this is what transmission-daemon uses to mark torrents as already added in its watch folder.

Please view `read.php` and edit the `$path_to_json` so that it has the same path to where  the scraper is looking for the `feed_list.json` file. Both paths need to be the same. This file needs to be created.

Lastly, assume all have the permissions to do as needed.