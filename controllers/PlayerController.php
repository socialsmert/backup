<?php
include "models/PlayerModel.php";


function indexAction($smarty){
    if ($_SESSION['language'] == "ua"){
    $id = $_GET['id'];
    $player = showSelectedPlayer($id);
    
    
    $smarty->assign('player', $player);

    $smarty->assign('pageTitle', 'ГРАВЕЦЬ');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'player');


    }else{

        $id = $_GET['id'];
        $player = showSelectedPlayer($id);


        $smarty->assign('player', $player);

        $smarty->assign('pageTitle', 'ГРАВЕЦЬ');
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'player_eng');

    }
}
