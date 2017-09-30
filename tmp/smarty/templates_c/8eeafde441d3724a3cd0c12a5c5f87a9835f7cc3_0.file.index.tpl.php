<?php
/* Smarty version 3.1.30, created on 2017-09-30 06:29:40
  from "W:\domains\backup\views\default\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cf0fa4a5e3f5_20076266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eeafde441d3724a3cd0c12a5c5f87a9835f7cc3' => 
    array (
      0 => 'W:\\domains\\backup\\views\\default\\index.tpl',
      1 => 1506740502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cf0fa4a5e3f5_20076266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="omg-content" id="omg-content">
	<div class="section-1">
		<div id="s-1-background">
			<div id="s-1-content">

				<div class="s-1-content-left">

					<div class="s-1-content-left-title">Головні новини</div>
					<div class="s-1-content-left-date"><a href="/news">перейти до всіх новин</a></div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'item', false, NULL, 'news', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>


					<a href="/article/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="s-1-content-left-news-item">

						<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="">

						<div class="s-1-content-left-news-item-overflow">
							<div class="s-1-content-left-news-item-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</div>
							<div class="s-1-content-left-news-item-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
						</div>
					</a>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




				</div>

			</div> 
		</div>
	</div>

	<div id="s-2" class="section-2 noselect">

		<div class="section-2-content">

			<div id="s-2-content-scroll"><img src="/images/scroll.png" alt=""></div>

			<div id="s-2-content-left" class="section-2-content-left">НАШ<br>АРСЕНАЛ<br>КИЇВ</div>
			<div id="section-2-content-divider"></div>
			<div id="s-2-content-right" class="section-2-content-right">Оновлений столичний ФК «Арсенал» – це в першу чергу, вірність традиціям. Ми ставимо перед собою ціль створити сім’ю, із футболістів та вболівальників. Опираючись на свій внутрішній ресурс, дитячо-юнацьку футбольну школу молодих «канонірів», ми продовжуємо шлях до вершин українського футболу.</div>

			<a href="/" id="s-2-content-item-1" class="s-2-content-item"><img src="/images/team.png" alt="">КОМАНДА</a>
			<a href="/" id="s-2-content-item-2" class="s-2-content-item"><img src="/images/stadium.png" alt="">СТАДІОН</a>

		</div>

	</div>


	<div class="section-3 noselect">

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
				var translate = 0;
				var clickleft = 0;
				var clickright = 0;

				function previtem(){
				    if (clickleft >= 9){}else{
					translate = translate + width;
					document.getElementById("section-3-content-match-line").style.transform="translateX("+translate+"px)";
                    clickright = clickright - 1;
                    clickleft = clickleft + 1;}}

				function nextitem(){
				    if (clickleft <= 0){ }else {
					translate = translate - width;

					document.getElementById("section-3-content-match-line").style.transform="translateX("+translate+"px)";
                    clickleft = clickleft - 1;
                    clickright = clickright+1;}}

			<?php echo '</script'; ?>
>
			

		</div>

	</div>

	<div class="section-4">

		<div class="section-4-content noselect">
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
						<img src="https://onehdwallpaper.com/wp-content/uploads/2016/07/Most-Beautiful-Baby-Animal-Desktop-Wallpaper.jpg" />
					</div>
					<div class="nav">
						<label for="img-6" class="prev">&#x2039;</label>
						<label for="img-2" class="next">&#x203a;</label>
					</div>
				</li>

				<input type="radio" name="radio-btn" id="img-2" />
				<li class="slide-container">
					<div class="slide">
						<img src="https://lh3.googleusercontent.com/38AA1f5CWFkZYjnAQmAn2jVzuLBCE0DLtrBUVyRCKZQ1Kfy1lVr28Sq-zOYd7OrSQA=h900" />
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
</div>


<div class="section-footer" id="section-footer">
	<a id="linktotop" href="#"><i id="arr" class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>	
	<h1 class="noselect" id="copyr">©2017 Arsenal-Kyiv</h1>
</div>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		$('#linktotop').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 'slow');
			return false;
		});
		
	});
<?php echo '</script'; ?>
>



</body>
</html><?php }
}
