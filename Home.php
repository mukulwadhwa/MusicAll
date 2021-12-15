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
			<th><a href='upload1.php'>Upload</a></th>
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
		<div style="font-size:20px;">
		<?php
		session_start();
		if(isset($_SESSION['user_data']))
		{
			echo "Welcome <br/><img src='images/user.png' width=100px height=100px /><br/>". $_SESSION['user_data'];
		}
		else
		{
			echo "Welcome <br/><img src='images/user.png' width=100px height=100px /><br/>"."GUEST";
		}
		?>
		   
		<a href="login.php" style="color:black; text-decoration:none;"><div style="background-color:red;width:120px;height:30px;border:2px solid;border-radius:8px;">
		Log Out			
		</a>
		</div>
		</div>
<h2 style="color:white; text-align:left;"> Trending Now </h2>
	<hr>	
<div class="menu-wrapper">
	<ul class="menu">
		<li class="item">
		<div class="row" class="jumbotron text-center">
		<!-- NEW UPLOAD -->
		<div class="column">
			<div class="coupon">
				<img class="img-icon" src="
				<?php  
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
						//echo "Uploaded image '$name' as '$n':<br />";
						echo "$n";
						}
					else echo "";
				}
				else 
				{
				echo "images/d1.jpg";
				}
				?>" onclick="openModal();currentSlide(1)" class="hover-shadow">
					<div class="container">
					<p>
					<?php  
					if(isset($_POST['title']))
					{
						echo $_POST['title'];
					}
					else
					{
						echo "Sam Feldt  - Show Me Love";
					}
					?>
					</p>
					</div>
		    </div> 
		</div>
		</li>
		<li class="item">
		<div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\003.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
					<div class="container">
					<p>Icona Pop <span class="promo">I Love It</span></p>
					</div>
		    </div> 
		</div>
		</li>
		<li class="item">
		<div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\004.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
					<div class="container">
					<p>One Direction <span class="promo">Perfect</span></p>
					</div>
		    </div> 
		</div></li>
		<li class="item"><div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\005.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
					<div class="container">
					<p>Justin Bieber <span class="promo">Comapany</span></p>
					</div>
		    </div> 
		</div></li>
		<li class="item"><div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\006.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
					<div class="container">
					<p>Raleigh<span class="promo">Blue Black</span></p>
					</div>
		    </div> 
		</div></li>
		<li class="item"><div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\007.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
					<div class="container">
					<p>Taylor Swift <span class="promo">Blank Space</span></p>
					</div>
		    </div> 
		</div></li>
		<li class="item"><div class="column">
			<div class="coupon">
				<img class="img-icon" src="images\008.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
					<div class="container">
					<p>5 S O S<span class="promo">Don't Stop</span></p>
					</div>
		    </div> 
		</div></li>
	</div>
	</ul>
    
</div>


<font color="black"/><!-- Images used to open the lightbox -->
<!-- The Modal/Lightbox -->
	<div id="myModal" class="modal">
	  <span class="close cursor" onclick="closeModal()">&times;</span>
	  <div class="modal-content">
	  <!--My Upload-->
	<div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img class="simg" src="
	  <?php  
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
						//echo "Uploaded image '$name' as '$n':<br />";
						echo "$n";
						}
					else echo "'$name' is not an accepted image file";
				}
				else 
				{
				echo "images/d1.jpg";
				}
				?>" style="width:40%">
	  <h4>Play Now</h4>
		<audio controls>
		   <source src="<?php
		   
		   if ($_FILES)
				{
					$name2 = $_FILES['fileupload']['name'];
					$ext = $_FILES['fileupload']['type'];
					if($ext == "audio/mpeg")
					{
						move_uploaded_file($_FILES["fileupload"]["tmp_name"],"upload/".$name2);
						
						$path="upload/".$name2;
						echo "$path";
					}
					else
					{
						echo "<script>alert('Wrong Format')</script>";
					}
					
				}
				else 
				{
					echo "sounds/Sam Feldt  - Show Me Love (Feat.Kimberly Anne).mp3";
				}
				
				?>">
		</audio>
	</div>
	<div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img class="simg" src="images/003.jpg" style="width:40%">
	  <h4>Play Now</h4>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img class="simg" class="simg" src="images\004.jpg" style="width:50%">
	  <h3>Media Player</h3>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img class="simg" src="images\005.jpg" style="width:50%">
	  <h3>Media Player</h3>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img class="simg" src="images\006.jpg" style="width:50%">
	  <h3>Media Player</h3>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
	<div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img class="simg" src="images\007.jpg" style="width:50%">
	  <h3>Media Player</h3>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
	<div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img class="simg" src="images\008.jpg" style="width:50%">
	  <h3>Media Player</h3>
		<audio controls>
		   <source src="sounds\Icona Pop - I Love It.mp3">
		</audio>
    </div>
    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <!-- Thumbnail image controls -->
	<div class="column">
      <img class="demo" src="<?php  
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
						//echo "Uploaded image '$name' as '$n':<br />";
						echo "$n";
						}
					else echo "'$name' is not an accepted image file";
				}
				else 
				{
				echo "images/d1.jpg";
				}
				?>" onclick="currentSlide(1)" alt="Nature">
    </div>
    <div class="column">
      <img class="demo" src="images\003.jpg" onclick="currentSlide(2)" alt="Nature">
    </div>
    <div class="column">
      <img class="demo" src="images\004.jpg" onclick="currentSlide(3)" alt="Trolltunga">
    </div>
    <div class="column">
      <img class="demo" src="images\005.jpg" onclick="currentSlide(4)" alt="Mountains">
    </div>
    <div class="column">
      <img class="demo" src="images\006.jpg" onclick="currentSlide(5)" alt="Lights">
    </div>
	<div class="column">
      <img class="demo" src="images\007.jpg" onclick="currentSlide(6)" alt="Lights">
    </div>
	<div class="column">
      <img class="demo" src="images\008.jpg" onclick="currentSlide(7)" alt="Lights">
    </div>
  </div>
</div>  
<br/><br/>
		<div id="flip">POPULAR NOW</div>
		<div id="panel">Most Downloaded
			
		<div class="coupon">
			  <div class="container">
				<h3>BIG HIT</h3>
			  </div>
			  <img src="images\005.jpg" alt="Avatar" style="width:100%;">
			  <div class="container" style="background-color:white">
				<h2><b>Justin Bieber</b></h2>
				<p>Company</p>
			  </div>
		  <div class="container">
			<p>Genre <span class="promo">Pop</span></p>
			<p class="expire">Released : Jan 03, 2017</p>
		  </div>
		</div> 
		<br/>
		Play Now
		<br/>
		<audio controls>
			<source src="sounds\Justin Bieber  - Company.mp3">
		</audio>
		</div>
		
		<!--POPULAR VIDEO <br/>
		<video controls>
		  <source src="001.mp4" type="video/mp4">
		 </video> </div>
		 -->
 
		<footer style="color:yellow; font-size:15";> MusicAll © - All Rights Reserved 
		<br/>
			Created & Designed By Mukul Wadhwa <br/>
		</footer>
		</center>
</body>
</html>