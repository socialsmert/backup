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
    if ($_SESSION['login'] == 1){
        $smarty->assign('pageTitle', 'Admin');
        $smarty->assign('displayValue', 'block');
        loadTemplate($smarty, 'adminheader');
        loadTemplate($smarty, 'admin');
    }else{
        $smarty->assign('pageTitle', 'Admin');
        $smarty->assign('displayValue', 'none');
        loadTemplate($smarty, 'adminheader');
        loadTemplate($smarty, 'adminlogin');
    }

}






function loginAction(){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (($username == "admin") && ($password == "1234")){
        $_SESSION['login'] = 1;
    }else{
        $_SESSION['login'] = 0;
    }

    header( "Location: /admin" );
}

function logoutAction(){
    $_SESSION['login'] = 0;
    header( "Location: /admin" );
}


function playerAction($smarty){
    if ($_SESSION['login'] == 1){
    $id = $_GET['id'];
    $player = showSelectedPlayer($id);
    $smarty->assign('player', $player);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminplayer');
    }else{
        header( "Location: /admin" );
    }
}

function imagesAction($smarty){
    if ($_SESSION['login'] == 1){
        $images = showImage();
    $smarty->assign('images', $images);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminimage');
    }else{
        header( "Location: /admin" );
    }
}



//NEWS


function createnewsAction($smarty){
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminaddnews');
}

function newsAction($smarty){
    if ($_SESSION['login'] == 1){
    $news = showAllNews();
    $hiddennews = showAllHiddenNews();
    $smarty->assign('news', $news);
    $smarty->assign('hiddennews', $hiddennews);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminnews');
    }else{
        header( "Location: /admin" );
    }
}


function addnewsAction($smarty){
    if ($_SESSION['login'] == 1){
        $title = $_POST['title'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $text = $_POST['text'];





    $res = insertNews($title, $date, $text, $image);

    if($res){
        header( "Location: /admin/news" );
    }
    }else{
        header( "Location: /admin" );
    }
}




function editnewsAction($smarty){
    if ($_SESSION['login'] == 1){
        $id = $_GET['id'];
    $news = showSelectedNews($id);
    $smarty->assign('news', $news);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admineditnews');

    }else{
        header( "Location: /admin" );
    }
}



function updatenewsAction()
{
    if ($_SESSION['login'] == 1){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $text = $_POST['text'];
        $image = $_POST['image'];

    $res = updateNews($id, $title, $date, $text, $image);

    header( "Location: /admin/news" );

    }else{
        header( "Location: /admin" );
    }
}


function deletenewsAction(){
    if ($_SESSION['login'] == 1){
        $id = $_GET['id'];
    deleteNews($id);
    header( "Location: /admin/news" );
    }else{
        header( "Location: /admin" );
    }
}



function shownewsAction(){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    makeVisibleNews($id);
    header( "Location: /admin/news" );

    }else{
        header( "Location: /admin" );
    }
}


function hidenewsAction(){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    makeHiddenNews($id);
    header( "Location: /admin/news" );

    }else{
        header( "Location: /admin" );
    }
}




//CALENDAR

function calendarAction($smarty){
    if ($_SESSION['login'] == 1){
    $calendar = showCalendar();

    $smarty->assign('calendar', $calendar);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admincalendar');
    }else{
        header( "Location: /admin" );
    }
}


function newcalendarAction($smarty){
    if ($_SESSION['login'] == 1){
        $calendar = showCalendar();

    $smarty->assign('calendar', $calendar);
    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminaddcalendar');
    }else{
        header( "Location: /admin" );
    }
}





function addcalendarAction(){
    if ($_SESSION['login'] == 1){
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
    }else{
        header( "Location: /admin" );
    }
}



function deletecalendarAction(){
    if ($_SESSION['login'] == 1){
        $id = $_GET['id'];
    deleteCalendar($id);
    header( "Location: /admin/calendar" );
    }else{
        header( "Location: /admin" );
    }
}


function savecalendarchangesAction(){
    if ($_SESSION['login'] == 1){
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
    }else{
        header( "Location: /admin" );
    }
}



function albumsAction($smarty){
    if ($_SESSION['login'] == 1){
        $albums = showAlbums();
    $smarty->assign('albums', $albums);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminalbum');

    }else{
        header( "Location: /admin" );
    }
}





function addalbumAction($smarty){
    if ($_SESSION['login'] == 1){
        $title = $_POST['title'];
    $mainphoto = $_POST['mainphoto'];

    $res = insertAlbum($title, $mainphoto);

    if($res){
        header( "Location: /admin/albums" );
    }
    }else{
        header( "Location: /admin" );
    }
}


//
function addalbumphotoAction(){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    $name = $_POST['name'];
    $size = getSize($name);

    $res = addAlbumPhoto($id, $name, $size);

   if($res){
        header( "Location: /admin/editalbum/$id" );
     }
    }else{
        header( "Location: /admin" );
    }
}


function deletealbumphotoAction(){
    if ($_SESSION['login'] == 1){
        $id = $_GET['id'];
    $album_id = deleteAlbumPhoto($id);
    header( "Location: /admin/editalbum/$album_id" );
    }else{
        header( "Location: /admin" );
    }
}



function editalbumAction($smarty){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    $albums = showSelectedAlbum($id);
    $photos = showSelectedAlbumPhotos($id);

    $smarty->assign('albums', $albums);
    $smarty->assign('photos', $photos);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'admineditalbum');
    }else{
        header( "Location: /admin" );
    }
}




function updatealbumAction($smarty){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    $title = $_POST['title'];
    $mainphoto = $_POST['mainphoto'];
    updateAlbums($id, $title, $mainphoto);
    header( "Location: /admin/albums" );
    }else{
        header( "Location: /admin" );
    }
}



function videosAction($smarty){
    if ($_SESSION['login'] == 1){
        $videos = showVideos();
    $smarty->assign('videos', $videos);

    loadTemplate($smarty, 'adminheader');
    loadTemplate($smarty, 'adminvideos');
    }else{
        header( "Location: /admin" );
    }
}


function addvideoAction(){
    if ($_SESSION['login'] == 1){
        $title = $_POST['title'];
    $image = $_POST['image'];
    $link = $_POST['link'];
    insertVideos($title, $image, $link);
    header( "Location: /admin/videos" );
    }else{
        header( "Location: /admin" );
    }
}


function deletevideoAction(){
    if ($_SESSION['login'] == 1){
        $id =$_GET['id'];
    deleteVideo($id);
    header( "Location: /admin/videos" );
    }else{
        header( "Location: /admin" );
    }
}



function addimageAction(){
    if ($_SESSION['login'] == 1){
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

    }else{
        header( "Location: /admin" );
    }
}

