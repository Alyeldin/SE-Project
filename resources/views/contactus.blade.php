<style>
 /* Start Contact */
.contact {
    padding-top: var(--section-padding);
    padding-bottom: var(--section-padding);
}
.contact .content {
    display: flex;
    justify-content: space-between;
}
@media (max-width: 767px) {
    .contact .content {
        flex-direction: column;
    }
}
.contact .content form {
    flex-basis: 70%;
}
.contact .content form .main-input {
    padding: 20px;
    display: block;
    border: 1px solid #ccc;
    margin-bottom: 30px;
    width: 100%;
}
.contact .content form .main-input:focus {
    outline: none;
}
.contact .content form textarea.main-input {
    height: 200px;
}
.contact .content form input[type="submit"] {
    background-color: var(--main-color);
    color: white;
    border: none;
    padding: 20px;
    display: flex;
    margin-left: auto;
    text-transform: uppercase;
    cursor: pointer;
}
.contact .content .info {
    flex-basis: 25%;
}
@media (max-width: 767px) {
    .contact .content .info {
        order: -1;
        text-align: center;
    }
}
.contact .content .info h4 {
    text-transform: uppercase;
    margin-bottom: 30px;
    font-weight: 500;
    font-size: 18px;
}
.contact .content .info span.phone {
    display: block;
    color: white;
    margin-bottom: 10px;
}
.contact .content .info h4:nth-of-type(2) {
    margin-top: 90px;
}
@media (max-width: 767px) {
    .contact .content .info h4:nth-of-type(2) {
        margin-top: 30px;
    }
}
.contact .content .info address {
    color: #white;
    line-height: 2;
}
@media (max-width: 767px) {
    .contact .content .info address {
        margin-bottom: 30px;
    }
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



</style>
    <link rel="stylesheet" href="css/ContactUs.css">
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
   <!-- Start Contact -->
   <!-- Start Nav -->
   <nav>
      <div class="logo">
        <a href="#">Scooter<span>Garage</span></a>
      </div>
      <i class="fas fa-ellipsis-v" id="menuButton"></i>
      <ul id="menu">
        <li ><a href="#">Home</li>
        <li><a href="calender2">Services</a></li>
        <li><a href="contactus">Contact</li>
        <li><a href="login">login </a></li>
      </ul>
    </nav>
    <!-- End Nav -->

        </div>
        <div class="contact">
            <div class="container">
                <div class="main-heading">
               <p style="color:white"><h2>Contact Us</h2>
                   
                </div>
                <div class="content">
                    <form action="">
                        <input class="main-input" type="text" name="name" placeholder="Your Name">
                        <input class="main-input" type="email" name="mail" placeholder="Your Email">
                        <textarea class="main-input" name="message" placeholder="Your Message"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                    <div class="info">
                        <h4>Get In Touch</h4>
                        <span class="phone">+201282140230</span>
                        <span class="Email">ahmedshlkany@gmail.com</span>
                        <h4>Where We Are</h4>
                        <address>
                         <li><a href="https://www.google.com/maps/dir/30.1482649,31.3805508/30.0624026,31.3253368/@30.1069906,31.2869759,12z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0">Manteqet Al Cinema, Nasr City, Cairo </li> 
                    </div>
                </div>
            </div>

        </div>
        <!-- End Contact -->