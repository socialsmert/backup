<?php
include "models/AlbumModel.php";
include "models/VideoModel.php";

function indexAction($smarty){



    if ($_SESSION['language'] == "ua"){

        $albums = showAlbums();
        $videos = showVideos();
        $smarty->assign('videos', $videos);
        $smarty->assign('albums', $albums);
        $smarty->assign('pageTitle', 'МЕДІА');

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'media');


    }else{


        $albums = showAlbums();
        $videos = showVideos();
        $smarty->assign('videos', $videos);
        $smarty->assign('albums', $albums);
        $smarty->assign('pageTitle', 'МЕДІА');

        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'media_eng');

    }
}
