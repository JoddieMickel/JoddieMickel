
<form method="post" action="/login">
    {{csrf_field()}}
    <label>Email</label>
    <input type="text" name="email"><br>
    <label>Password</label>
    <input type="password" name="password"><br>

    
    <input type="submit" name="submit" value="LOGIN">

</form>