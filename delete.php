<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    include('read.php');
   
    $response = array('feedTitle' => $_POST['delete_this'], 'feedUrl' => '');
    foreach($feed_list->rss as $key => $entry)  {
    
        if ($entry->feedTitle == $response['feedTitle']){
            unset($feed_list->rss[$key]);
            #json_encode cannot handle an array with missing
            #index so turns it into objects. To fix, use array_values()
            #to re index array.
            $feed_list->rss = array_values($feed_list->rss);
        }
    }
 
    $fp = fopen($path_to_json, 'w');
    $write_success = fwrite($fp, json_encode($feed_list));
    fclose($fp);
    chmod($path_to_json, 0777);
    var_dump(json_encode($feed_list));
    
    if ($write_success) {
        header('Location: http://10.0.0.11/vhosts/feedlist/');
    } else {
        echo "Ah! Hell! Something went wrong.";
    }

}


?>
