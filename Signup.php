<html>
<head>
	<title> MUSICALL </title>	
	
	<link href="CSS\style.css" rel="stylesheet"/>

</head>


<body style="background-image:url(BP1.jpg);background-repeat: no repeat;">


	<center>
		<center>
		
		
		
		<h1 style="color:purple; font-size:80; font-family: ''; text-shadow: 4px 4px black;font-weight: bold;
		margin:0;
		text-align: center;"> MusicAll </h1>
		<br/><br/>
		
		<div style="font-size:25px;background-color:blue;width:300px;height:350px;border:6px solid;border-radius:20px;">
		<form method="POST" action="">
			<font color="yellow" ><b>Sign Up</b></font>
			<hr>
			 
			<input type="text" name="uname" placeholder="Username" />
			<br/><br/>
			<input type="password" name="pswd" placeholder="Password"/>
			<br/><br/>
			<input type="text" name="eid" placeholder="Your Email Id" />
			<br/><br/>
			<input type="submit" name="subm" value="Sign Up" />
			
		</div>
		</center>

		<?php
			
			$host='localhost';
			$user='root';
			$pass='';
			$dbname="mydb";
			$conn=mysqli_connect($host,$user,$pass,$dbname);
			
			if(isset($_POST['uname'],$_POST['pswd'],$_POST['eid']))
			{
			$un=$_POST['uname'];
			$pw=$_POST['pswd'];
			$email=$_POST['eid'];
			
			$sql2="SELECT name FROM info WHERE name='$un' AND id='$pw'";
			$show=mysqli_query($conn,$sql2);
			
			$result=mysqli_num_rows($show);
					
					if($result==0)
					{
						if(preg_match("/^[a-zA-Z_]+.@[a-zA-Z0-9]+.com$/",$email))
							{echo "Accepted";
							
							$sql="INSERT INTO info VALUES('$un',$pw)";
							
						
							if(mysqli_query($conn,$sql))
								{echo "";}		
							else
								{
									echo "<script> alert('database error') </script>";
								}
							
								header("location: registered.php");
							}
						else	
							{echo "<script> alert('alert -  Invalid Email') </script>";}
					}
					else
						
						{echo "<script> alert('alert -  username already existed') </script>";}
				
	
			/*
			
				
			//else
				//{echo "ERROR".mysqli_error($conn);}
			
			
			*/
			
			mysqli_close($conn);
			}

			else {echo "";}
			
			
		?>
		
		</div>
		
		<br/><br/><br/><br/><br/>
		
	<footer style="color:yellow; font-size:15 align=bottom";> MusicAll © 2018 - All Rights Reserved </footer>

	<small style="color:white; align=right;">Support - admin@musicall.com
	<br/>
			Created & Designed By Mukul Wadhwa <br/>
			</small>
	</center>

</body>
</html>
