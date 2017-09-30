<?php

include "models/TableModel.php";
include "models/CalendarModel.php";
include "models/NewsModel.php";

function indexAction($smarty){


        $news = showMainNewsIndex();


        $calendar = showCalendar();
        $table = showTable();
        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('table', $table);
        $smarty->assign('calendar', $calendar);
        $smarty->assign('news', $news);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
       

}

function enAction(){
    $_SESSION[language] = "en";
    header( "Location: /" );
}

function uaAction(){
    $_SESSION[language] = "ua";
    header( "Location: /" );
}
