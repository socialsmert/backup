<input id="image" type="file" />
<button onclick="addimage()">+</button>


{foreach $images as $item name=images}
    <img src="/images/{$item['name']}" alt="">
    /images/{$item['name']}

{/foreach}