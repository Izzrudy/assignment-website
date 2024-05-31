<html>
	<head>
		<meta charset = "UTF-8">
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="shortcut icon" type="x-icon" href="image/Izz rudy.png" >
	</head>
<style>
<!--same content as css but need to put here because sometimes my computer its not read content in css-->
*{
		margin: 0;
		padding: 0;
		font-family: cursive;
		box-sizing: border-box;
		
		
}

.logo{
	width:120px;
	cursor: pointer;
}

.banner{
	width: 100%;
	height: 100%;
	background-attachment: inherit;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat:no-repeat;
	
	
}

.navbar{
		width: 100%;
		margin: auto;
		padding: 5px 0;
		display: flex;
		align-items: center;
		justify-content: space-between;
		overflow: hidden;
		background-color: #DCDCDC;
		position: fixed;
		top: 0; 
		
	}
	.navbar img{
		margin-left:100%;
	}

.navbar ul li{
	
	list-style: none;
	display: inline-block;
	margin:5px 20px;
	position: relative;
	
	
	
}

.navbar ul li a{
	text-decoration: none;
	color: #DA70D6;
	text-transform: uppercase;	
	
}

.navbar ul li::after{
	
	content: '';
	height: 3px;
	width: 0%;
	background: #d63384;
	position: absolute;
	left: 0;
	bottom: -10px;
	transition: 0.5s;
	
}

.navbar ul li:hover::after{
	width: 100%;
	
}

.content{
	width: 100%;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	text-align: center;
	color: #F7E7FB;
	margin:auto;
	

	
}
.content p{
	margin: 20px auto;
	font-weight: 100;
	line-height: 25px;
	text-align: left;
	margin-left: 30%;
}
.content h1{
	font-size: 70px;
	margin-top: 80px;
	font-family: stencil; 
	margin-left: 10%;
}

.present{
	width:30%;
	height: 30%;
	margin-top:-40% ;
	margin-right: 90%;
}

.icon{
	display: flex;
	margin-left: 5px;
	margin-top:5%;
	
}
.fb{
	margin-top: 20px;
	width: 20px; 
	height: 20px;
	margin-left: 12px;
	margin-right: 18px;
}
.tt{
	margin-top: 10px;
	width: 40px;
	height: 40px;
}
.ws{
	width: 60px; 
	height: 60px;
}
.ig{
	width: 60px; 
	height: 60px;
	margin-left:5px;
}

</style>
	
	<body>

   		<div class="banner">
			<div class="navbar">
			
				<a href="Home.php" >
					<img src="image/Izz rudy.png" class="logo" width="104" height="104">
				</a><!--Logo Style-->
				
				<ul>
					<li><a href="Profile.php"	>PROFILE	</a></li>
					<li><a href="Education.php"	>EDUCATION	</a></li>
					<li><a href="Passion.php"	>PASSION	</a></li>
					<li><a href="Gallery.php"	>GALLERY	</a></li>
					<li><a href="Comment.php"	>COMMENT	</a></li>
					
				</ul>
			</div>
			
			<div class="content">
			
				<h1>NURUL IZZATI</h1>
				
				<p> Welcome to my digital playground! You can call me IZZ, a full time student<br>
				Bachelor of Science Computer(Hons.) Multimedia Computing <br>
				from Mathematic and Information Sciences Faculty in UiTM Shah Alam. <br>
				Explore my website to learn more about my professional journey, passions, and life.
				<div class="icon">
					<a href="https://www.instagram.com/izz_rudy/">
						<img src="image/2.png" alt="INSTAGRAM" 	class="ig"></a>
					<a href="https://wa.me/qr/EJCFCFT6UTHJH1">
						<img src="image/4.png" alt="WHATSAPPS" 	class="ws"></a>
					<a href="https://www.facebook.com/izzati.rudi">
						<img src="image/1.png" alt="FACEBOOK"  	class="fb"></a>
					<a href="https://www.tiktok.com/@_naura02?_t=8mPAix4qBqE&_r=1">
					<img src="image/3.png" alt="TIKTOK"  	class="tt"></a>
				</div>

				<img src="image/Myface.png" class="present">
			</div>
		</div>

	</body>
</html>