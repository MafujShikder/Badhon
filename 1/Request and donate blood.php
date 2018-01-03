
<html >

<head>
  <title>BADHAN PSTU</title>
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

	

		<div class="row">
			<div class="col-lg-8 col-xs-12 col-lg-offset-2">
				 <div class="logo-wrap">
				 	

				 </div>
              <center>
			      <a href="New Request.php"><h2><em>New Request</em></h2></a>
                <?
				$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
                 $db = mysql_select_db("blood_bank", $connection); // Selecting Database from Server
				 $sql = 'SELECT * FROM request';
				$retval = mysql_query( $sql, $connection);
   
                if(! $retval )
               {
                  die('Could not get data: ' . mysql_error());
                }
				 $r=mysql_num_rows($retval);
				 
				 if($r!="")
				 {
				 
				 ?>
				 <table width="60%" border="1px">
				 <tr>
				 <td>name </td>
				 <td>Age</td>
				 <td>Sex</td>
				 <td>Relation</td>
				 <td>Blood Types</td>
				 <td>Units</td>
				 <td>Reason</td>
				 <td>Area</td>
				 <td>City</td>
				 <td>Hospital</td>
				 <td>Date</td>
				 <td>Country Code</td>
				 <td>Phone</td>
				 </tr>
				 <?
				               while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
                                {
								?>
				  <tr>
				 <td><? echo "$row[name]";?></td>
				 <td><? echo "$row[age]";?></td>
				 <td><? echo "$row[sex]";?></td>
				 <td><? echo "$row[relation]";?></td>
				 <td><? echo "$row[blood_types]";?></td>
				 <td><? echo "$row[units]";?></td>
				 <td><? echo "$row[reason]";?></td>
				 <td><? echo "$row[area]";?></td>
				 <td><? echo "$row[city]";?></td>
				 <td><? echo "$row[hospital]";?></td>
				 <td><? echo "$row[date]";?></td>
				 <td><? echo "$row[country_code]";?></td>
				 <td><? echo "$row[phone]";?></td>
				 </tr>
								
 
				                <?

                                }
				 
				 
				 
				 ?>
				 
				 </table>
				 <?
				 
				 }
				 else
				 {
				 echo "No Request";
				 
				 }

   

				
				?>
                </center>



        		 <div style = "text-align:right" >       
                <ul id="menu">
				<a href="Whydonate.html">Whydonate</a>
                  <li><a href="http://in.blood.is/about">About</a></li>
            
                </ul>
				 <div>
				 <div class="user">



				 </div>
			</div>
		</div>
	
<!--
<p class="notice"></p>
<p class="alert"></p>
-->



<div class="container">
    <div class="row">

        <div class="col-lg-2 col-lg-offset-2 col-md-3 col-sm-3">
            <div class="row">
                <div class="col-lg-12 col-md-12 filter-group">
                    <h3><label for="bloodtype"><span style="color:black;font-weight:bold">blood group</span></label></h3>

<div class="hide_no_script" style="">
                    <select id="bloodtype" name="bloodtype" onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);"><option selected="selected" value="/requests?bloodtype=all&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">All</option>
<option value="/requests?bloodtype=A%2B&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">A+</option>
<option value="/requests?bloodtype=A-&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">A-</option>
<option value="/requests?bloodtype=B%2B&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">B+</option>
<option value="/requests?bloodtype=B-&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">B-</option>
<option value="/requests?bloodtype=O%2B&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">O+</option>
<option value="/requests?bloodtype=O-&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">O-</option>
<option value="/requests?bloodtype=AB%2B&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">AB+</option>
<option value="/requests?bloodtype=AB-&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">AB-</option></select>

</div>
    
  
                  
                
                <div class="col-lg-12 col-md-12 filter-group">
                    <h3><span style="color:black;font-weight:bold">Distance from you</span> </h3>
                  <ul ><h4> <a href="http://in.blood.is/requests?bloodtype=all&amp;distance=15&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">within 15 kms</a><br/>
                    <a href="http://in.blood.is/requests?bloodtype=all&amp;distance=30&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">within 30 kms</a><br/>
                    <a href="http://in.blood.is/requests?bloodtype=all&amp;distance=45&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">within 45 kms</a><br/>
                    <a href="http://in.blood.is/requests?bloodtype=all&amp;distance=entire_city&amp;location=Bangalore&amp;lat=12.972733&amp;lng=77.593517">entire city</a><br/></h4>
					</ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-9 col-sm-9">
            <ul class="requests">
     


            </ul>


     <p style="text-align:center;"> There are no requests in this area. Tell us your blood type and get notified</p>
         <br>
              <form accept-charset="UTF-8" action="http://in.blood.is/responders/new_based_on_blood_type" class="new_responder" id="new_responder" method="post"><div style="display:none"><input name="utf8" value="✓" type="hidden"><input name="authenticity_token" value="eVf7oGM7l/QSW6q3kKO/dcgcbJ9YP/US+fi2k6J78uU=" type="hidden"></div>
              <div class="form-group">
     <p style="text-align:center;">           <label for="responder_Blood type">Blood type</label>
                <select class="form-control" id="responder_bloodtype" name="responder[bloodtype]"><option selected="selected" value="">Blood type...</option>
<option value="Not Sure">Not Sure</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option></select></p>
              </div>
              <p style="text-align:center;">     <input class="btn btn-success" id="new-responder-btn" name="commit" value="Continue" type="submit">
</form></p>




        </div>

    </div>
</div>



    <div id="footer">  
      <center>
<pre> <b><big>Copyright© BADHAN PSTU, All right Reserved.</big></b></pre></center>
    </div><!--close footer-->		
  </div><!--close main-->	
</body>
</html>