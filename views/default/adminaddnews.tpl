<div class="admin-addnews">

    <form method="POST" action="/admin/addnews">

        <input required type="text" placeholder="Заголовок" name="title"/>
        <input required type="text" placeholder="Зображення" value="" name="image"/>
        <input required   type="text" placeholder="Дата (рррр.мм.дд)" name="date"/>
        <textarea name="text"></textarea>
        
        
        <script>
        
            CKEDITOR.replace("text");
            
        </script>
        
        <input type="submit" name="submit" value="Додати">

    </form>
</div>
</body>
</html>

