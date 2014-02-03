<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    include('read.php');
   
    $response = array('feedTitle' => $_POST['feed_name'], 'feedUrl' => $_POST['feed_url']);
     
    $feed_list->rss[]= $response;

    $fp = fopen($path_to_json, 'w');
    $write_success = fwrite($fp, json_encode($feed_list));
    fclose($fp);
    chmod($path_to_json, 0777);
    
    if ($write_success) {
        // Redirect back to main page after write
        $whereiam = dirname("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        header("Location: $whereiam");
    } else {
        echo "Ah, hell! Something went wrong.";
    }
    
}

?>
