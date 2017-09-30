<?php
function indexAction($smarty){

    if ($_SESSION['language'] == "ua"){

        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('pageTitle', 'СТАДІОН');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'stadium');

    }else{


        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('pageTitle', 'СТАДІОН');
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'stadium_eng');

    }
}
