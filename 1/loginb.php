<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

  <title>BADHAN</title>

  <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
  <div id="main">
<div style="text-align: right;"><a href="Log in.html"style="text-decoration:none"><b><big>Log in &nbsp &nbsp</big></b></a>
<a href="Registration.html"style="text-decoration:none"><b><big>Registration &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</big></b></a></div>    
	<div id="site_content">
      <div id="site_heading">
	    <h1>BADHAN</h1>	
	    <h2>A Voluntary Blood Donors' Organization</h2>
	  </div><!--close site_heading-->
	  <div id="header">
	    <div id="menubar">
          <ul id="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="Central.html">Central</a></li>
            <li><a href="Zones.html">Zones</a></li>
            <li><a href="individual_units.html">Individual units</a></li>
            <li><a href="MAP.html">Map</a></li>
			
			 <li><a href="contact.html">Contact Us</a></li>
            <li><a href="Video.html">Video </a></li>
            <li><a href="Request and donate blood.html">Request and donate blood</a></li>
          </ul>
        </div><!--close menubar-->
      </div><!--close header-->	  

	  <div id="content">
        <h2></h2>
	<div style="text-align: center;">
	<div style="box-sizing: border-box; display: inline-block; width: auto; max-width: 480px; background-color: #FFFFFF; border: 2px solid #0361A8; border-radius: 5px; box-shadow: 0px 0px 8px #0361A8; margin: 50px auto auto;">
	<div style="background: #0361A8; border-radius: 5px 5px 0px 0px; padding: 15px;"><span style="font-family: verdana,arial; color: #D4D4D4; font-size: 1.00em; font-weight:bold;">Enter your login and password</span></div>
	<div style="background: ; padding: 15px" id="ap_style">
	<style type="text/css" scoped>
	<!--#ap_style td { text-align:left; font-family: verdana,arial; color: #064073; font-size: 1.00em; }
	#ap_style input { border: 1px solid #CCCCCC; border-radius: 5px; color: #666666; display: inline-block; font-size: 1.00em;  padding: 5px; width: 100%; }
	#ap_style input[type="button"], #ap_style input[type="reset"], #ap_style input[type="submit"] { height: auto; width: auto; cursor: pointer; box-shadow: 0px 0px 5px #0361A8; float: right; text-align:right; margin-top: 10px; margin-left:7px;}
	#ap_style table.center { margin-left:auto; margin-right:auto; }
	#ap_style .error { font-family: verdana,arial; color: #D41313; font-size: 1.00em; }-->
	</style>
<form method="post" action="" name="aform" target="_top">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<table class='center'>
<tr><td>Username:</td><td><input type="text" name="login"></td></tr>
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


		
	  
      </div><!--close content-->	
		
      <div class="sidebar_container">  		  
		<div class="sidebar">
          <div class="sidebar_item">
       <h2>Latest News</h2>
			<h4>AUGUST 2015</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
           </div><!--close sidebar_item--> 
         </div><!--close sidebar-->     		
	    <div class="sidebar">
          <div class="sidebar_item">
            <h2>Activity</h2>
		  	<h4>AUGUST 2015</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus tempor enim.</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
			
            <p>Phone:+8801934864284
			   Email:badhanpstu@gmail.com</p>
		      <a href="#">Read more</a>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  
      </div><!--close sidebar_container-->  		
		
      </div><!--close site_content-->	
    <div id="footer">  
      <center>
<pre> <b><big>Copyright© BADHAN PSTU, All right Reserved. </big></b></pre></center>
    </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>
