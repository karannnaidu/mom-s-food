<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="resources\css\style.css">
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    <link rel="stylesheet" href="resources/css/queries.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
    <title>MOM's FOOD </title>

    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="resources/favicons/site.webmanifest">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
<header id="home">
  <div class="row">
     <!--row is always centerd  -->

     <ul class="main-nav js-main-nav">
   
       <li><p style="color: white;  ">USERNAME : <?php  echo $_SESSION["username"]; ?> </p></li>
     </ul>

   </div>
  <nav>
   <div class="row">
     <!--row is always centerd  -->
     <img src="resources/img/logo.png" alt="moms food LOGO" class="logo">
     <img src="resources/img/logo-black.png" alt="moms food LOGO for sticky nav LOGO" class="logo-black">
     <ul class="main-nav js-main-nav">
        <li><a href="#home">home</a></li>
       <li><a href="#features">WHY us?</a></li>
       <li><a href="#works">How it Works</a></li>
       <li><a href="#cities">Our Cities</a></li>
       <li><a href="#plans" >Sign Up</a></li>
     </ul>
     <a class="mobile-nav-icon js-nav-icon  "><i class="icon ion-md-menu menu"></i></a>
   </div>
  </nav>
  <div class="hero-text-box">
    <div class="row">


    <h1>HOME COOKED FOOD !!! <br> tasty and healthy</h1>
<a class="btn btn-full js-scroll-to-plans" href="sign.html"> ORDER NOW! </a>
    <a  class="btn btn-ghost js-scroll-to-start" href="#">Show me more </a>
    </div>
    </div>
</header>


<section class="section-features js-section-features" id="features">

<div class="row">
<h2> Get food fast &mdash;  not fast food.</h2>
<p class="long-copy">
Hello, we’re mom's food, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
</p>

</div>
<div class="row">
  <div class="col span-1-of-4 box">
    <ion-icon name="infinite" class=" icon-big"></ion-icon>
      <h3>Up to 365 days/year</h3>
<p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
</p>
  </div>
  <div class="col span-1-of-4 box">
    <ion-icon name="timer"  class="icon-big"></ion-icon>
      <h3>Ready in 60 mins</h3>
<p>You're only an hour away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.

</p>
  </div>

  <div class="col span-1-of-4 box">
    <ion-icon name="nutrition"class= "icon-big"></ion-icon>
        <h3>100% organic</h3>
  <p>
    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!

  </p>
    </div>

    <div class="col span-1-of-4 box">
<ion-icon name="cart" class= "icon-big"></ion-icon>
         <h3>EASY ORDERING </h3>
  <p>Ordering your meal on the mom's food! Website will take less than 2 mins!!

  </p>
    </div>

</div>

</section>


<section class="section-meals">

<ul class="meals-showcase clearfix">
  <li>
   <figure class="meal-photo">
     <img src="resources/img/1.jpg" alt="1.carrot halwa">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/2.jpg" alt="	2.	brinjal curry">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/3.jpg" alt="3.	idly with chunety">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/4.jpg" alt="4.	chicken tikka">
   </figure>
  </li>
  <li>



</ul>

<ul class="meals-showcase clearfix">
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/5.jpg" alt="5.	south indian vegetable mix">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/6.jpg" alt="biryani">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/7.jpg" alt="7.	vegetable curry">
   </figure>
  </li>
  <li>
   <figure  class="meal-photo">
     <img src="resources/img/8.jpg" alt="8.	Granola with cherries and strawberries">
   </figure>
  </li>



</ul>

</section>

<section class="section-steps" id="works">
    <div class="row">


      <h2> How it works &mdash; Simple as 1, 2, 3</h2>
</div>
          <div class="row">
            <div class="col span-1-of-2 steps-box">
              <img src="resources/img/iphonex.png" alt="phone image" class="app-screen">
          </div>

            <div class="col span-1-of-2 steps-box">
              <div class="works-step">
                <div >
                  1
                </div>
            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
          </div>
          <div class="works-step">
            <div >
              2
            </div>
        <p>	Order your delicious meal using our mobile app or website. Or you can even call us!</p>
      </div>
      <div class="works-step">
        <div >
          3
        </div>
    <p>	Enjoy your meal ,  Healthy food prepared for you with the love and care of a mother.</p>
  </div>

    <a href="#"class="btn-app"><img src="resources/img/android.png" alt="play link button"></a>
      <a href="#"class="btn-app"><img src="resources/img/apple.png" alt="apple store link button"></a>



     </div>
</section>

