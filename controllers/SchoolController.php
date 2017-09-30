<?php
include "models/PlayerModel.php";

function indexAction($smarty){
    if ($_SESSION['language'] == "ua"){

       $trainers = showTrainers();
        $smarty->assign('pageTitle', 'ШКОЛА ФУТБОЛУ');
    $smarty->assign('trainers', $trainers);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'school');
    }else{

        $trainers = showTrainers();
        $smarty->assign('pageTitle', 'ШКОЛА ФУТБОЛУ');
        $smarty->assign('trainers', $trainers);
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'school_eng');
    }
}
