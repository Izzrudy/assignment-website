<!DOCTYPEhtml>
<html>
<head>
	<title>EDUCATION</title>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" type="x-icon" href="image/Izz rudy.png" >
	<style>
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
		height:100vh;
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
	
	div.gallery {
  border: 1px solid #DA70D6;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding:50px;
  text-align: left;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
  margin-top:10%;
}

.gallery a{
	margin-top:50%;
	
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
	
	
</style>
</head>


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
	






<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/sk1ts.png">
      <img src="image/sk1ts.png" alt="sk"  width="400" height="200">
    </a>
    <div class="desc">
		<h4>SK 1 TAMAN SELAYANG</h4><br>
					<ol>
					<li>Sukan: SoftBall
        			<ul><li>Naib Bendahari(2013)</li></ul></li>
		
					<li>Puteri Islam: 
					<ul><li>Setiausaha(2014)</li>
					</ul></li>
		
					<li>Pengawas Sekolah(2009-2014):
					<ul><li>Setiausaha (2011)</li>
						<li>Bendahari(2014)</li></ul></li>
            
					<li>Extra Kurikulum:
					<ul><li>Nasyid Kamil Peringkat Sekolah(2012)</li>
						<li>Rekoder Ensembel Peringkat Daerah(2013)</li>
					</ul></li>
					</ol></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/smkts.png">
      <img src="image/smkts.png" alt="smk" width="400" height="200" >
    </a>
    <div class="desc">
		<h4>SMK TAMAN SELAYANG</h4><br>
					<ol>
					<li>Sukan: Bola Jaring
        			<ul><li>Naib Bendahari(2019)</li></ul></li>
		
					<li>Kelab Geografi: 
					<ul><li>Juru Audit (2019)</li>
					<li>Wakil Negeri(2019)</li></ul></li>
		
					<li>Kadet Polis: 
					<ul><li>Setiausaha(2019)</li>
					<li>Sub-Inspektor Kadet(2019)</li></ul></li>
		
					<li>Pengawas Sekolah(2016-2019):
					<ul><li>setiausaha (2016)</li>
					<li>Ketua Pengawas & Ketua Pelajar(2019)</li></ul></li>
				</ol>	
	</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/kms.png">
      <img src="image/kms.png" alt="kms" width="400" height="200">
    </a>
    <div class="desc">
		<h4>KOLEJ MATRIKULASI SELANGOR</h4><br>
					<ol>
					<li>Raisah Lajnah Multimedia Dan Penerbitan (2019-2020)</li>
					<li>Peer Assisted Learning(PAL)(2020-2021) </li>
					<li>Kawad Kaki peringkat Kolej(2021)</li>
					<li>Kawad Kaki Peringkat Kebangsaan(2021)</li>
        
				</ol>
	</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="image/UITM.png">
      <img src="image/UITM.png" alt="uitm" width="600" height="400">
    </a>
    <div class="desc">
		<h4>UNIVERSITI TEKNOLOGI MARA</h4><br>
					<ol>
					<li>Sukan Antara Kolej(SAF) Senamrobik(2022)</li>
					<li>Pengerusi Comunity Service-Program Service Learning Malaysia University(SULAM)(2022-2023)</li>
					<li>Currently Joined College Running Programme(2022-2024) </li>
					</ol>
	</div>
  </div>
</div>

<div class="clearfix"></div>


</div>



</body>
</html>




			
