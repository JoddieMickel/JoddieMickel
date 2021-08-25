<form method="post" action="/registration">
    {{csrf_field()}}
    <label>First Name</label>
    <input type="text" name="first_name"><br>
    <label>Second Name</label>
    <input type="text" name="second_name"><br>
    <label>Email</label>
    <input type="text" name="email"><br>
    <label>Password</label>
    <input type="password" name="password"><br>

    
    <input type="submit" name="submit" value="SUBMIT">

</form>