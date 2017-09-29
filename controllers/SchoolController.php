<?php
include "models/PlayerModel.php";

function indexAction($smarty){


       $trainers = showTrainers();
        $smarty->assign('pageTitle', 'ШКОЛА ФУТБОЛУ');
    $smarty->assign('trainers', $trainers);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'school');
}