<?php
/* Smarty version 3.1.30, created on 2017-09-30 05:39:05
  from "W:\domains\backup\views\default\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cf03c9587bc0_27901522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2311177822aeb9686159343011f7a80080cdbd8' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\admin.tpl',
      1 => 1506739144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cf03c9587bc0_27901522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>

    body{
        background: #2d3134;
    }

</style>

<div class="admin-main">
    <table cellspacing="0">
        <tr>
            <td class="header" colspan="3">Керування <a id="logout" href="/admin/logout">Вийти</a></td>
            
        </tr>
        <tr>
            <td colspan="3" class="title">Новини</td>

        </tr>
        <tr>
            <td>Новини</td>
            <td><a href="/admin/createnews">+ Додати</a></td>
            <td><a href="/admin/news">Переглянути</a></td>
        </tr>
        <tr>
            
            <td colspan="3" class="title">Медіа</td>
        </tr>
        <tr>
            <td>Альбоми</td>
            <td><a href="/admin/albums">+ Додати</a></td>
            <td><a href="/admin/albums">Переглянути</a></td>
        </tr>
        <tr>
            <td>Відео</td>
            <td><a href="/admin/videos">+ Додати</a></td>
            <td><a href="/admin/videos">Переглянути</a></td>
        </tr>
        <tr>
           <td colspan="3" class="title">Календар матчів</td>
        </tr>
        <tr>
            <td>Матчі</td>
            <td><a href="/admin/newcalendar">+ Додати</a></td>
            <td><a href="/admin/calendar">Переглянути</a></td>
        </tr>
        
        <tr>
           <td colspan="3" class="title">Зображення</td>
        </tr>
        <tr>
            <td>Фото</td>
            <td><a href="/admin/images">+ Додати</a></td>
            <td><a href="/admin/images">Переглянути</a></td>
        </tr>
    
    </table>

</div>
</body>
</html>
<?php }
}
