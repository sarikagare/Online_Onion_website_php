	<?php
	include_once 'db.php';
if(isset($_POST['submit']))
{    
    $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $Retype = $_POST['Retype'];
     $Address = $_POST['Address'];
     $ContactNo = $_POST['ContactNo'];
     $Gender = $_POST['Gender'];


		$sql = "INSERT INTO register (Name,Email,Password,Retype,Address,ContactNo,Gender) VALUES ('$Name','$Email','$Password','$Retype','$Address','$ContactNo','$Gender')";

        if (!mysqli_query($conn, $sql)) {
        echo mysqli_error($conn);
     }  
      elseif ($sql > 0)
      {

       echo "<script> window.location.assign('Succes.php'); </script>";
     }
     else
     {
      echo "Failed..Fill Out Again..";
     }

	
		}
	?>



<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="rstyle.css" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png"/>
  </head>
  <body>
    <form method="post" action="register.php">
      <br>
    <font size=10 color="grey" face="arial">Registration Form</font>
    <a href="index.html"><img src="images/home.png" style="float: right; margin-top:30px;"/></a>
    <p>Enter Your information</p>
    <table>

	<tr>
            <td>Name:</td>
            <td><input type="text" name="Name" required="True" /></td>
	</tr>
        <tr>
	<td>e-mail address:</td>
	<td><input type="text" name="Email"></input></td>
	</tr>
         <tr>
        <td>Password:</td>
        <td><input type="password" name="Password" required="True" /> </td>
        </tr>
        <tr>
            <td>Re-type Password:</td>
            <td><input type="password" name="Retype" required="True"  /></td>
        </tr>
        <hr/>
    </table>
    <br>
    <p>Enter personal information</p>
    <table>
	<td>Address:</td>
	<td><input type="text" name="Address" /></td>
	<tr>
	<td>contact no.:</td>
	<td><input type="text"  name="ContactNo"></input></td>
	</tr>
	
	<tr>
	<td>Gender:</td>
	<td><input type="Gender" name="Gender" />
	</td>
        </tr>
        <hr/>
    </table>
    <br>
    <table>
        <tr>
            <td><input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: white" type="submit" name="submit" value="Submit"></td>
        </tr>
        
    </form>
    </table>
  </body>
</html>
