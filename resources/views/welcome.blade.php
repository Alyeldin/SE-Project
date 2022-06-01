
<!DOCTYPE html>
<html lang="en">
  <style>
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
  color:#FF6347;
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

nav ul li a {
  color: white;
  text-decoration: none;
  background-color: #000000;
  padding: 17px 17px;
  transition: 0.5s;
}
nav ul li a:hover {
  color: #FF6347;
}
/* End Nav */

/* Start Header */
.header {
  height: 100vh;
  position: relative;
}
@media (max-width: 767px) {
  .header .text-box h1 {
    font-size: 60px !important;
  }
}
.header::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(35, 45, 57, 0.8);
}
.header video {
  width: 100%;
  height: 100vh;
  object-fit: cover;
}
.header .text-box {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  width: 100%;
}
.header .text-box p {
  font-weight: 800;
  font-size: 20px;
}
.header .text-box h1 {
  margin-top: 20px;
  font-size: 90px;
  font-weight: 800;
}
.header .text-box h1 span {
  color: var(--main-text-color);
}
.header .text-box a {
  color: white;
  background-color: var(--main-text-color);
  text-decoration: none;
  padding: 12px 20px;
  display: inline-block;
  margin-top: 20px;
  transition: 0.3s;
}
.header .text-box a:hover {
  background-color: #f9735b;
}
/* End Header */
/* Start Programs */
.programs {
  padding-top: 120px;
  padding-bottom: 70px;
}
.programs .program-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin-top: 100px;
}
.programs .program-container .program {
  flex-basis: 48%;
  display: flex;
  margin-bottom: 50px;
}
@media (max-width: 1200px) {
  .programs .program-container .program {
    flex-basis: 90%;
    margin: 0 auto 35px;
  }
}
.programs .program-container .program img {
  width: 100px;
  height: 100px;
  max-width: 100%;
}
.programs .program-container .program .text {
  margin-left: 22px;
}
.programs .program-container .program .text h3 {
  font-weight: 700;
}
.programs .program-container .program .text p {
  color: #777;
  font-size: 15px;
}
.programs .program-container .program .text a {
  display: inline-block;
  margin-top: 3px;
  text-decoration: none;
  color: var(--main-text-color);
}
/* End Programs */





  </style>
  <head>
   <!-- ll -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scooter Garage</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Start Nav -->
    <nav>
      <div class="logo">
        <a href="#">Scooter<span>Garage</span></a>
      </div>
      <i class="fas fa-ellipsis-v" id="menuButton"></i>
      <ul id="menu">
        <li ><a href="#">Home</li>
        <li><a href="services">Services</a></li>
        <li><a href="contactus">Contact</li>
        <li><a href="login">login </a></li>
      </ul>
    </nav>
    <!-- End Nav -->

    <!-- Start Header -->
  
    <!-- Start Programs -->
    <div class="programs">
      <div class="container">
        <div class="special-heading">
          <h2>Choose <span>Program</span></h2>
          <img src="images/line-dec.png" alt="" />
          <p>
            Training Studio is free CSS template for gyms and fitness centers.
            You are<br />
            allowed to use this layout for your business website.
          </p>
        </div>
        <div class="program-container">
          <div class="program">
            <img src="images/scotter.jpg" alt="" />
            <div class="text">
              <h3>Scooter details</h3>
              
              <a href="product">DISCOVER MORE</a>
            </div>
          </div>
          <div class="program">
            <img src="images/download.png" alt="" />
            <div class="text">
              <h3>Spare Parts</h3>
              <p>
                You may want to browse through Digital Marketing or Corporate
                HTML CSS templates on our website.
              </p>
              <a href="product">DISCOVER MORE</a>
            </div>
          </div>
          <div class="program">
            <img src="images/download (2).png" alt="" />
            <div class="text">
              <h3>Oil Change</h3>
              <p>
                If you wish to support TemplateMo website via PayPal, please
                feel free to contact us. We appreciate it a lot.
              </p>
              <a href="product">DISCOVER MORE</a>
            </div>
          </div>
          <div class="program">
            <img src="images/4181373.png" alt="" />
            <div class="text">
              <h3>Accessories</h3>
              <p>
                This template is built on Bootstrap v4.3.1 framework. It is easy
                to adapt the columns and sections.
              </p>
              <a href="product">DISCOVER MORE</a>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <!-- End Programs -->
   
   
  </body>
</html>
