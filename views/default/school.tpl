<style>



    .team-photo{
        background-image: url(http://www.arsenal-kyiv.com/uploads/media/team/0001/04/thumb_3643_team_big.jpeg);
    }

    .content-team-item-main-1-title a{
        color: white;
    }

    .team-photo-logo{
        background: linear-gradient(to right, coral 0%, rgba(0,0,0,0.35) 100%);

    }

    .player-item{
        background: coral;
    }

    .cat-item{

        background: coral;
    }
    .content-team-item-main-1-spacer{

        margin-bottom: -320px;
    }

    .team-photo-logo{
        color: #f77a4f;
        font-size: 350px;
    }
    }

</style>


<div class="team-page">



    <div class="team-page-content">


        <a href="https://www.arsenalkids.info/" class="ars-kids">

            <img src="/images/kids.png" alt="">

        </a>

        <div class="team-photo">



            <div class="team-photo-logo">



            </div>

        </div>


        <div id="team-line-id" class="team-line">

            <div class="cat-item">
                <i class="fa fa-users" aria-hidden="true"></i>
                ТРЕНЕРИ

            </div>


            {foreach $trainers as $item name=trainers}
            <a href="/player/{$item['id']}" class="player-item">

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


