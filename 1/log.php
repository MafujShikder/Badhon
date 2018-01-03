
<html>
<head>
<title>
	login
</title>


	<form action=""method="post">

<table class='center'>
<tr><td>Username:</td><td><input type="text" name="name"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Log in"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td colspan=2>Lost your username or password? Find it <a href="http://www.authpro.com/auth/Toonklasse/?action=lost">here</a>!</td></tr>
<tr><td colspan=2>Not member yet? Click <a href="http://www.authpro.com/auth/Toonklasse/?action=reg">here</a> to register.</td></tr>
</table>
</form>
<starting php>

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("project1", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['name'];

$password = $_POST['password'];

if($fname !='' && $password !=''){
//Insert Query of SQL




$query = mysql_query("insert into login(fname,lname,email,password,confirm_password) values ('$fname','$lname','$email', '$password', '$confirm_password')");
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