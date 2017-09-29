<?php


function showImage(){
    $sql = "SELECT * FROM `images` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function insertImage($name, $size){

    $sql = "INSERT INTO `images`
            SET
                `name` = '$name',
                `size` = '$size'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function getSize($name){
    $sql = "SELECT `size` FROM `images` WHERE `name` = '$name'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    $rs = createRsArray($rs);
    foreach ($rs as $rsitem => $item) {

       $rs = $item['size'];
    }

    return $rs;
}
