<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thai Hutt Reservations</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="scripts" -->
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="javascript/val.js"></script>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>

<body>
<div id="container">
  <div id="header">
      <img src="images/logo.png" alt="Logo" width="317" height="120" />
      <img src="images/reservations.png" name="reservations" width="305" height="82" id="reservations" />
    <div id="divider"></div>
      <div id="navigation">
        <table id="nav">
                <tr>
                    <td>
                    <a href="index.html">Main Page                </a></td>
                <td>
                    <a href="insertreservation.html">Enter Reservation                    </a></td>
                  <td>
                  <a href="delete.php">Delete reservation                  </a></td>
<td>
                    <a href="update.html">Updating Information                    </a></td>
                    <td><a href="sum.html"> Head Count                   </a></td>
          </tr>
        </table>
      </div>
     
      
  </div>
  <div id="divider2"></div>
<br clear="all" />
  <div id="contents">
  	<div style="float:left; width:25%;">
    <div id="leftcontent">
  	  <h1>View Reservations</h1>
  	  <ul>
  	    <li><a href="selectall.php">List All Reservations</a></li>
      </ul>
      <ul>
        <li><a href="date.html">List All Reservations BY <strong>DATE</strong></a><br />
          <br />
        </li>
        <li><a href="name.html">List Reservation BY <strong>NAME</strong></a></li>
      </ul>
      <ul>
        <li><a href="nameandnum.html">List Reservation BY <strong>NAME AND PHONE NUMBER</strong></a></li>
      </ul>
      <ul>
        <li><a href="tableandname.html">List Reservation By <strong>NAME AND TABLE</strong></a></li>
      </ul>
    </div>
    
<div id="leftleft">
    <h1>Update ShortCuts    </h1>
    <ul>
      <li><a href="updatetablenum.html">Update Table Number</a><a href="updatetime.html"></a></li>
    </ul>
    <ul>
      <li><a href="updatetime.html">Update Time</a></li>
    </ul>
    <ul>
      <li><a href="updatetime.html"></a><a href="updatedate.html">Update Date</a></li>
    </ul>
    <ul>
      <li><a href="updatepax.html">Update PAX</a></li>
    </ul>
    <ul>
      <li><a href="updateall.html">Update Everything</a></li>
    </ul>
  </div>  
    </div>
    <div id="rightcontent">
      <h2><!-- InstanceBeginEditable name="header" -->Please fill in the form below to enter a reservation<!-- InstanceEndEditable --></h2>
      <!-- InstanceBeginEditable name="content" -->
      <div id="content">
        <form>
<?php

//retrieve the emp number
$entername=$_GET['entername'];
$enterphone=$_GET['enterphone'];
$entertime=$_GET['entertime'];
$enterpax=$_GET['enterpax'];
$enterdate=$_GET['enterdate'];
$entertablenum=$_GET['entertablenum'];


//connect to the server .. $ connect will contain the connection object

$connect = mysql_connect("localhost:3306","root","");

//connect to the database

$db=mysql_select_db("details",$connect);

//set up sql statement in a variable 

$query ="insert into reservation values('','$entername',$enterphone,'$entertime',$enterpax,'$enterdate','$entertablenum')";

//perform sql query
$result = mysql_query($query);
print "<h1> The Details below has Been Added To The Data Base</h1>";
print "<table border=1 width=\"100%\">";
print "<tr bgcolor=\"red\"><td>Name</td>
		<td>Phone Number</td>
		<td>Time</td>
		<td>Pax</td>
		<td>Date<br />
(yyyy-mm-dd)</td>
		<td>Table Number</td>
		
		</tr><tr>
				 <td>$entername</td>
				 <td>$enterphone</td>
			 <td>$entertime</td>
				 <td>$enterpax</td>
			 <td>$enterdate</td>
				 <td>$entertablenum</td>
			
				
				</tr>";
				
				print "</table>";
				?>
		
	</form> 
       <table><br />
<br />

         <form action="insertreservation.php" method="get" onsubmit="return ValidateForm(this);">
                      <tr>
                      <td>Enter Name:</td> 
                      <td><input type="text" size="20" name="entername"/> </td>
                     	 </tr>
                     <tr>
                      <td>Enter PhoneNumber:</td> 
                      <td><input type="text" size="20" name="enterphone"/> </td>
                      </tr>
                       <tr>
                      <td>Enter Time(00:00):</td> 
                      <td><input type="text" size="20" name="entertime"/> </td>
                      </tr>
                       <tr>
                      <td>Enter Pax:</td> 
                      <td><input type="text" size="20" name="enterpax"/> </td>
                      </tr>
                        <tr>
                      <td>Enter Date(yyyy-mm-dd):</td> 
                      <td><input type="text" size="20" name="enterdate"/> </td>
                      </tr>
                       
                       <tr>
                      <td>Enter Table Number:</td> 
                      <td><input type="text" size="20" name="entertablenum"/> </td>
                      </tr>
                      
                      <tr>
                       <td><input type="submit" value="Enter"/>
                        <input type="reset" value="Clear"/></td>
                        </tr>
                    </form>                   
                    </table> 
      
      
      
      </div>
      <!-- InstanceEndEditable --></div>
  
  
   
    <br clear="all" />  
  <br clear="all" />  
  </div>
  <br clear="all" />  

 
 
<div id="footer">
      <div id="divider"></div>
      <div id="footer1"></div>
   


  
  </div>
  <div id="divider2"></div>
</div>
</body>
<!-- InstanceEnd --></html>