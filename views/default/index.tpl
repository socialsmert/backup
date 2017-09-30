<div class="omg-content" id="omg-content">
	<div class="section-1">
		<div id="s-1-background">
			<div id="s-1-content">

				<div class="s-1-content-left">

					<div class="s-1-content-left-title animated fadeInDown">Головні новини</div>
					<div class="s-1-content-left-date animated fadeInDown"><a href="/news">перейти до всіх новин</a></div>
					{foreach $news as $item name=news}


					<a href="/article/{$item['id']}" class="s-1-content-left-news-item">

						<img src="{$item['image']}" alt="">

						<div class="s-1-content-left-news-item-overflow">
							<div class="s-1-content-left-news-item-date">{$item['date']}</div>
							<div class="s-1-content-left-news-item-title">{$item['title']}</div>
						</div>
					</a>

					{/foreach}



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

			<a href="/team" id="s-2-content-item-1" class="s-2-content-item"><img src="/images/team.png" alt="">КОМАНДА</a>
			<a href="/stadium" id="s-2-content-item-2" class="s-2-content-item"><img src="/images/stadium.png" alt="">СТАДІОН</a>

		</div>

	</div>


	<div class="section-3 noselect">

		<div class="section-3-content">

			<div id="section-3-content-match-container">

				<div id="section-3-content-match-line">

					{foreach $calendar as $item name=calendar}
					<div class="section-3-content-match-item">
						<div class="section-3-content-match-item-team">
							<img src="/images/teams/{$item['team1']}.png" alt=""><br>{$item['team1']}
						</div>
						<div class="section-3-content-match-item-result">

							РЕЗУЛЬТАТ
							<br><span class="score">{$item['score1']} - {$item['score2']}</span><br>
							<span class="date">{$item['date']}</span>

						</div>
						<div class="section-3-content-match-item-team">
							<img src="/images/teams/{$item['team2']}.png" alt=""><br>
							{$item['team2']}
						</div>
					</div>
					{/foreach}


				</div>

			</div>
			<div class="s-3-buttons">
				<button onclick="previtem()"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
				інші матчі
				<button onclick="nextitem()"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
			</div>
			{literal}
			<script>

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

			</script>
			{/literal}

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
			{$table}

		</div>

	</div>


	<div class="section-5">

		<div class="section-5-content">

			<ul class="slides">
				<input type="radio" name="radio-btn" id="img-1" checked />
				<li class="slide-container">
					<div class="slide">
						<img src="/images/slider/5.JPG" />
					</div>
					<div class="nav">
						<label for="img-6" class="prev">&#x2039;</label>
						<label for="img-2" class="next">&#x203a;</label>
					</div>
				</li>

				<input type="radio" name="radio-btn" id="img-2" />
				<li class="slide-container">
					<div class="slide">
						<img src="/images/slider/6.JPG" />
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
	<a id="linktotop" href="#"><i id="arr" class="fa fa-arrow-circle-up animated fadeInDown" aria-hidden="true"></i></a>	
	<h1 class="animated fadeInDown noselect" id="copyr">©2017 Arsenal-Kyiv</h1>
</div>

<script>
	$(document).ready(function(){
		$('#linktotop').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 'slow');
			return false;
		});
	});
	
	$(window).scroll(function() { 
if ($(this).scrollTop()> (100%-180px) { 
$('#copyr').fadeIn(); 
} else { 
$('#copyr').fadeOut(); 
} 
});
	
	var a = $(document).height();
	alert(a);

</script>



</body>
</html>