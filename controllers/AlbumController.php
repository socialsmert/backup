<?php
include "models/AlbumModel.php";


function indexAction($smarty){
    if ($_SESSION['language'] == "ua"){
    $id = $_GET['id'];
    $album = showSelectedAlbum($id);
    $photos = showSelectedAlbumPhotos($id);

    $smarty->assign('pageTitle', 'ФОТО');
    $smarty->assign('album', $album);
    $smarty->assign('photos', $photos);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'album');
    
}else{

        $id = $_GET['id'];
        $album = showSelectedAlbum($id);
        $photos = showSelectedAlbumPhotos($id);

        $smarty->assign('pageTitle', 'ФОТО');
        $smarty->assign('album', $album);
        $smarty->assign('photos', $photos);

        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'album_eng');

    }
}
