<?php
    
    $db = new mysqli("localhost", "root", "", "avamusic");

    if($db->connect_error)
    {
       
        echo $db->connect_error;
    }

    else
    {
        $db->query("SET CHARACTER SET utf8");
    }
?>
