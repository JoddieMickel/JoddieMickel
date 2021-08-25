<form method="post" action="/blog/create">
    {{csrf_field()}}
    <label>Title</label>
    <input type="text" name="title"><br>
    
    <label>author</label>
    <input type="text" name="author"><br>
    
    <label>content</label>
    <textarea name="content"></textarea>
    

    <input type="submit" name="submit" value="SUBMIT">

</form>