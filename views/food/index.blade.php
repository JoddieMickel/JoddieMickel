<form method="post" action="/food">
    {{csrf_field()}}
    <label>Name</label>
    <input type="text" name="name"><br>
    
    <label>quantity</label>
    <input type="number" name="qty"><br>
    
    <label>quality</label>
    <input type="text" name="qlty"><br>
    
    <label>Price</label>
    <input type="number" name="price"><br>
    
    <input type="submit" name="submit" value="SUBMIT">

</form>