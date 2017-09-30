<?php
function indexAction($smarty){


    if ($_SESSION['language'] == "ua"){
        $smarty->assign('pageTitle', 'КОНТАКТИ');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'contacts');


    }else{

        $smarty->assign('pageTitle', 'КОНТАКТИ');
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'contacts_eng');


    }
}
