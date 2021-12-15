<html>
<head>
	<title> MUSICALL </title>
	<link href="CSS\main.css" rel="stylesheet"/>
	<link href="CSS\Lbox.css" rel="stylesheet"/>
	<link href="CSS\NAVBAR.css" rel="stylesheet"/>
	<link href="CSS\ScrollMenu.css" rel="stylesheet"/>
	<link href="CSS\SlidePanel.css" rel="stylesheet"/>
	<!--<link href="bootstrap-4.0.0\dist\css\bootstrap.min.css" rel="stylesheet"/> 
	<link href="bootstrap-4.0.0\dist\css\bootstrap.css" rel="stylesheet"/> -->
	<script src="JS\mymodal.js"></script> 
	<script src="JS\NAVBAR.js"></script>
	<script src="JS\jquery.min.js"></script>     
	<!--MUST BE INCLUDED BEFORE USE-->
	<script src="JS\ScrollMenu.js"></script>	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="JS\SlidePanel.js"></script>
	<!--<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js">-->
	<script></script>
</head>
<body style="background-image:url(images/0013.jpg); background-repeat: no repeat;">
<img src="BP2.jpg" height="40%" width="100%" alt="COVER"><img>
<div id="navbar">
		<table bgcolor="black" >
			<tr>
			<th><a href='home1.php'>Home</a></th>
			<th><a href='upload.php'>Upload</a></th>
			<th> <a href='contact1.php'>Contact Us</a></th>
			<th> <a href='about1.php'>About Us</a></th>
			</tr>
		</table>
</div> 
		<center>
		<div class="hline">
		<marquee > <font color="white"> <h1> Latest Music -> Icona Pop - I Love It   </h1> </font> </marquee>
		<br>
		</div>
		
<div>
			<form method="POST" action='home1.php' enctype='multipart/form-data'>
			
				Title:
				
				<hr>
				<input type="text" name="title">
				<br/>
				<br/>
				
				Music File:<hr>
				<input type="file" name="fileupload" size='20' />
				<br/>
				<br/>
				
				
				Cover:<hr>
				
				Select a JPG, GIF, PNG or TIF File:
				<input type='file' name='filename' size='10' />
				
				<br/>
				<br/>
				Genere:<hr>
				
				<select name="genre">
					<option value="Pop">Pop</option>
					<option value="Rock">Rock</option>
					<option value="Hip Hop">Hip Hop</option>
					<option value="Electronic">Electronic</option>
					<option value="Dance">Dance</option>
				<select>
				
				   <!--<label for="fileupload"> Select a file to upload</label> -->     <!--WORKING-->
				   
				<br/>
				<br/>
				
				Description:<hr>
				<br/>
				
				<textarea style="width: 910px; height: 445px;" dir="ltr" name="desc"></textarea>    <!--dir for text direction-->
				<br/>
				
				<input type='submit' value='Upload' />
			
			</form>
			
			<br/>
			<br/>
			
			Your Upload : <br/><br/>
			<?php
			
			if(isset($_POST['title']))
			{
				echo "Title : ".$_POST['title']."<br/><br/>";
				echo "Genre : ".$_POST['genre']."<br/><br/>";
				echo "Description : ".$_POST['desc']."<br/><br/>";
				echo "Cover :  <br/>";
				if ($_FILES)
				{
					$name = $_FILES['filename']['name'];
					switch($_FILES['filename']['type'])
					{
					case 'image/jpeg': $ext = 'jpg'; break;
					case 'image/gif': $ext = 'gif'; break;
					case 'image/png': $ext = 'png'; break;
					case 'image/tiff': $ext = 'tif'; break;
					default: $ext = ''; break;
					}
					if ($ext)
						{
						$n = "image.$ext";
						move_uploaded_file($_FILES['filename']['tmp_name'], $n);
						echo "Uploaded image '$name' as '$n':<br />";
						echo "<img src='$n' width=300px height=300px />";
						}
					else echo "'$name' is not an accepted image file";
				}
				else 
					
				{
				echo "No File Selected!";
				}
				
				
				echo "<br/>Song :  <br/>";
				
				if ($_FILES)
				{
					$name2 = $_FILES['fileupload']['name'];
					$ext = $_FILES['fileupload']['type'];
					if($ext == "audio/mpeg")
					{
						move_uploaded_file($_FILES["fileupload"]["tmp_name"],"upload/".$name2);
						
						$path="upload/".$name2;
						echo "<audio controls><source src='$path'></audio>";
					}
					else
					{
						echo "<script>alert('Wrong Format')</script>";
					}
					
				}
				else 
				{
					echo "No Music File";
				}
			}
			
			else
			{
				echo "";
			}
				
				?>
				
				
		<br/>
		<br/>
		</div>
		
		<footer style="color:yellow; font-size:15";> MusicAll © - All Rights Reserved <br/>
			Created & Designed By Mukul Wadhwa<br/>
			</footer>
		</center>
</body>
</html>