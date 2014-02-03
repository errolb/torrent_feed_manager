<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mainstyle.css" type="text/css" />
<script src="jquery.min.js"></script>
<script src="scripts.jquery.js"></script>
</head>
<body>
<div id='wrap'>
<?php echo "<h1>Torrent RSS Feed subscriber</h1><h2>Add another feed...</h2>"; ?>

<form id="formCreate" name="formCreate" action="create.php" method="post">
    <label for='feed_name'>Feed Name</label>
    <input name='feed_name' id='feed_name' type='text' style='width:40%;display:block;'>
    <label for='feed_url'>Feed URL</label>
    <input name='feed_url' id='feed_url' type='text' style='width:40%;display:block;'>
    <input name='Submit' id='Submit' type='submit' value='Add new feed'>
</form>
<form id='formDelete' name='formDelete' action='delete.php' method='post'>
    <input name='delete_this' type='hidden' value=''>
</form>

<?php

include('read.php');

echo "
<h2>You are currently subscribed to to the following feeds ...</h2>
<dl>
";

foreach($feed_list->rss as $entry) {
   echo "
        <dt><strong>$entry->feedTitle</strong></dt>
        <dd>$entry->feedUrl <button type='button' value='$entry->feedTitle' class='hideme'>Delete</button></dd>
    ";
}

echo "</dl>";

?>

</div>
</body></html>
