<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thai Hutt Reservations</title>
<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="scripts" -->
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="javascript/valdate.js"></script>
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
      <h2><!-- InstanceBeginEditable name="header" -->Head Count on
<?php
$date=$_GET['date'];
print "$date";

?>
      
	  <!-- InstanceEndEditable --></h2>
      <!-- InstanceBeginEditable name="content" -->
      <div id="content">   <form>
<?php

//retrieve the emp number
$date=$_GET['date'];


//connect to the server .. $ connect will contain the connection object

$connect = mysql_connect("localhost:3306","root","");

//connect to the database

$db=mysql_select_db("details",$connect);

//set up sql statement in a variable 

$query ="select sum(pax) from reservation where date = '$date'";

//perform sql query
$result = mysql_query($query);
$row = mysql_fetch_array($result);

print "Number of people coming to Thai Hutt on $date is $row[0]";

		
		
	
?>
                </form>
                
                <form action="sum.php" method="get" onsubmit="return ValidateForm(this);">
                      <td width="22%"><br />
                    <input type="text" size="20" name="date"/> </td>
                  <td width="10%"> <input type="submit" value="Enter"/></td>
                        <td width="68%"><input type="reset" value="Clear"/></td>
                    </form>        
                
                
                
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
