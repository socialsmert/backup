<style>



    .team-photo{
        background-image: url(http://www.arsenal-kyiv.com/uploads/media/team/0001/04/thumb_3643_team_big.jpeg);
    }

    .team-page-content{
        width: 100%;
    }


</style>


<div class="team-page">



    <div class="team-page-content">


        <a href="https://www.arsenalkids.info/" class="ars-kids">

            <img src="/images/kids.png" alt="">

        </a>



        <div id="team-line-id" class="team-line">

            <div class="cat-item">

                ТРЕНЕРИ

            </div>


            {foreach $trainers as $item name=trainers}
            <a onclick="return false;" href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>



                <div class="player-item-name">{$item['surname']}  {$item['name']}</div>

                <div class="position">
                    {$item['position']}
                </div>

            </a>

            {/foreach}


        </div>








    </div>
</div>


