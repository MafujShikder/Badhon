<?
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("blood_bank", $connection); // Selecting Database from Server
if(isset($_POST['name'])){ // Fetching variables of the form which travels in URL
$name =$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$relation=$_POST['relation'];
$blood_types=$_POST[''];
$units=$_POST[''];

if($name!="" && $age!=""&& $sex!=""  )
{
$query = "insert into request(name,age,sex,relation,blood_types,units,reason,area,city,hospital,date,country_code,phone) values ('$_POST[name]','$_POST[age]','$_POST[sex]','$_POST[relation]','$_POST[bloodtype]','$_POST[units]','$_POST[reason]','$_POST[area]','$_POST[city]','$_POST[hospital]','$_POST[timeframe]','$_POST[country]','$_POST[phone]')";
 $retval = mysql_query( $query, $connection );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
   
   $a="Entered data successfully\n";
   }
   mysql_close($conn);

}
else {
$a="Entered data unsuccessfully\n";

}
}
?>
<html >

<head>
  <title>BADHAN PSTU</title>
  

	

	<link href="css/regitation.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

  <div id="main">
<div style="text-align: right;"><a href="Log in.php"style="text-decoration:none"><b><big>Log in &nbsp &nbsp</big></b></a>
<a href="Registration.php"style="text-decoration:none"><b><big>Registration &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</big></b></a></div>  
	<div id="site_content">
      <div id="site_heading">
	    <h1>BADHAN PSTU</h1>	
	    <h2>A Voluntary Blood Donor Organization</h2>
		
		

	  </div><!--close site_heading-->
	  <div id="header">
	    <div id="menubar">
          <ul id="menu">
  <li><a href="index.php">Home</a></li>
            <li><a href="Central.php">Central</a></li>
          
            <li><a href="individual_units.php">All unit blood donor list</a></li>
            	<li><a href="Request and donate blood.php">Request and donate blood</a></li>
				            <li><a href="Video.php">Video </a></li>
			<li><a href="MAP.php">Map</a></li>
	
			 <li><a href="contact.php">Contact Us</a></li>


          </ul>
        </div><!--close menubar-->
      </div><!--close header-->	  

<h1>New Request:</h1>	




<div style = "text-align: center;">


<div class="maindiv">

<div class="form_div ">
<div>
<p style="text-align:left;"><h2 >     <span style="color:#D88535;font-weight:bold">Details:</span> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>
<p align = left >
<?
if(isset($_POST['name'])){
echo $a;
}
?>
<form method="post" action="">
     <span style="color:black;font-weight:bold">Patient name</span>
	</p>
	<br>
    <input class="input" id="request_name" name="name" type="text">
	</br>
</div>

<div class="row">
    <div class="col-lg-4">
        <div >
            <label for="request_Age">Age</label>
			<br>
            <input class="input" id="request_age" name="age" type="text">
			</br>
        </div>
    </div>
    <div class="col-lg-4">
        <div >
            <label for="request_Sex">Sex</label>
			<br>
            <select class="input" id="request_sex" name="sex"><option selected="selected" value="">Choose...</option>
            <br>
			<option value="Male">male</option>
<option value="Female">female</option></select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="request_Relation">Relation</label>
			<br>
            <select class="input" id="request_relation" name="relation"><option selected="selected" value="">Choose...</option>
			</br>
			
<option value="Myself">Myself</option>
<option value="Mother">Mother</option>
<option value="Father">Father</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Uncle">Uncle</option>
<option value="Aunt">Aunt</option>
<option value="Niece">Niece</option>
<option value="Nephew">Nephew</option>
<option value="Grand Father">Grand Father</option>
<option value="Grand Mother">Grand Mother</option>
<option value="Grand Son">Grand Son</option>
<option value="Grand Daughter">Grand Daughter</option>
<option value="Friend">Friend</option>
<option value="Husband">Husband</option>
<option value="Wife">Wife</option></select>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="request_Blood type">Blood type</label>
	<br>
    <select class="input" id="request_bloodtype" name="bloodtype"><option selected="selected" value="">Choose a blood type</option>
	</br>
<option value="Any">Any</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option></select>
</div>

<div class="form-group">
    <label for="request_Units">Units</label>
	<br>
    <select class="input" id="request_units" name="units"><option selected="selected" value="">Choose number of units</option>
	</br>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option></select>
</div>

<div>
    <label >Reason</label>
	<br>
    <select class="input" id="request_reason" name="reason"><option selected="selected" value="">Choose a reason</option>
	</br>
<option value="surgery">surgery</option>
<option value="accident">accident</option>
<option value="pregnancy">pregnancy</option></select>
</div>

<h2 ><span style="color:Megenda;font-weight:bold">location:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>

<div class="form-group">
    <label for="request_Area">Area</label>
	<br>
    <input class="input" id="request_area" name="area" value="Bangalore" type="text">
	</br>
</div>

<div class="form-group">
    <label for="request_City">City</label>
	<br>
    <input class="input" id="request_city" name="city" value="Bangalore" type="text">
	</br>
</div>

<div class="form-group">
    <label for="request_Hospital">Hospital</label>
	<br>
    <input autocomplete="off" class="input" id="request_hospital" name="hospital" placeholder="Enter hospital name" type="text">
	</br>
</div>

<div class="details">
    <input class="input" data_geo="lat" id="request_lat" name="request[lat]" value="" type="hidden">
    <input class="input" data_geo="lng" id="request_lng" name="request[lng]" value="" type="hidden">
</div>

<div class="form-group">
    <label for="request_timeframe">By when do you need it?</label>
	<br>
    <input class="input" id="request_timeframe" name="timeframe" placeholder="dd-mm-yyyy" type="text">
	</br>
</div>

<!-- <div class="checkbox">
<label>
<input name="request[recurring]" type="hidden" value="0" /><input id="recurring" name="request[recurring]" type="checkbox" value="1" /> This is a recurring requirement
</label>
</div>
<div style="display:none"  id="frequency" class="form-group">
<label for="request_frequency">Frequency</label>
<input class="form-control" id="request_frequency" name="request[frequency]" type="text" />
</div> -->

<h2 class="form-subtitle"><span style="color:Megenda;font-weight:bold">contact:</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>



<div class="row">
     <div class="col-lg-6">
        <div class="form-group">
             <label for="request_Country code">Country code</label>
			 <br/>
             <select class="input" id="request_country" name="country"><option value="AF">Afghanistan</option>
			 </br>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorre</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>

<option value="ZW">Zimbabwe</option>
<option value="AX">Åland Islands</option></select>
         </div>
     </div>
     <div class="col-lg-6">
        <div class="form-group">
             <label for="request_Phone">Phone</label> 
				
			 <br>
            <input class="input" id="request_phone" name="phone" type="text">
			</br>
        </div>
     </div>
</div>

<div class="form-group hidden_div" style="display:none">
    <label for="request_Your_gender">Your gender</label>

    <select class="input" id="request_requester_sex" name="request[requester_sex]"><option selected="selected" value=""> Choose Your gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option></select>
</div>

<div class="actions">
  <input class="submit" name="commit" value="Create Request" type="submit">
</div>


</form>

			<!-- <a href="/requests">Back</a> -->

        </div>
		</div>
    </div>
</div>
 </div>   
    <div id="footer">  
      <center>
<pre> <b><big>Copyright© BADHAN PSTU, All right Reserved. </big></b></pre></center>
    </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>