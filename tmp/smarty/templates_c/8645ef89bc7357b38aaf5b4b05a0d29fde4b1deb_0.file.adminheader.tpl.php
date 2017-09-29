<?php
/* Smarty version 3.1.30, created on 2017-09-30 02:25:31
  from "W:\domains\backup\views\default\adminheader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ced66b45fc30_17894980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8645ef89bc7357b38aaf5b4b05a0d29fde4b1deb' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\adminheader.tpl',
      1 => 1506727529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ced66b45fc30_17894980 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/admin-main.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
font-awesome/css/font-awesome.min.css"> <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700,800,900" rel="stylesheet">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/jquery-3.2.1.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>


    </head>
    <body>


    <a href="/admin/logout">exit</a>


       <?php }
}
