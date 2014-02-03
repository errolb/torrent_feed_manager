<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    include('read.php');
   
    $response = array('feedTitle' => $_POST['feed_name'], 'feedUrl' => $_POST['feed_url']);
    
    #add to object array
    $feed_list->rss[]= $response;

    $fp = fopen($path_to_json, 'w');
    $write_success = fwrite($fp, json_encode($feed_list));
    fclose($fp);
    chmod($path_to_json, 0777);
    var_dump(json_encode($feed_list));
    
    if ($write_success) {
        #http://10.0.0.11/vhosts/feedlist/
        var_dump("SUCCESS!! . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]);
        header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    } else {
        var_dump("FAIL!! . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]);
        echo "Ah! Hell! Something went wrong.";
    }
    
}

?>
