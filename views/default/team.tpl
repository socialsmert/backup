<style>

    .team-photo{
        background-image: url(/images/{foreach $tm as $item name=tm}{$item['photo']}{/foreach});
    }

    .content-team-item-main-1-title a{
        color: white;
    }



    .content-team-item-main-1-spacer{

        margin-bottom: calc(185px - 7vw);
    }

    .team-photo-logo{
        color: white;
        font-size: 15vw;
    }

</style>


<div class="team-page">

    <div class="add-content-menu">



        <ul>
            <li class="head-img"><i class="fa fa-users" aria-hidden="true"></i></li>
            <li><a href="/team/1">АРСЕНАЛ-КИЇВ</a></li>
            <li><a href="/team/2">U-19</a></li>
        </ul>
    </div>

    <!--
<div class="add-menu">

<ul>
<li class="title">КОМАНДА</li>
<li class="spacer"></li>
<li class="sort"><a href="/team/1">АРСЕНАЛ-КИЇВ</a></li>
<li class="sort"><a href="/team/2">U-19</a></li>


</ul>

</div>
-->

    <div class="team-page-content noselect">

        <div class="team-photo">





        </div>


        <div id="team-line-id" class="team-line">

            <div class="cat-item">
                Склад команди

            </div>


            {foreach $stf as $item name=stf}
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


        <div class="team-line">

            <div class="cat-item">

                Воротарі

            </div>
            {foreach $gk as $item name=gk}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>







        <div class="team-line">

            <div class="cat-item">

                Захисники

            </div>
            {foreach $def as $item name=def}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>








        <div class="team-line">

            <div class="cat-item">

                Півзахисники

            </div>
            {foreach $semdef as $item name=semdef}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                   <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>







        <div class="team-line">

            <div class="cat-item">

                Нападники

            </div>
            {foreach $atack as $item name=atack}
            <a href="/player/{$item['id']}" class="player-item">

                <div class="player-item-photo">
                    <img src="/images/players/{$item['id']}.jpeg" alt="">
                </div>

                <div class="player-item-surname">{$item['surname']}</div>





                <div class="player-item-number">{$item['number']}</div>

                <div class="player-item-name">{$item['name']}</div>

            </a>
            {/foreach}
        </div>





    </div>
</div>


