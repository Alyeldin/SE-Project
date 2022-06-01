<!DOCTYPE html>
<style>/* Start Main Rules */
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


:root {
  --green: #6e8a3c;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
}

*::selection {
  background: var(--green);
  color: #fff;
}

html {
  font-size: 0.625rem;
  overflow-x: hidden;
}

nav {
  font-size: 14px;
  background-color: black;
}

html::-webkit-scrollbar {
  width: 1.3rem;
}

html::-webkit-scrollbar-track {
  background: #eee;
}

html::-webkit-scrollbar-thumb {
  background: var(--green);
}

section {
  min-height: 100vh;
  padding: 0 7%;
  padding-top: 9rem;
}

.btn {
  padding: 0.7rem 2rem;
  font-size: 1.7rem;
  background: #666;
  color: #fff;
  cursor: pointer;
  margin-top: 1rem;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

.btn:hover {
  background: #444;
}

.product {
  text-decoration: none;
  text-transform: capitalize;
  transition: all 0.3s cubic-bezier(0.38, 1.15, 0.7, 1.12);
  font-weight: normal;
  font-family: cursive;
}

.product .box-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.product .box-container .box {
  border: 0.1rem solid rgba(0, 0, 0, 0.1);
  margin: 2rem;
  padding: 1rem;
  border-radius: 0.5rem;
  background: #fff;
  width: 30rem;
  text-align: center;
}

.product .box-container .box img {
  height: 20rem;
  width: 20rem;
  object-fit: cover;
}

.product .box-container .box h3 {
  font-size: 2rem;
  color: var(--green);
}

.product .box-container .box .stars i {
  font-size: 2rem;
  color: gold;
  padding: 1rem 0.1rem;
}

.product .box-container .box .price {
  font-size: 2rem;
  color: #666;
}

.product .box-container .box .price span {
  font-size: 1.5rem;
  color: #aaa;
  padding-right: 0.5rem;
  text-decoration: line-through;
}

.product .box-container .box .icons {
  padding: 1rem 0;
}

.product .box-container .box .icons a {
  font-size: 1.5rem;
  color: #666;
  height: 5rem;
  width: 5rem;
  line-height: 5rem;
  border: 0.1rem solid rgba(0, 0, 0, 0.1);
  border-radius: 0.5rem;
  margin: 0.5rem;
}

.product .box-container .box .icons a:hover {
  background: #eee;
}

</style>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style.css" />
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
        <li >Home</li>
        <li><a href="calender2">Services</a></li>
        <li><a href="contactus">Contact</li>
        <li><a href="login">login </a></li>
      </ul>
    </nav>
    <!-- End Nav -->


    <!-- product section starts  -->

    <section style="margin-top: 50px" class="product" id="product">
      <div class="box-container">
        <div class="box">
          <img src="images/img1.jpg" alt="" />
          <h3>organic tomato</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/img2.jpg" alt="" />
          <h3>organic banana</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/img3.jpg" alt="" />
          <h3>organic grapes</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/img4.jpg" alt="" />
          <h3>organic lemon</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/img5.jpg" alt="" />
          <h3>organic broccoli</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>

        <div class="box">
          <img src="images/img6.jpg" alt="" />
          <h3>organic potato</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half"></i>
          </div>
          <div class="price"><span>$15.10</span> $12.30</div>
          <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
      </div>
    </section>

    <!-- product section ends -->
  </body>
</html>
<?php /**PATH E:\Programs Downloaded\Xampp\htdocs\SGSSv2\SGSS\resources\views/product.blade.php ENDPATH**/ ?>