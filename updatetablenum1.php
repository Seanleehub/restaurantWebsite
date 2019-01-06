<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thai Hutt Reservations</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="scripts" -->
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="javascript/valtablenum.js"></script>
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
      <h2><!-- InstanceBeginEditable name="header" -->List of reservations on
<?php
$date=$_GET['date'];
print "$date";

?>
      
	  <!-- InstanceEndEditable --></h2>
      <!-- InstanceBeginEditable name="content" -->
      <div id="content">   <form>
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

$query ="select * from reservation where date = '$date' ORDER BY time ASC";

//perform sql query
$result = mysql_query($query);

print "<table border=1 width=\"100%\">";
print "<tr bgcolor=\"red\"><td>User Id</td><td>Name</td>
		<td>Phone Number</td>
		<td>Time</td>
		<td>Pax</td>
		<td>Date<br />(yyyy-mm-dd)
</td>
		<td>Table Number</td>
		
		</tr>";
		
		
		//loop through all of the returned rows
		
		while($row = mysql_fetch_array($result)){
				print "<tr>";
				print "<td>$row[0]</td>";
				print "<td>$row[1]</td>";
				print "<td>$row[2]</td>";
				print "<td>$row[3]</td>";
				print "<td>$row[4]</td>";
				print "<td>$row[5]</td>";
				print "<td>$row[6]</td>";
			
				
				print "</tr>";
				}
				
				print "</table>";
?>
                </form>
               <h1> Enter the details below to Update a reservation</h1>
               <table>
          <form action="updatetablenum.php" method="get" onsubmit="return ValidateForm(this);">
                     <tr>
                <td><h1>Please Enter the details of the reservation you want to update</h1></td></tr>
                     
                         <tr>
                      <td>Enter User Id:*</td> 
                      <td><input type="text" size="20" name="idnumber"/> </td>
                     	 </tr>
                      <tr><td><h1>Enter Details Below to Update the information</h1></td></tr>
                          
                       <tr>
                      <td>Enter Table Number:</td> 
                      <td><input type="text" size="20" name="entertablenum"/> </td>
                      </tr>
                       
                      
                 
                      <td>&nbsp;</td>
                      
                       <td><input type="submit" value="Enter"/>
                        <input type="reset" value="Clear"/></td>
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
