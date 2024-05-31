<!DOCTYPEhtml>
<html>
<head>
		<title>PROFILE</title>

		<meta charset = "UTF-8">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="shortcut icon" type="x-icon" href="image/Izz rudy.png" >
	<style>
	*{
		margin: 0;
		padding: 0;
		font-family: cursive;
		
		
		
	}

	.logo{
		width:120px;
		cursor: pointer;
	}

	.banner{
		width: 100%;
		height: 100vh;
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
	
	.main{
		position:center;
		padding-top:200px;
		width: 100%;
		height: 100vh;
		
		background-attachment: inherit;
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(image/pelamin.jpg);
		background-size: cover;
		background-position: center;
		
	}
	
	.main h1{
		color: #DA70D6;
		padding: 50px;
		text-align: left;
		margin-top:5%;
		
	}
	
	/* Biography Section */
	.bio {
		background-color: #FFFAFA;
		text-align: center;
		color: #DA70D6;
		max-width: 600px;
		padding: 10px;
		margin-LEFT:20%;
		margin-top:5%;
		box-sizing: border-box;
		
   }

	.bio h6 {
		font-size: 24px;
		text-transform: uppercase;
	}
	
	p.big {
		font-size: 20px;
		line-height: 1.5;
	}
	h6.big {
		font-size: 20px;
		text-align:center;
	}
	
	p.medium {
		font-size: 17px;
	}
	
	p.small {
		font-size: 12px;
		
	}

	.bio p br {
		line-height: 2.0;
	}

	.Work {
		padding:5px;
		margin: 0;
	}

	.Work h1 {
		font-size: 24px;
		margin-bottom:2%;
		
		color: #DA70D6;
		text-align: center;
		text-transform: uppercase;
	}
	
	/* Style the tab buttons */
	.tablink {
		background-color: #DCDCDC;
		color: #DA70D6;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 20px 16px;
		font-size: 17px;
		width: 25%;
	}

/* Change background color of buttons on hover */
	.tablink:hover {
		background-color: #d63384;
	}

/* Set default styles for tab content */
	.tabcontent {
		color: #DA70D6;
		display: none;
		padding: 50px;
		text-align: left;
		margin-top:0%;
	}
	
	.tabcontent h1{
		text-align:center;
	}

/* Style each tab content individually */
	#Cashier {background-color: #FFFAFA;}
	#Sales {background-color:#F0FFF0;}
	#Editor {background-color:#E0FFFF ;}
	#Instructor {background-color:#FFFFE0;}
	
	.skill {
		padding:5%;
		margin: 20px;
	}

	.skill h6 {
		font-size: 24px;
		margin-bottom: 20px;
		color: #DA70D6;
		text-align: center;
	}

	.skill-cards {
		display: flex;
		flex-wrap: wrap;
		gap: 20px;
		justify-content: center;
	}

	.skill-card {
		background: #DCDCDC;
		border: 1px solid #DA70D6;
		border-radius: 8px;
		box-shadow: 0 2px 4px rgba(0,0,0,0.1);
		padding: 20px;
		width: calc(33% - 40px);
		box-sizing: border-box;
		text-align: center;
	}

	.skill-card ul {
		padding: 0;
		list-style: none;
	}

	.skill-card li {
		margin-bottom: 10px;
		font-size: 14px;
		color: #333;
	}

	.skill-card li::before {
		content: '•';
		color: #4A90E2;
		font-weight: bold;
		display: inline-block;
		width: 1em;
		margin-left: -1em;
	}
	
	.accordion {
		background-color: #eee;
		color: #444;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		text-align: left;
		border: none;
		outline: none;
		transition: 0.4s;
	}


	.active, .accordion:hover {
		background-color: #ccc;
	}

	.panel {
		padding: 0 18px;
		background-color: white;
		display: none;
		overflow: hidden;
	}

	
	</style>
	
	
</head>


<body>


	<div class="navbar">
				<!--Logo Style-->
				<a href="Home.php" >
					<img src="image/Izz rudy.png" class="logo" width="104" height="104">
				</a>
				
				<!--Navigation bar-->
				<ul>
					<li><a href="Profile.php"	>PROFILE	</a></li>
					<li><a href="Education.php"	>EDUCATION	</a></li>
					<li><a href="Passion.php"	>PASSION	</a></li>
					<li><a href="Gallery.php"	>GALLERY	</a></li>
					<li><a href="Comment.php"	>COMMENT	</a></li>			
				</ul>
	</div>
	
	
	

	
<div class="main">
		<h1>PROFILE</h1>	

	<button class="accordion">ABOUT ME</button>
	<div class="panel">
		<div class="bio">	
		<h6>Biography</h6>
		<p class="big">
		NURUL IZZATI BINTI KAMARUDIN <br></p><p class="medium">
		Student of Science Computer (Hons.) Multimedia Computing<br><br></p><p class="small">
		Hello! I'm Izz, a Multimedia Computing student with a passion<br>
		for blending technology with creativity. 
		<br>Currently pursuing my Bachelor's degree at Universiti Teknologi MARA,<br>
		I have immersed myself in the exciting world of multimedia design, development, and production.<br>
		</p>
	</div>
	</div>

	<button class="accordion">EXPERIENCED</button>
	<div class="panel">
		<div class="Work">
        <h1>Work Experience</h1>
	
	<div id="Cashier" class="tabcontent">
		<h6 class="big">Cashier, School Bookstore</h6>
		<ul>
                        <li>Efficiently managed cash transactions and provided excellent customer service to students.</li>
                        <li>Assisted with inventory management and ensured the bookstore was well-organized and stocked.</li>
                        <li>Gained valuable experience in handling monetary transactions and improving customer interaction skills.</li>
        </ul>
	</div>

	<div id="Sales" class="tabcontent">
		<h6 class="big">Sales Associate, BONIA Boutique</h6>
		<ul>
            <li>Delivered personalized customer service, assisting clients in selecting and purchasing luxury fashion items.</li>
            <li>Maintained store presentation standards, including merchandise displays and cleanliness.</li>
			<li>Developed strong sales techniques and contributed to achieving monthly sales targets.</li>
        </ul>
	</div>

	<div id="Editor" class="tabcontent">
		<h6 class="big">Editor, College Publications</h6>
		<ul>
            <li>Worked as an editor for the college's publications while pursuing my matriculation certificate.</li>
            <li>Edited articles, designed layouts, and coordinated with writers to ensure high-quality content.</li>
            <li>Enhanced my editorial skills and gained experience in managing publication projects under tight deadlines.</li>
        </ul>
	</div>

	<div id="Instructor" class="tabcontent">
		<h6 class="big">District School Level Drill Instructor</h6>
		<ul>
            <li>Provided drill training and discipline guidance to students at the district level.</li>
            <li>Organized and conducted drill practices, ensuring participants adhered to standards and protocols.</li>
            <li>Developed leadership and training skills through mentoring and coaching students in drill techniques and team coordination.</li>
        </ul>
	</div>

	<button class="tablink" onclick="openCity('Cashier', this, 'red')" id="defaultOpen">Cashier</button>
	<button class="tablink" onclick="openCity('Sales', this, 'green')">Sales Associate</button>
	<button class="tablink" onclick="openCity('Editor', this, 'blue')">Editor</button>
	<button class="tablink" onclick="openCity('Instructor', this, 'orange')">Instructor</button>
	
	
	
    </div>
	</div>

	<button class="accordion">SKILL</button>
	<div class="panel">
		<div class="skill">
		<h6>Skill</h6>
    <div class="skill-cards">
        <div class="skill-card">
            <ul>
			<p class="medium">PROGRAMMING LANGUAGE</p>
                <li>JavaScript</li>
                <li>Python</li>
                <li>Java</li>
                <li>C++</li>
            </ul>
        </div>
        <div class="skill-card">
            <ul>
				<p class="medium">WEB DEVEOPMENT</p>
                <li>HTML</li>
                <li>CSS</li>
                <li>PHP</li>
            </ul>
        </div>
        <div class="skill-card">
            <ul>
				<p class="medium">DATABASE MANAGEMENT & GRAPHIC DESIGN</p>
                <li>MySQL</li>
                <li>Photopea</li> 
                <li>Photoshop</li>
            </ul>
        </div>
        <div class="skill-card">
            <ul>
				<p class="medium">VIDEO & EDITING</p>
                <li>Capcut</li>
                <li>VideoMaker</li>
                <li>Audacity</li>
            </ul>
        </div>
        <div class="skill-card">
            <ul>
				<p class="medium">3D MODELING & ANIMATION</p>
                <li>Blender</li>
                <li>Adobe Animate</li>
            </ul>
        </div>
        <div class="skill-card">
            <ul>
				<p class="medium">SOFT SKILL</p>
                <li>Team Leadership</li>
                <li>Problem-Solving</li>
                <li>Patience</li>
                <li>Communication</li>
                <li>Project Management</li>
                <li>Self-Motivation</li>
                <li>Analytical thinking</li>
                <li>Multitasking</li>
                <li>Open-Mindedness</li>
                <li>Innovation</li>
            </ul>
        </div>
    </div>
</div>
	</div>
	
</div>

<script src="js/Caculator.js"></script>
</body>

</html>

