<input id="image" type="file" />
<button onclick="addimage()">+</button>


{foreach $images as $item name=images}
    <img src="{$item['name']}" alt="">
   {$item['name']}

{/foreach}