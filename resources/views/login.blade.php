
<html>
<head>
	<title>Login in</title>
	<style>

body{
	margin: 0;
	padding: 0;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}

.login{
	width: 320px;
	height: 500px;
	color: white;
	top: 65%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 60px 20px;
	overflow: auto;
	background: rgb(0,0,0,0.5);
}


h1{

	margin: 30;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
	color: white;
}

.login label{
	margin: 0;
	padding: 0;
	font-weight: bold;
}

.login input{
	width: 100%;
	margin-bottom: 20px;
}

.login input[type="email"], input[type="password"]{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 12px;
}

.login input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}

.login input[type="submit"]:hover{
	cursor: pointer;
	background: #ffc107;
	color: white;
}

.login a {
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: white;

}

.login a:hover {
	color: #ffc107;
}

/* Start Main Rules */
:root {
  --main-text-color: #ed563b;
}
* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}
::selection {
  background: var(--main-text-color);
  color: white;
}
.container {
  margin-left: auto;
  margin-right: auto;
}
/* Small Screens */
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
/* Medium Screens */
@media (min-width: 998px) {
  .container {
    width: 970px;
  }
}
/* Large Screens */
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
/* End Main Rules */

/* Start Components */
.special-heading {
  text-align: center;
}
.special-heading h2 {
  text-transform: uppercase;
  font-weight: 800;
  font-size: 28px;
}
.special-heading h2 span {
  color: var(--main-text-color);
}
.special-heading img {
  margin: 15px 0 10px;
}
.special-heading p {
  color: #777;
  font-size: 14px;
}
/* End Components */

/* Start Nav */
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 22px 6%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1;
  background-color:rgb(0, 0, 0);
}
nav .fas {
  display: none;
}
@media (max-width: 1100px) {
  nav {
    background-color: white;
  }
  nav .logo {
    color: black !important;
  }
  nav .logo a {
    color: black !important;
  }
  nav .fas {
    display: block;
    font-size: 20px;
    cursor: pointer;
  }
  nav .fas:hover + ul {
    top: 95px;
    transition: 0.5s;
  }
  nav ul {
    position: absolute;
    top: -400px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 70%;
  }
  nav ul li {
    margin-bottom: 30px;
    color: black !important;
    background-color: white;
    margin: 0;
    padding: 15px 0;
    border-bottom: 1px solid rgba(204, 204, 204, 0.3);
  }
  nav ul li.activ,
  nav ul li:hover {
    color: black !important;
  }
  nav ul li:hover {
    background-color: #black;
  }
  nav ul li:last-child {
    padding: 0;
  }
  nav ul li a {
    display: block;
  }
}
nav .logo {
  font-size: 35px;
  font-weight: 800;
  color: white;
  text-transform: uppercase;
}
nav .logo a {
  text-decoration: none;
  color: white;
}
nav .logo span {
  color:;
}
nav ul li {
  display: inline-block;
  margin-left: 35px;
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  transition: 0.3s;
  cursor: pointer;
}
nav ul li.activ,
nav ul li:hover {
  color: #000000;
}
nav ul li a {
  color: white;
  text-decoration: none;
  background-color: #000000;
  padding: 12px 17px;
  transition: 0.3s;
}
nav ul li a:hover {
  color: #FFF8DC;
}
/* End Nav */



::placeholder {
  color:  yellow;
}

	</style>
	 <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ScooterGarage</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<div>
 <!-- Start Nav -->
 <nav>
      <div class="logo">
        <a href="welcome">Scooter<span>Garage</span></a>
      </div>
      <i class="fas fa-ellipsis-v" id="menuButton"></i>
      <ul id="menu">
        <li ><a href="welcome">Home</li>
        <li><a href="services">Services</a></li>
        <li><a href="contactus">Contact</li>
        <li><a href="login">login </a></li>
      </ul>
    </nav>
    <!-- End Nav -->

        </div>

        
	<div class="login">
		
		<h1>Login</h1>
		<form method="POST" action= "login.php">
		
			<label>Email Address</label><br>
			<input type="email" name="email" placeholder="username@example.com">
			<label>Password</label><br>
			<input type="password" name="password" placeholder="********">
			<input type="submit" name="Login" value="Login">
			<br>
			<a href="signup">Don't have an account?</a>
		</form>
	</div>
		
	
</body> 
</html>