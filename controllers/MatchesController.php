<?php
include "models/CalendarModel.php";

function indexAction($smarty)
{
    $calendar = showCalendar();

    $smarty->assign('pageTitle', 'МАТЧІ');

    $smarty->assign('calendar', $calendar);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'matches');
}