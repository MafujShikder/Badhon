
<html>
<head>
<title>
	login
</title>


	<div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: 500; max-width: 1000px; background-color:#336666; border: 2px solid #0361A8; border-radius: 5px; box-shadow: 0px 0px 8px #0361A8; margin: 50px auto auto;">
	<i><a href="Home.php"style="text-decoration:none"><div style="background: #0361A8; border-radius: 5px 5px 0px 0px; padding: 15px;"><span style="font-family: verdana,arial; color: #D4D4D4; font-size: 2.00em; font-weight:bold;">Back To Home</span></div></a>
	<div style="background: ; padding: 15px" id="ap_style">
	<style type="text/css" scoped>
	#ap_style td 
		{ 
				text-align:left; font-family: verdana,arial; color:white; font-size: 1.00em; weight:250px;height:65px;width:180px;
		}
	#ap_style input 
		{
				border: 1px solid #CCCCCC; border-radius: 5px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; 
		}
	#ap_style input[type="button"], #ap_style input[type="reset"], #ap_style input[type="submit"]
		{
				height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; text-align:right; margin-top: 10px; margin-left:7px;
		}
	#ap_style table.center
		{ 
				margin-left:auto; margin-right:auto; 
		}
	#ap_style .error 
		{
				font-family: verdana,arial; color: #D41313; font-size: 1.00em;
		}
	</style>
	</head>
<form action="" method="post">

<table class='center'>
<tr><td>প্রথম নাম</td><td><input type="text" name="first_name" value=""></td></tr>
<tr><td>শেষ নাম</td><td><input type="text" name="last_name" value=""></td></tr>
<tr><td>ইমেইল</td><td><input type="text" name="email" value=""></td></tr>
<tr><td>পাস ওয়ার্ড</td><td><input type="password" name="password" value=""></td></tr>
<tr><td>নিশ্চিতকরন   পাস ওয়ার্ড </td><td><input type="password" name="confirm_password" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="অ্যাকাউন্ট তৈরি করুন" name="submit"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>






</table>
</form>

<starting php>

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("project1", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if($fname !=''&& $lname !='' && $email !='' &&$password !='' &&$confirm_password !=''){
//Insert Query of SQL

if($password==$confirm_password)
{

$query = mysql_query("insert into login(fname,lname,email,password,confirm_password) values ('$fname','$lname','$email', '$password', '$confirm_password')");
print "<h1><br/><br/><span>Welcome</br></br>You are now a member of our community</br></br>Thanks .....</br></br></span></h1>";
}

else
{
print "<h1><br/><br/><span>Wrong ...</br>Confirm password not match</span></h1>";
}
}
else{
print "<h1>To be resister plz fill up all step</h1>";
}
}
mysql_close($connection); // Closing Connection with Server
?>

</div></div></div>

</html>