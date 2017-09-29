<style>

    .player-page{
        background-image: url(/images/players/KT9_3634.jpg);
    }
    
    body{
        background: black;
    }

   


</style>


<div class="player-page">


    <div class="player-content">

        <div class="content-left">
           
    
           
            {foreach $player as $item name=player}
            <div class="content-left-header">
                BIO
            </div>
            <div class="content-left-text">
            {$item['info']}
            </div>
        </div>
        <div class="content-right">

            <div class="content-right-number">

               {$item['number']}

            </div>

            <div class="content-right-name">

                {$item['surname']}<br>{$item['name']}

            </div>

            <div class="content-item">

                <div class="content-item-value">

                    POSITION

                </div>
                
                {$item['position']}
                

            </div>

            <div class="content-item">

                <div class="content-item-value">

                    NATIONALITY

                </div>
                
                {$item['nationality']}
                

            </div>
            
            <div class="content-item">

                <div class="content-item-value">

                    BIRTH

                </div>
                
                {$item['birth']}
                

            </div>
            
            <div class="content-item">

                <div class="content-item-value">

                    HEIGHT

                </div>
                
                {$item['height']} sm
                

            </div>

       <div class="content-item">

                <div class="content-item-value">

                    WEIGHT

                </div>
                
                {$item['weight']} kg
                

            </div>

       {/foreach}
       
        </div>

    </div>

</div>