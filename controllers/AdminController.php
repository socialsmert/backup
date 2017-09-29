<?php
include "models/NewsModel.php";
include "models/CalendarModel.php";
include "models/AlbumModel.php";
include "models/PlayerModel.php";
include "models/ImageModel.php";
include "models/VideoModel.php";

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function indexAction($smarty){

    $smarty->assign('pageTitle', 'Admin');
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admin');
}


function playerAction($smarty){
    $id = $_GET['id'];
    $player = showSelectedPlayer($id);
    $smarty->assign('player', $player);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminplayer');

}

function imagesAction($smarty){
    $images = showImage();
    $smarty->assign('images', $images);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminimage');
}


//NEWS

function newsAction($smarty){
    $news = showAllNews();
    $hiddennews = showAllHiddenNews();
    $smarty->assign('news', $news);
    $smarty->assign('hiddennews', $hiddennews);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminnews');
}

function addnewsAction($smarty){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $text = $_POST['text'];





    $res = insertNews($title, $date, $text, $image);

    if($res){
        header( "Location: /admin/news" );
    }
}



function editnewsAction($smarty){
    $id = $_GET['id'];
    $news = showSelectedNews($id);
    $smarty->assign('news', $news);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admineditnews');

}


function updatenewsAction()
{
    $id = $_GET['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $text = $_POST['text'];

    $res = updateNews($id, $title, $date, $text);

    header( "Location: /admin/news" );

}

function deletenewsAction(){
    $id = $_GET['id'];
    deleteNews($id);
    header( "Location: /admin/news" );
}


function shownewsAction(){
    $id =$_GET['id'];
    makeVisibleNews($id);
    header( "Location: /admin/news" );

}

function hidenewsAction(){
    $id =$_GET['id'];
    makeHiddenNews($id);
    header( "Location: /admin/news" );

}



//CALENDAR

function calendarAction($smarty){
    $calendar = showCalendar();

    $smarty->assign('calendar', $calendar);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admincalendar');
}

function newcalendarAction($smarty){
    $calendar = showCalendar();

    $smarty->assign('calendar', $calendar);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminaddcalendar');
}




function addcalendarAction(){
    $date = $_POST['calendar-date'];
    $place = $_POST['calendar-place'];
    $team1 = $_POST['calendar-team1'];
    $score1 = $_POST['calendar-score1'];
    $team2 = $_POST['calendar-team2'];
    $score2 = $_POST['calendar-score2'];
    $day = $_POST['calendar-day'];
    $month = $_POST['calendar-month'];

    $res = insertCalendar($id, $date, $place, $team1, $score1, $team2, $score2, $day, $month);

    if($res){
        header( "Location: /admin/calendar" );
    }
}


function deletecalendarAction(){
    $id = $_GET['id'];
    deleteCalendar($id);
    header( "Location: /admin/calendar" );
}

function savecalendarchangesAction(){

    $id = $_POST['id'];
    $date = $_POST['date'];
    $place = $_POST['place'];
    $team1 = $_POST['team1'];
    $score1 = $_POST['score1'];
    $team2 = $_POST['team2'];
    $score2 = $_POST['score2'];
    $day = $_POST['day'];
    $month = $_POST['month'];

    $res = updateCalendar($id, $date, $place, $team1, $score1, $team2, $score2, $day, $month);

    if($res){
        $resData['success'] = 1;
        $resData['message'] = 'News updated!';
    } else {
        $resData['success'] = 0;
        $resData['message'] = 'News not updated!';
    }

    echo json_encode($resData);
    return;

}


function albumsAction($smarty){
    $albums = showAlbums();
    $smarty->assign('albums', $albums);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminalbum');

}




function addalbumAction($smarty){
    $title = $_POST['title'];
    $mainphoto = $_POST['mainphoto'];

    $res = insertAlbum($title, $mainphoto);

    if($res){
        header( "Location: /admin/album" );
    }
}

//
function addalbumphotoAction(){
    $id =$_GET['id'];
    $name = $_POST['name'];
    $size = getSize($name);

    $res = addAlbumPhoto($id, $name, $size);

   if($res){
        header( "Location: /admin/editalbum/$id" );
     }
}

function deletealbumphotoAction(){
    $id = $_GET['id'];
    $album_id = deleteAlbumPhoto($id);
    header( "Location: /admin/editalbum/$album_id" );
}


function editalbumAction($smarty){
    $id =$_GET['id'];
    $albums = showSelectedAlbum($id);
    $photos = showSelectedAlbumPhotos($id);

    $smarty->assign('albums', $albums);
    $smarty->assign('photos', $photos);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admineditalbum');
}



function updatealbumAction($smarty){
    $id =$_GET['id'];
    $title = $_POST['title'];
    $mainphoto = $_POST['mainphoto'];
    updateAlbums($id, $title, $mainphoto);
    header( "Location: /admin/album" );
}


function videosAction($smarty){
    $videos = showVideos();
    $smarty->assign('videos', $videos);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminvideos');
}

function addvideoAction(){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $link = $_POST['link'];
    insertVideos($title, $image, $link);
    header( "Location: /admin/videos" );
}

function deletevideoAction(){
    $id =$_GET['id'];
    deleteVideo($id);
    header( "Location: /admin/videos" );
}


function addimageAction(){
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {


        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);



        $filename = generateRandomString($length = 20);


        $newFileName = $filename . '.' . $ext;


        move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] .  '/images/' . $newFileName);

        $size = getimagesize($_SERVER['DOCUMENT_ROOT'] .  '/images/' . $newFileName)[0] . "x" . getimagesize($_SERVER['DOCUMENT_ROOT'] .  '/images/' . $newFileName)[1];

        insertImage($newFileName, $size);


    }

}
