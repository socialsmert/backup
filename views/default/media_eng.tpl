<style>

</style>


<div class="album-page noselect">
    <div class="content-album-item-main-1-title">PHOTO</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    
    {foreach $albums as $item name=albums}
    <a href="/album/{$item['id']}" class="album-item">
        
        <img src="{$item['mainphoto']}" alt="">
        <div class="album-item-info">
            
            {$item['title']}
            
        </div>
        

        
    </a>
    {/foreach}

    <div class="content-album-item-main-1-title-2">VIDEO</div>
    <div class="content-album-item-main-1-spacer"></div>
    
    {foreach $videos as $item name=videos}
    <a href="/video/{$item['id']}" class="album-item">
        
        <img src="{$item['image']}" alt="">
        <div class="album-item-info-video">
            <i class="fa fa-youtube-play" aria-hidden="true"></i><br>
            {$item['title']}
            
        </div>
        

        
    </a>
    {/foreach}
    








</div>
</div>