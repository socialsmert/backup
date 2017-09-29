<?php

function showVideos(){
    $sql = "SELECT * FROM `videos` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function insertVideos($title, $image, $link){

    $sql = "INSERT INTO `videos`
            SET
                `image` = '$image',
                `link` = '$link',
                `title` = '$title'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function showSelectedVideo($id){
    $sql = "SELECT * FROM `videos` WHERE id = $id ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}


function deleteVideo($id){
    $sql = "DELETE FROM `videos` WHERE `id` = $id ";
    $rs = mysqli_query($_SESSION['connection'], $sql);
}