<?php

function showAlbums(){
    $sql = "SELECT * FROM `albums` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}



function showSelectedAlbum($id){
    $sql = "SELECT * FROM `albums` WHERE id = $id ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showSelectedAlbumPhotos($id){
    $sql = "SELECT * FROM `albumsphoto` WHERE album_id = $id ORDER BY id";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function addAlbumPhoto($id, $newFileName, $size){
    
    
     $sql = "INSERT INTO `albumsphoto`
            SET
                `photo` = '$newFileName',
                `size` = '$size',
                `album_id` = $id";

    
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;
}

function deleteAlbumPhoto($id){
    $sql = "SELECT album_id FROM `albumsphoto` WHERE id = $id";
    $album_id = mysqli_query($_SESSION['connection'], $sql);

    $sql = "DELETE FROM `albumsphoto` WHERE `id` = $id ";
    $rs = mysqli_query($_SESSION['connection'], $sql);

    $album_id = createRsArray($album_id);
    foreach ($album_id as $album_id_item => $item){
        $album_id = $item['album_id'];
    }
    return $album_id;
}
    
    function insertAlbum($title, $mainphoto){

    $sql = "INSERT INTO `albums`
            SET
                `mainphoto` = '$mainphoto',
                `title` = '$title'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function updateAlbums($id, $title, $mainphoto){

    $sql = "UPDATE `albums` SET  `title`='$title', `mainphoto`='$mainphoto' WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

