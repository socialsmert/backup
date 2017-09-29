<div class="admin-addnews">
    {foreach $news as $item name=news}
    <form method="POST" action="/admin/updatenews/{$item['id']}">

        <input required type="text" placeholder="title" value="{$item['title']}" name="title"/><br>
        <input required type="text" placeholder="image" value="{$item['image']}" name="image"/><br>
        <input required   type="text" placeholder="date" value="{$item['date']}" name="date"/><br>
        <textarea name="text">{$item['text']}</textarea>


        <script>

            CKEDITOR.replace("text");

        </script>

        <input type="submit" name="submit" value="+">
        {/foreach}
    </form>
</div>
</body>
</html>
