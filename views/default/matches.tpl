<div class="matches-page">

Матчі
    <div class="m-spacer"></div>
    {foreach $calendar as $item name=calendar}
    <div class="match-item">

        <div class="home-match">{$item['place']}</div>
        <div class="date-match">{$item['date']}</div>
        <div class="team1-match">{$item['team1']}</div>
        <div class="score1-match">{$item['score1']}</div>
        <div class="div-match">:</div>
        <div class="score2-match">{$item['score2']}</div>
        <div class="team2-match">{$item['team2']}</div>




    </div>
    {/foreach}
</div>
</div>