<html>
<head>
	<title> MUSICALL </title>	
	
	<link href="CSS\style.css" rel="stylesheet"/>
	
	<audio controls autoplay style="display:none">
		<source src="sounds\BG.mp3">
		</audio>
</head>


<body style="background-image:url(BP1.jpg);background-repeat: no repeat;">

	<center>
		<center>
				
		
		
		<h1 style="color:purple; font-size:100; font-family: 'Times New Roman'; text-shadow: 4px 4px black;font-weight: bold;
		margin:0;
		text-align: center;"> MusicAll </h1>
		<table width=30% bgcolor="black" style="border:1px solid; border-radius:8px;">
			<tr>
			
			<th> <a href='login.php'>Home</a></th>
			<th> <a href='about.php'>About Us</a></th>
			<th> <a href='contact.php'>Contact Us</a></th>
			
			</tr>
		</table>
		<br/><br/>
		
		<div class="divbox">
		<form method="POST" action="">
			 <div style="font-size:27px;font-weight:bold;color:yellow" >Log In</div>
			 <hr>
			<input type="text" name="uname" placeholder="Username" />
			<br/>
			<br/>
			<input type="password" name="pswd" placeholder="Password"/>
			<br/><br/>
			<input type="submit" name="subm" value="Log In" />
			<hr>
			<div style="font-size:15px;font-weight:bold;color:white" ><a href="signup.php">Create an account</a></div>
			 
		</center>

		<?php
			
			$host='localhost';
			$user='root';
			$pass='';
			$dbname="mydb";
			$conn=mysqli_connect($host,$user,$pass,$dbname);
			if(isset($_POST['uname'],$_POST['pswd']))
			{
			$un=$_POST['uname'];
			$pw=$_POST['pswd'];
			
			$sql="SELECT name FROM info WHERE name='$un' AND id='$pw'";
			
			$show=mysqli_query($conn,$sql);
			
			
			if(mysqli_num_rows($show)>0)
				{echo "WELCOME $un";
			/*
			echo "<form method='post' action='home1.php' id='senddata'>
			<input type='hidden' name='postdata' value='$un'>  
			</form>" ; 
			*/
			session_start();
			
			$_SESSION['user_data']=$_POST['uname'];
			
			
				header("location: HOME1.php");}
			else
				{echo "<script> alert('Wrong Username Or Password')</script>";}
				
			//else
				//{echo "ERROR".mysqli_error($conn);}
			
			mysqli_close($conn);
			}

			else {echo "";}
		?>
		
		</div>
		
		<br/>
		
	<footer style="color:yellow; font-size:15 align=bottom";> MusicAll © 2018 - All Rights Reserved </footer>

	<small style="color:white; align=right;">Support - admin@musicall.com<br/>
			Created & Designed By Mukul Wadhwa<br/>
			</small>
	</center>

</body>
</html>
