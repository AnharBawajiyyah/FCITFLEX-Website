<!DOCTYPE html >
<html>

<head> 
<title>Contact Us</title>
<link rel="stylesheet" href="css/contactstyle.css">
 <script src = "focus_blur.js"></script>
 <script>
 function yourCountry() {
  from = document.forms[0].country.value;
  alert("Your viewing this website from " + from);
}

 </script>

</head>

<body>
	<nav class="navbar">
		<img class="logo" src="img/popcorn.svg" width="55" height="55" alt="">
		<p> FCITFLIX <p/>
			<ul>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="contacts.php">Contact Us</a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Genre ▼</a>
					<ul>
						<li><a href="#">Drama</a></li>
						<li><a href="#">Comedy</a></li>
						<li><a href="#">Thriller</a></li>
						<li><a href="#">Horror</a></li>
					</ul>
				</li>
			</ul>
	</nav>
	
	<div class="container">
		<h2><i>Contact Us<i></h2>
		<p>WE WANT TO HEAR FROM YOU..</p>
	</div>
	
	<form id = "myForm" method="post" action="newContact.php"> 

    <div class="container">
		<img class="cimg" src="img/contactus.jpg" alt="">
        <label for="fname"style="color: black" > Full Name </label><br>
        <input type="text" id="fname" name="fullname" placeholder="Enter Your Full Name"><br>
        <label for="lname"style="color: black" >Email Address</label><br>
        <input type="text" id="email" name="email" placeholder="Enter Your Email Address"><br>
        <label for="country" style="color: black" >Country</label><br>
        <select id="country" name="country" onchange="yourCountry()"><br>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="UAE">UAE</option>
          <option value="USA">USA</option>
        </select><br>
        <label for="subject"style="color: black" >Your Message </label><br>
        <textarea id="subject" name="subject" placeholder="Write Something.." style="height:170px"></textarea><br>
		<br>
		
		
		
	<input id="submit" name="submit" type ="submit" style="color: white" value="Submit">
	</form>
	
  <p id = "helpText"></p>
    </div>

   <div class="signiture">
		<p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - Email: <a href="#">fcitflix@stu.kau.edu.sa</a></p>
		<p class="fl_left">Follow us on Twitter: <a href="#">https://twitter.com/</a></p>
		<p class="fl_right">Lama mohsen, Anhar Omar, Lama Asiri </p>
	</div>
   
</body>
</html>
