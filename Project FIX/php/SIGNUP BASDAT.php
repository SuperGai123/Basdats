SIGN UP

<!DOCTYPE html>
<html>
<body>

<form action="tomboldaftar.php" method="POST" style="border:3px solid #800080">
  <div class="container">
  <h1>Sign Up</h1>
  <p>Please fill in this form to create an account.</p>
  <hr>
  
 <label for="fname"><b>First Name</b></label>
  <input type="text" placeholder="Enter First Name" name="fname" required>

 <label for="lname"><b>Last Name</b></label>
  <input type="text" placeholder="Enter Last Name" name="lname" required>

  <label for="username><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="username" required>
  
  <label for="phone"><b>Phone Number</b></label>
  <input type="text" placeholder="Enter Phone Number" name="phone" required>
  
  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="Enter Email" name="email" required>
  
  <label for="password"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="password" required>
  
  <label for="pswrd-repeat"><b>Repeat Password</b></label>
  <input type="password" placeholder="Repeat Password" name="pswrd-repeat" required>
  
  <div class="clearfix">
     <a href="http://localhost/TugasUAS/H3h3/Projekt/"> <button type="button" class="cancelbtn" name="cancel">Cancel</button></a>
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>
  </div>
</form>
<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'gagal'){
				echo "Pendaftaran akun gagal, silahkan dicoba ulang!";
			} 
		?>
	</p>
	<?php endif; ?>
</body>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid #ccc; 
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: 1px solid black;
}

hr {
  border: 1px solid #9932CC;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 3px solid white;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 20px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</html>
