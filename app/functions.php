<?php

function getArticles(){
    $db = mysqli_connect('db', 'user', 'secret', 'rcs13-db');
    $result = mysqli_query($db,'SELECT * FROM `articles`');
    mysqli_close($db);
    return $result;
}

function insertArticles($title, $imageurl, $body){
    $db = mysqli_connect('db', 'user', 'secret', 'rcs13-db');
    mysqli_query($db, "INSERT INTO `articles` (`title`, `image_url`, `body`) VALUES ('" . $title . "', '" . $imageurl . "', '" . $body . "')");
    mysqli_close($db);
}

?>