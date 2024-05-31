<!DOCTYPEhtml>
<html>
<head>
	<title>COMMENT</title>
	<meta charset = "UTF-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" type="x-icon" href="image/Izz rudy.png" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>    /* Global Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #DCDCDC;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #DCDCDC;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.title {
    text-align: center;
    margin-bottom: 20px;
}

.form {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input {
    padding: 8px;
    width: calc(100% - 16px);
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    padding: 10px 20px;
    background-color: #DCDCDC;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.btn:hover {
    background-color: #DCDCDC;
}

.result {
    font-size: 1.2em;
    text-align: center;
    padding: 10px;
    background-color: #DCDCDC;
    border-radius: 4px;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #DCDCDC;
  color: #DA70D6;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #DCDCDC;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #DCDCDC;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #DCDCDC;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #DCDCDC;
  color: #DA70D6;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: #DCDCDC;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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


	
<h1>CGPA Calculator</h1>

<form id="cgpaForm">
    <div id="subjectsContainer">
        <div class="form-group">
            <label>Grade for Subject 1:</label>
            <input type="text" name="grade[]" required>
            <label>Credit Hours for Subject 1:</label>
            <input type="number" name="credit[]" required>
        </div>
    </div>
    <button type="button" onclick="addSubject()">Add Another Subject</button>
    <button type="submit">Calculate CGPA</button>
</form>

<div class="result" id="result"></div>



<h2>Popup Chat Window</h2>
<p>Click on the button at the bottom of this page to open the chat form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script src="js/Caculator.js"></script>

<script>
    function addSubject() {
        const container = document.getElementById('subjectsContainer');
        const subjectCount = container.children.length + 1;
        const div = document.createElement('div');
        div.className = 'form-group';
        div.innerHTML = `
            <label>Grade for Subject ${subjectCount}:</label>
            <input type="text" name="grade[]" required>
            <label>Credit Hours for Subject ${subjectCount}:</label>
            <input type="number" name="credit[]" required>
        `;
        container.appendChild(div);
    }

    document.getElementById('cgpaForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const grades = document.getElementsByName('grade[]');
        const credits = document.getElementsByName('credit[]');
        
        let totalPoints = 0;
        let totalCredits = 0;

        for (let i = 0; i < grades.length; i++) {
            const grade = grades[i].value.toUpperCase();
            const credit = parseFloat(credits[i].value);
            let point;

            switch (grade) {
                case 'A': point = 4.0; break;
                case 'A-': point = 3.7; break;
                case 'B+': point = 3.3; break;
                case 'B': point = 3.0; break;
                case 'B-': point = 2.7; break;
                case 'C+': point = 2.3; break;
                case 'C': point = 2.0; break;
                case 'C-': point = 1.7; break;
                case 'D+': point = 1.3; break;
                case 'D': point = 1.0; break;
                case 'F': point = 0.0; break;
                default: alert('Invalid grade: ' + grade); return;
            }

            totalPoints += point * credit;
            totalCredits += credit;
        }

        const cgpa = totalPoints / totalCredits;
        document.getElementById('result').innerText = `Your CGPA is: ${cgpa.toFixed(2)}`;
    });
</script>


</div>
</body>
</html>
