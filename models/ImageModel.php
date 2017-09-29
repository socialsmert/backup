<?php


function showImage(){
    $sql = "SELECT * FROM `images` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function insertImage($name){

    $sql = "INSERT INTO `images`
            SET
                `name` = '$name'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}
