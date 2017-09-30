<?php

function indexAction($smarty){

    if ($_SESSION['language'] == "ua"){

        $smarty->assign('pageTitle', 'КЛУБ');
        $smarty->assign('pageTitle', 'КЛУБ');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'club');

    }else{


        $smarty->assign('pageTitle', 'КЛУБ');
        $smarty->assign('pageTitle', 'КЛУБ');
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'club_eng');

    }
}