<section class="section-cities" id="cities">
  <div class="row">


    <h2>We're currently in these cities</h2>
    </div>
    <div class="row">
      <div class="col span-1-of-4 box">
        <img src="resources/img/hyderbad.jpg" alt="hyderabad IMAGE">
            <h3>hyderabad</h3>
            <div class="city-feature">
        <i class="icon ion-ios-person icon-small"></i>

        1600+ happy eaters

      </div>
      <div class="city-feature">
  <i class="icon ion-ios-star icon-small"></i>
  60+ top chefs


</div>
<div class="city-feature">
<i class="icon ion-logo-twitter icon-small"></i>

   <a href="#">@mom'sfood_hy </a>

</div>
      </div>
      <div class="col span-1-of-4 box">
        <img src="resources/img/bangalore.jpg" alt="bengaluru IMAGE">
            <h3>BEGALURU</h3>
            <div class="city-feature">
        <i class="icon ion-ios-person icon-small"></i>

        3700+ happy eaters
      </div>
      <div class="city-feature">
  <i class="icon ion-ios-star icon-small"></i>

160+ top chefs

</div>
<div class="city-feature">
  <i class="icon ion-logo-twitter icon-small"></i>

    <a href="#">@mom'sfood_be</a>
</div>
      </div>

      <div class="col span-1-of-4 box">
        <img src="resources/img/delhi.jpg" alt="delhi IMAGE">
            <h3>delhi</h3>
            <div class="city-feature">
        <i class="icon ion-ios-person icon-small"></i>

        2300+ happy eaters




      </div>
      <div class="city-feature">
  <i class="icon ion-ios-star icon-small"></i>
  110+ top chefs


</div>
<div class="city-feature" >
<i class="icon ion-logo-twitter icon-small"></i>

  <a href="#"> @mom'sfood_del</a>
</div>
      </div>

      <div class="col span-1-of-4 box">
        <img src="resources/img/chennai.jpg" alt="chennai IMAGE">
            <h3>chennai</h3>
            <div class="city-feature">
        <i class="icon ion-ios-person icon-small"></i>

        1200+ happy eaters

      </div>
      <div class="city-feature">
  <i class="icon ion-ios-star icon-small"></i>
  50+ top chefs



</div>
<div class="city-feature">
<i class="icon ion-logo-twitter icon-small"></i>

  <a href="#">  @mom'sfood_ch</a>
</div>
      </div>


    </div>

</section>
<section class="section-testimonials">
  <div class="row">
    <h2>Our customers can't live without us</h2>

  </div>
  <div class="row">
<div class="col span-1-of-3">
  <blockquote >
    Thanks. appreciate this level of customer service- quite commendable. Keep
    															it up!
                                  </blockquote>
<cite> <img src="resources/img/customer-1.jpg" alt="customer 1">HARSHA R</cite>

</div>
<div class="col span-1-of-3">
  <blockquote >

    I would like to applaud you guys for delivering such delectable &amp; healthy
  															food.... I am really happy that I chose Spice Box.....your food makes me
  															feel at home :)
</blockquote>
<cite> <img src="resources/img/customer-2.jpg" alt="customer 3"> SHRAVYA </cite>

</div>
<div class="col span-1-of-3">
  <blockquote >
    Thank you for your hospitality &amp; the warmth you bring to my table with the
  															Ghar-ka-Khana touch :) I relish it &amp; look forward to a long association with
  															you.
</blockquote>
<cite> <img src="resources/img/customer-3.jpg" alt="customer 3"> Karan</cite>

</div>


  </div>
</section>



<section class="section-plans js-section-plans " id="plans">
  <div class="row">
    <h2> Start eating healthy today</h2>
  </div>
      <div class="row">
    <div class="col span-1-of-3">
      <div class="plan-box">
        <div>
        <h3>Premium</h3>
        <p class="plan-price">5999 &#8377;<span>/month</span></p>
        <p class="plan-price-meals"> That’s only  100 per meal</p>
      </div>

      <div>
        <ul>
          <li><ion-icon name="checkmark" class="icon-small"></ion-icon> breakfast , dinner and lunch</li>
          <li><ion-icon name="checkmark" class="icon-small"></ion-icon> Order 24/7</li>
