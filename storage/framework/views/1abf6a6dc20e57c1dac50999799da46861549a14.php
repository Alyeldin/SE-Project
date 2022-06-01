
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
  background-color: rgba(95, 103, 113, 0.4);
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
    color: var(--main-text-color) !important;
  }
  nav ul li:hover {
    background-color: #ccc;
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
  color: var(--main-text-color);
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
  color: var(--main-text-color);
}
nav ul li a {
  color: white;
  text-decoration: none;
  background-color: var(--main-text-color);
  padding: 12px 17px;
  transition: 0.3s;
}
nav ul li a:hover {
  color: #f9735b;
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
/* Start Quote */
.quote {
  background-image: url(../images/cta-bg.jpg);
  background-size: cover;
  padding-top: 210px;
  padding-bottom: 210px;
  position: relative;
}
.quote .text {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  width: 70%;
  max-width: 100%;
}
@media (max-width: 780px) {
  .quote .text h2 {
    font-size: 35px !important;
    margin-bottom: 15px;
    font-weight: bold;
  }
}
.quote .text h2 {
  font-size: 38px;
}
.quote .text h2 span {
  color: var(--main-text-color);
}
.quote .text p {
  font-size: 18px;
}
.quote .text a {
  text-decoration: none;
  color: white;
  display: inline-block;
  background-color: var(--main-text-color);
  padding: 14px 22px;
  margin-top: 20px;
  transition: 0.4s;
}
.quote .text a:hover {
  background-color: #f9735b;
}
/* End Quote */
/* Start Classes */
.classes {
  padding-top: 120px;
  padding-bottom: 120px;
}
.classes .content {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 60px;
}
@media (max-width: 1000px) {
  .classes .content {
    flex-direction: column;
  }
  .classes .content .classes-sec {
    width: 100%;
    margin-bottom: 50px;
    text-align: center;
  }
  .classes .content .classes-sec .class {
    display: flex;
    margin: auto;
  }
  .classes .content .classes-sec a {
    width: 90%;
  }
  .classes .content .desc-sec {
    width: 90%;
    align-self: center !important;
  }
}
.classes .content .classes-sec {
  flex-basis: 35%;
}
.classes .content .classes-sec .class {
  display: flex;
  align-items: center;
  padding: 25px 23px;
  box-shadow: 0px 0px 10px 1px #ccc;
  width: 90%;
  margin-bottom: 30px;
  cursor: pointer;
}
.classes .content .classes-sec .class.activ {
  color: var(--main-text-color);
}
.classes .content .classes-sec .class h3 {
  margin-left: 20px;
}
.classes .content .classes-sec a {
  color: white;
  background-color: var(--main-text-color);
  text-decoration: none;
  padding: 20px 60px;
  display: inline-block;
  margin-top: 10px;
  font-weight: 700;
  font-size: 18px;
  border-radius: 5px;
  text-align: center;
}
.classes .content .classes-sec a:hover {
  background-color: #f9735b;
}
.classes .content .desc-sec {
  flex-basis: 65%;
  align-self: flex-start;
}
.classes .content .desc-sec img {
  border-radius: 4px;
  max-width: 100%;
}
.classes .content .desc-sec h3 {
  margin: 15px 0;
  font-size: 24px;
}
.classes .content .desc-sec p {
  color: #777;
  font-size: 14px;
  width: 95%;
}
.classes .content .desc-sec a {
  display: inline-block;
  color: white;
  background-color: var(--main-text-color);
  text-decoration: none;
  padding: 12px 18px;
  margin-top: 25px;
  transition: 0.3s;
}
.classes .content .desc-sec a:hover {
  background-color: #f9735b;
}
/* End Classes */
/* Start Schedule */
.schedule {
  padding: 100px 0;
  background-image: url(../images/schedule-bg.jpg);
  background-size: cover;
}
.schedule .diff-heading {
  color: white;
}
.schedule .diff-heading p {
  color: white;
}
.schedule ul {
  color: white;
  text-align: center;
  margin-top: 70px;
}
.schedule ul li {
  display: inline-block;
  padding: 2px;
  font-weight: 500;
  cursor: pointer;
  margin: 0 2px;
  transition: 0.3s;
}
.schedule ul li.activ {
  color: var(--main-text-color);
}
.schedule ul li:hover {
  color: var(--main-text-color);
}
table {
  margin: auto;
  color: white;
  margin-top: 20px;
}
table tr td {
  /* padding: 30px 70px; */
  height: 100px;
  font-size: 14px;
  border: 1px solid white;
  width: 250px;
  text-align: center;
}
/* End Schedule */
/* Start trainers */
.trainers {
  padding: 90px 0;
}
.trainer-container {
  display: flex;
  flex-wrap: wrap;
  margin-top: 50px;
  justify-content: space-around;
}
.trainer {
  flex-basis: 32%;
  padding: 40px;
  box-shadow: 0px 0px 15px rgb(0 0 0 / 10%);
  min-width: 300px;
  margin-bottom: 20px;
}
.trainer img {
  max-width: 100%;
  display: block;
  text-align: center;
}
.trainer span {
  color: var(--main-text-color);
  width: 80%;
  display: block;
  margin: 20px 0 5px;
}
.trainer h4 {
  font-size: 18px;
  color: #232d39;
  margin-bottom: 16px;
}
.trainer p {
  color: #777;
  font-size: 14px;
}
.trainer ul {
  margin-top: 10px;
}
.trainer ul li {
  display: inline-block;
  margin: 10px;
}
.trainer ul .fab {
  transition: 0.3s;
}
.trainer ul .fab:hover {
  color: var(--main-text-color);
  cursor: pointer;
}
/* End trainers */
/* Start Contact */
.contact {
  padding: 200px 0;
  background-image: url(../images/contact-bg.jpg);
  background-size: cover;
}
.contact .container {
  position: relative;
}
.contact .text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  width: 100%;
}
.contact .text h4 {
  font-size: 70px;
  font-weight: 500;
}
.contact .text h4 span {
  color: var(--main-text-color);
}
.contact .text a {
  color: white;
  background-color: var(--main-text-color);
  padding: 12px 20px;
  display: inline-block;
  margin-top: 10px;
  text-decoration: none;
  font-size: 18px;
  transition: 0.3s;
}
.contact .text a:hover {
  background-color: #f9735b;
}
/* End Contact */
/* Start Footer */
.footer {
  padding: 30px 0;
  text-align: center;
  font-size: 14px;
}
.footer span a {
  text-decoration: none;
  color: var(--main-text-color);
}
.footer span a:visited {
  color: var(--main-text-color);
}
/* End Footer */

  </style>
  <head>
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
        <li class="activ">Home</li>
        <li>About</li>
        <li><a href="calender2.php">Services</a></li>
        <li><a href="contactus">Contact</li>
        <li><a href="login">Sign up</a></li>
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
              <p>
                Please do not re-distribute this template ZIP file on any
                template collection website. This is not allowed.
              </p>
              <a href="products.html">DISCOVER MORE</a>
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
              <a href="products.html">DISCOVER MORE</a>
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
              <a href="products.html">DISCOVER MORE</a>
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
              <a href="products.html">DISCOVER MORE</a>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <!-- End Programs -->
   
   
  </body>
</html>
<?php /**PATH E:\Programs Downloaded\Xampp\htdocs\SGSS\resources\views/welcome.blade.php ENDPATH**/ ?>