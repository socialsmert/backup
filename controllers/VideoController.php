<?php
include "models/VideoModel.php";


function indexAction($smarty){

    if ($_SESSION['language'] == "ua"){

    $id = $_GET['id'];
    $video = showSelectedVideo($id);
    

    
    $smarty->assign('video', $video);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'video');

    }else{


        $id = $_GET['id'];
        $video = showSelectedVideo($id);



        $smarty->assign('video', $video);


        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'video_eng');

    }
}