<li><ion-icon name="checkmark" class="icon-small"></ion-icon> Access to newest creations</li>
  <li><ion-icon name="checkmark" class="icon-small"></ion-icon>Free delivery</li>
  </ul>
          </div>
        <div>
            <a href="sign.html" class="btn btn-full">check out</a>
        </div>
    </div>
    </div>



    <div class="col span-1-of-3">
      <div class="plan-box">
        <div>
        <h3>Pro</h3>
        <p class="plan-price">7800 &#8377; <span>/month</span> </p>
        <p class="plan-price-meals"> That’s only 130 per meal</p>
   </div>
      <div>
        <ul>
          <li> <ion-icon name="checkmark" class="icon-small"></ion-icon>   breakfast  and lunch/dinner</li>
<li><ion-icon name="checkmark" class="icon-small"></ion-icon>  Order 24/7</li>
<li><ion-icon name="checkmark" class="icon-small"></ion-icon>Access to newest creations</li>
  <li><ion-icon name="checkmark" class="icon-small"></ion-icon>Free delivery</li>
    </ul>
    </div>
        <div >
            <a href="sign.html" class="btn btn-ghost">check out</a>
        </div>
      </div>
  </div>

    <div class="col span-1-of-3">
      <div class="plan-box">
        <div>
        <h3>Starter</h3>
        <p class="plan-price">200 &#8377; <span>/meal</span></p>
        <p class="plan-price-meals">&nbsp;</p>
        </div>
      <div>
        <ul>
          <li><ion-icon name="checkmark" class="icon-small"></ion-icon>breakfast/luch/dinner</li>
<li>  <ion-icon name="checkmark" class="icon-small"></ion-icon>Order from 8 am to 12 pm</li>
  <li><ion-icon name="close" class="icon-small"></ion-icon></li>
  <li><ion-icon name="checkmark" class="icon-small"></ion-icon>  Free delivery</li>
        </ul>
        </div>
        <div>
            <a href="sign.html" class="btn btn-ghost">check out</a>
        </div>
    </div>
    </div>
    </div>
</section>



<section class="form">
  <div class="row">
    <h2>We're happy to hear from you</h2>

  </div>
  <div class="row">
    <form method="post" action="#" class="contact-form">
       <div class="row">
         <div class="col span-1-of-3 ">
           <label  for="name">Name</label>
         </div>
         <div class="col span-2-of-3">
            <input type="text" name="name" placeholder=" your name" id=" name" required>
         </div>
       </div>
       <div class="row">
         <div class="col span-1-of-3 ">
           <label for="email" >email</label>
         </div>
         <div class="col span-2-of-3">
            <input type="email" name="email" placeholder="your email" id=" email" required>
         </div>
       </div>
       <div class="row">
         <div class="col span-1-of-3 ">
           <label for="find-us">How did you find us?</label>
         </div>
         <div class="col span-2-of-3">
            <select id="find-us" name="find-us">
              <option value="Friends">Friends</option>
              <option value="Search">Search Engine</option>
              <option value="ad">Advertisement</option>
              <option value="other">other</option>

            </select>
         </div>
       </div>
       <div class="row">
         <div class="col span-1-of-3 ">
           <label for="news" >Newsletter</label>
         </div>
         <div class="col span-2-of-3">
            <input type="checkbox" name="news"  id="news" checked>Yes ,Please
         </div>
       </div>
       <div class="row">
         <div class="col span-1-of-3 ">
           <label >Drop us a line</label>
         </div>
         <div class="col span-2-of-3">
<textarea name="message" placeholder="your message"></textarea>
         </div>
       </div>
       <div class="row">
         <div class="col span-1-of-3 ">
           <label >&nbsp;</label>
         </div>
         <div class="col span-2-of-3">
<input type="submit"  value="Send it">
         </div>
       </div>



      </form>
  </div>

</section>
<footer>
  <div class="row">
    <div class="col span-1-of-2">
      <ul class="footer-nav">
        <li><a href="about.html">About us</a></li>
          <li><a href="#">Cancel subscription</a></li>
            <li><a href="#">iOS App</a></li>
          <li><a href="#">Android App</a></li>


      </ul>
      </div>



      <div class="col span-1-of-2">
        <ul class="social-links">
  <li>    <a href="https://www.facebook.com/  ">    <i class="icon ion-logo-facebook "></i></a></li>
  <li>    <a href="https://www.twitter.com/">    <i class="icon ion-logo-twitter "></i></a></li>
  <li>    <a href="https://www.instagram.com/">    <i class="icon ion-logo-instagram "></i></a></li>
  <li>    <a href="https://plus.google.com/discover">    <i class="icon ion-logo-googleplus "></i></a></li>
        </ul>
        </div>
        <div class="row">
            <p>Copyright &copy; 2019 MOM's FOOD.All rights reserved</p>

          </div>


</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>
  </body>
</html>
<!--

>-->
