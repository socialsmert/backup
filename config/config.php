<?php
define ('PathPrefix', $_SERVER['DOCUMENT_ROOT'].'/controllers/');
define ('PathPostfix', 'Controller.php');
$template = 'default';
define ('TemplatePrefix', $_SERVER['DOCUMENT_ROOT']."/views/{$template}/");
define ('TemplatePostfix', '.tpl');
define ('TemplateWebPath', "/templates/{$template}/");
require($_SERVER['DOCUMENT_ROOT'].'/library/Smarty/libs/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('library/Smarty/configs');
$smarty->assign('templateWebPath', TemplateWebPath);