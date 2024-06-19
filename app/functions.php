<?php

$db = mysqli_connect('db', 'user', 'secret', 'rcs13-db');


function getArticles(){
    global $db;
    return mysqli_query($db,'SELECT * FROM `articles`');
}

function insertArticles($title, $imageurl, $body){
    global $db;
    mysqli_query($db, "INSERT INTO `articles` (`title`, `image_url`, `body`) VALUES ('" . $title . "', '" . $imageurl . "', '" . $body . "')");
}

?>