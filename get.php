<from action=""method="GET">
  usernamne : <input type="text" name="name">
  <br>
  password : <input type="text" name="pwd">
  <br>
  <input type="submit" name="submit">
</from>

<?php
  if(isset($_GET['submit']))
   {
 	 echo $_GET['name'];
 	 echo $_GET['pwd'];
   }	
?>