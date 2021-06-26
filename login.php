	<?php
        include_once 'db.php';
        if (isset($_POST['login'])) {
		    $Name = $_POST['Name'];  
        $Password = $_POST['Password'];
		    $sql = "select * from register where Name = '$Name' and Password = '$Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful , Goto Home for shopping </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   }
	?>
	<html>
	<head>
    <title>User Login</title>
    <link rel="stylesheet" href="rstyle.css" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.png"/>
	</head>
	<body background="images\l.jpg">
	  <form method="post" action="login.php">
    <font size=5 color="black" face="arial"><b>**Enter Your Login Details**</b></font>  <br><br>
    <a href="cart.php"><img src="images/1.png" style="float: right; margin-top:30px;"/></a> <br><br>
    <a href="index.html"><img src="images/home.png" style="float: right; margin-top:30px;"/></a> <br><br>

    
	  <b> Username:</b><br>
      <input type="text" name="Name"/>
                       <br><br>
                       <b>Password:</b><br>
                       <input type="password" name="Password" />
                       <br><br>
                       <input style="padding: 10px 25px;font-weight:bold;background-color: black;border-radius: 5px;cursor: pointer;color: white" type="submit" name="login" value="Submit">
                       </form>                                   
	</body>
	</html>