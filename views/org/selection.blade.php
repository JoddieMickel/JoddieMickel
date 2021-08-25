<form method="post" action="/selection">
    {{csrf_field()}}
    <label>Age</label>
    <input type="text" name="age"><br>
    <label>Gender</label><br>
    <select name='gender'>
      <option value="male">Male</option>
      <option value="female">Female</option>
      </select>
  <br>
  <label>Sector</label><br>
  <select name='sector'>
      <option value="child">Children</option>
      <option value="youth">youth</option>
      <option value="girls">Girls</option>
      <option value="orphans">Orphans</option>
      <option value="women">Women</option>
      </select>
    <input type="submit" name="submit" value="SUBMIT">

</form>