<?php
/* Smarty version 3.1.30, created on 2017-09-29 19:33:55
  from "W:\domains\backup\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce75f3e19fa1_77929308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eeafde441d3724a3cd0c12a5c5f87a9835f7cc3' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\index.tpl',
      1 => 1506697629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce75f3e19fa1_77929308 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="section-1">
    <div id="s-1-background">
        <div id="s-1-content">

            <div class="s-1-content-left">

                <div class="s-1-content-left-title">Головні новини</div>
                <div class="s-1-content-left-date"><a href="/news">перейти до всіх новин</a></div>

                <a href="/" class="s-1-content-left-news-item">

                    <img src="/images/IMG_6540-2.jpg" alt="">

                    <div class="s-1-content-left-news-item-overflow">
                        <div class="s-1-content-left-news-item-date">19 вересня 2017</div>
                        <div class="s-1-content-left-news-item-title">Заголовок новини про новий матч</div>
                    </div>
                </a>

                <a href="/" class="s-1-content-left-news-item">

                    <img src="/images/IMG_6540-2.jpg" alt="">

                    <div class="s-1-content-left-news-item-overflow">
                        <div class="s-1-content-left-news-item-date">19 вересня 2017</div>
                        <div class="s-1-content-left-news-item-title">Заголовок новини про новий матч</div>
                    </div>
                </a>

                <a href="/" class="s-1-content-left-news-item">

                    <img src="/images/IMG_6540-2.jpg" alt="">

                    <div class="s-1-content-left-news-item-overflow">
                        <div class="s-1-content-left-news-item-date">19 вересня 2017</div>
                        <div class="s-1-content-left-news-item-title">Заголовок новини про новий матч</div>
                    </div>
                </a>


            </div>

        </div> 
    </div>
</div>

<div id="s-2" class="section-2">

    <div class="section-2-content">

        <div id="s-2-content-scroll"><img src="/images/scroll.png" alt=""></div>

        <div id="s-2-content-left" class="section-2-content-left">НАШ<br>АРСЕНАЛ<br>КИЇВ</div>
        <div id="section-2-content-divider"></div>
        <div id="s-2-content-right" class="section-2-content-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur fuga, assumenda hic dolorem quibusdam placeat non atque deleniti dignissimos ex recusandae nisi, mollitia esse cupiditate maiores sapiente officiis suscipit praesentium. Lorem ipsum dolor sit amat fet</div>

        <a href="/" id="s-2-content-item-1" class="s-2-content-item"><img src="/images/team.png" alt="">КОМАНДА</a>
        <a href="/" id="s-2-content-item-2" class="s-2-content-item"><img src="/images/stadium.png" alt="">СТАДІОН</a>

    </div>

</div>


<div class="section-3">

    <div class="section-3-content">

        <div id="section-3-content-match-container">

            <div id="section-3-content-match-line">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calendar']->value, 'item', false, NULL, 'calendar', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <div class="section-3-content-match-item">
                    <div class="section-3-content-match-item-team">
                        <img src="/images/teams/<?php echo $_smarty_tpl->tpl_vars['item']->value['team1'];?>
.png" alt=""><br><?php echo $_smarty_tpl->tpl_vars['item']->value['team1'];?>

                    </div>
                    <div class="section-3-content-match-item-result">

                        РЕЗУЛЬТАТ
                        <br><span class="score"><?php echo $_smarty_tpl->tpl_vars['item']->value['score1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['score2'];?>
</span><br>
                        <span class="date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</span>

                    </div>
                    <div class="section-3-content-match-item-team">
                        <img src="/images/teams/<?php echo $_smarty_tpl->tpl_vars['item']->value['team2'];?>
.png" alt=""><br>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['team2'];?>

                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



            </div>

        </div>
        <div class="s-3-buttons">
            <button onclick="previtem()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
            інші матчі
            <button onclick="nextitem()"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
        </div>
        
        <?php echo '<script'; ?>
>

            var width = document.getElementById("section-3-content-match-container").offsetWidth;
            console.log(width);
            var translate = 0;

            function previtem(){
                translate = translate + width;
                document.getElementById("section-3-content-match-line").style.transform="translateX("+translate+"px)";}
            function nextitem(){
                translate = translate - width;

                document.getElementById("section-3-content-match-line").style.transform="translateX("+translate+"px)";}

        <?php echo '</script'; ?>
>
        

    </div>

</div>

<div class="section-4">

    <div class="section-4-content">
        Турнірна таблиця<br>
        <table cellspacing="0" class="tournament-table" id="head-table">
            <tr>
                <td>#</td>
                <td class="team">Команда</td>
                <td class="games">І</td>
                <td class="score">О</td>
            </tr>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['table']->value;?>


    </div>

</div>


<div class="section-5">

    <div class="section-5-content">

        <ul class="slides">
            <input type="radio" name="radio-btn" id="img-1" checked />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/1.JPG" />
                </div>
                <div class="nav">
                    <label for="img-6" class="prev">&#x2039;</label>
                    <label for="img-2" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-2" />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/2.JPG" />
                </div>
                <div class="nav">
                    <label for="img-1" class="prev">&#x2039;</label>
                    <label for="img-3" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-3" />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/3.JPG" />
                </div>
                <div class="nav">
                    <label for="img-2" class="prev">&#x2039;</label>
                    <label for="img-4" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-4" />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/4.JPG" />
                </div>
                <div class="nav">
                    <label for="img-3" class="prev">&#x2039;</label>
                    <label for="img-5" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-5" />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/5.JPG" />
                </div>
                <div class="nav">
                    <label for="img-4" class="prev">&#x2039;</label>
                    <label for="img-6" class="next">&#x203a;</label>
                </div>
            </li>

            <input type="radio" name="radio-btn" id="img-6" />
            <li class="slide-container">
                <div class="slide">
                    <img src="/images/slider/6.JPG" />
                </div>
                <div class="nav">
                    <label for="img-5" class="prev">&#x2039;</label>
                    <label for="img-1" class="next">&#x203a;</label>
                </div>
            </li>

            <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                <label for="img-6" class="nav-dot" id="img-dot-6"></label>
            </li>
        </ul>






    </div>

</div>


<div class="section-footer">



</div>



</body>
</html><?php }
}
