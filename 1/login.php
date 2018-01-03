<html>
<head>
<title>
	login
</title>


	<form action="" method="post">

<table>
<tr><td>Username:</td><td><input type="text" name="name"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Log in"></td></tr>
</table>
</form>
<starting php>

<?php

$db = mysql_select_db("project", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['name'];

$password = $_POST['password'];

if($fname !='' && $password !=''){
//Insert Query of SQL




$query = mysql_query("insert into login(name,password) values ('$fname','$password')");
print "<h1><br/><br/><span>Welcome</br></br>You are now a member of our community</br></br>Thanks .....</br></br></span></h1>";

}
else{
print "<h1>To be resister plz fill up all step</h1>";
}
}
mysql_close($connection); // Closing Connection with Server
?>

</div></div></div>

</html>