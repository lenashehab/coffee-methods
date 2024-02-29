<?php include './components/html/head.php';?>
<?php include './components/pre-loader.php';?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg shadow-sm fixed-top">
  <div class="container-fluid">
    <i class="fa-solid fa-magnifying-glass text-dark"></i>
    <a class="navbar-brand" href="#"><img src="img/logo.webp" alt=""></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <img class="menu-bar" src="img/menubar.webp" alt="">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">HOMEPAGE</a>   
         </li>  
         <li class="nav-item">
          <a class="nav-link" href="#aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#products">Products&Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#events">News&Events</a>
        </li>
        <li class="nav-item hidden-dropdown-menu">
          <a class="nav-link" href="menu.php" target="_self">Our Menu</a>
        </li>
        <li class="nav-item hidden-dropdown-menu">
          <a class="nav-link" href="#franchise">Franchises</a>
        </li>
        <li class="nav-item hidden-dropdown-menu">
          <a class="nav-link" href="#joinus">Join Us</a>
          </li>
      </ul>
    
      <div class="nav-item lang">
          <a class="nav-link" href="#"><i class="fa-solid fa-earth-americas"></i> Ar</a>
        </div>
      <div class="nav-item trend-font">
        <button class="btn-nav">CONTACT US</button>
      </div> 
           <!-- dropdown menu -->
           <div class="dropdown">
    <button type="button" class="menu-bar-btn border-0 bg-transparent" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
    <img class="menu-bar" src="img/menubar.webp" alt="">
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="menu.php" target="_self">OUR MENU</a></li>
      <li><a class="dropdown-item" href="#franchise">Franchises</a></li>
      <li><a class="dropdown-item" href="#joinus">join us</a></li>
    </ul>
  </div>
   </div>
  </div>
</nav>

<!-- main page -->
<section class="main-page" id="home">
  <div class="container-fluid">
    <!-- home -->
    <div class="home text-center">
      <div class="home-content">
      <div class="home-text-img">
      <img src="img/hometext.webp" alt="">
      </div>
      <h1>Perfecting Your Way</h1>
      </div>
      <div class="home-img">
      <img src="img/homeimg.webp" alt="">
    </div>
    </div>
  </div>
<!-- about us -->
<div class="about-us" id="aboutus">
  <div class="container">
    <div class="row">
    <div class="col-md-6 p-5">
      <div class="about-us-content">
      <p><span class="small-header">A B O U T U S</span></p>
    <h2 class="wow flipInX">What About Methods Brand?</h2>
    <p class="wow flipInX" data-wow-delay="1s">Michods Café For Specialty Coffee Was Opened In 2018 In Jubail Industrial City, And It Is Considered One Of The Unique Brands In Its Field, As It Always Aims To Advance In The World Of Coffee, From The Kingdom Of Saudi Arabia To The Global Markets.</p>
    <div class="readmore d-flex">
    <a href="#"><h4>READ More</h4></a>
    <i class="fa-solid fa-arrow-right-long d-flex align-items-center ps-2"></i>
    </div>
      </div>
  </div>
  <div class="col-md-6">
    <div class="cup-img p-5">
    <img src="img/cup.webp" alt="">
    </div>
  </div>
    </div>
  </div>
</div>
</section>

<!-- timeline -->
<section class="timeline pt-5" id="franchise">
  <div class="container">
    <div class="row">
    <div class="timeline-headline ms-5">
      <p><span class="small-header">T I M E L I N E</span></p>
      <h2 class="wow flipInX">Methods Coffee <br> Time Line</h2>
      </div>
    <div class="timeline-content m-auto">
      <div class="road-img ">
      <img src="img/Group 4837.webp" alt="">
      </div>
      <div class="timeline-box-width timeline-box-postion-o wow flipInX">
        <div class="timeline-detail-box">
        <div class="road-p">JUBAIL INDUSTRAIL CITY</div>
        <p class="p-vsmall">Modi consectetur quisquam ullam molestiae<br>reiciendis fugit alias id nemo facilis,<br>perferend necessitatibus dicta!</p>
        </div>
      </div>
      <div class="timeline-box-width timeline-box-postion-t wow flipInX" data-wow-delay="1s">
        <div class="timeline-detail-box">
        <div class="road-p">AJDAN WALK (KHOBAR)</div>
        <p class="p-vsmall">Modi consectetur quisquam ullam molestiae<br>reiciendis fugit alias id nemo facilis,<br>perferend necessitatibus dicta!</p>
        </div>
      </div>
      <div class="timeline-box-width timeline-box-postion-th wow flipInX" data-wow-delay="2s">
        <div class="timeline-detail-box">
        <div class="road-p">ALYASSA WALK (FRANCH)</div>
        <p class="p-vsmall">Modi consectetur quisquam ullam molestiae<br>reiciendis fugit alias id nemo facilis,<br>perferend necessitatibus dicta!</p>
        </div>
      </div>
      </div>
      </div>
    </div>
</section>
       <!-- countdown -->
        <section class="countdown py-5">
       <div class="container">
      <div class="row">
        <div class="countdown-box text-center row py-3">
      <div class="col-md-4">
        <img src="img/coffee-beans.svg" alt="">
        <h3>+11</h3>
        <p>different product</p>
       </div>
       <div class="col-md-4">
        <img src="img/hot-coffee-rounded-cup-on-a-plate-from-side-view.svg" alt="">
        <h3>+700K</h3>
        <p>cup of specialty coffee</p>
       </div>
       <div class="col-md-4">
        <img src="img/location (2).svg" alt="">
        <h3>3</h3>
        <p>branch</p>
       </div>
        </div>
      </div>
    </div>
  </section>
<!-- O U R PR O D U C T S -->
<div class="our-products py-5" id="products">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div class="our-products-part">
      <p><span class="small-header">O U R PR O D U C T S</span></p>
    <h2 class="wow flipInX">Just A Taste With Methods Menu.</h2>
    <p>Lorem Ipsum is siimply dummmy texxt of the printingg andd typesetting industry. Lorem Ipsum haas beeen the industry's standdard dummmy texxt ever sinnce the 1500s, whenn ann unknown printer took a galley of typee and scrammbled it to make a type specimen book.</p>
    <div class="readmore d-flex">
    <a href="#"><h4>READ More</h4></a>
    <i class="fa-solid fa-arrow-right-long d-flex align-items-center ps-2"></i>
    </div>
      </div>
      </div>
      <div class="col-md-6 wow slideInRight">
        <div class="combo-offer-img">
        <img src="img/FwPNrWXWIAM50xFf.webp" alt="">
        </div>
      </div>

      <div class="owl-carousel owl-theme text-center pt-5" id="drinks-owl">
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-3.png" alt="">
        </div>
      <h6>Combo</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
        <div class="drink-img">
        <img src="img/Untitled-4.png" alt="">
        </div>
      <h6>Drip Coffee</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-1.png" alt="">
        </div>
      <h6>Hot Coffee</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-2.png" alt="">
        </div>
      <h6>Cold Coffee</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-3.png" alt="">
        </div>
      <h6>Combo</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-4.png" alt="">
        </div>
      <h6>Drip Coffee</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
    <div class="item">
      <div class="drink-box">
      <div class="drink-img">
        <img src="img/Untitled-1.png" alt="">
        </div>
      <h6>HOT Coffee</h6>
      <p class="p-small">small description of one or two lines</p>
      </div>
    </div>
   </div>
   <div class="our-prouducts-owl-arrows d-flex align-items-center justify-content-evenly pt-5">
    <div class="owl-arrow-left">
    <i class="fa-solid fa-arrow-left"></i>
    </div>
    <div class="owl-arrow-right">
    <i class="fa-solid fa-arrow-right"></i>
    </div>
   </div>
    </div>
  </div>
</div>

<!-- our services -->
<section class="our-services py-2">
  <div class="container">
    <div class="row">
      <div class="head py-4">
      <p><span class="small-header">O U R S E R V I C E S</span></p>
    <h2 class="wow flipInX">Check Our Services</h2>
      </div>
    <div class="col-md-4 pt-3 wow slideInLeft">
      <div class="service-card card-one text-center">
      <div class="service-icon">
        <img src="img/refund.webp" alt="">
      </div>
      <h6 class="trend-font">Loyalty Points</h6>
      <h4>(2% Cash Back!)</h4>
      <p class="p-small">Lorem Ipsum is siimply dummmy texxt of the printingg andd typesetting industry.</p>
      </div>
    </div>
    <div class="col-md-4 pt-3">
      <div class="service-card card-two text-center">
      <div class="service-icon service-icon-mobile">
        <img src="img/applications.webp" alt="">
      </div>
      <h6 class="trend-font">Solo Services</h6>
      <h4>(Web - Mobile App)</h4>
      <p class="p-small">Lorem Ipsum is siimply dummmy texxt of the printingg andd typesetting industry.</p>
      </div>
    </div>
    <div class="col-md-4 pt-3 wow slideInRight">
      <div class="service-card card-three text-center">
      <div class="service-icon">
        <img src="img/food-tray.webp" alt="">
      </div>
      <h6 class="trend-font">Catering Services</h6>
      <h4>(Caatering Services)</h4>
      <p class="p-small">Lorem Ipsum is siimply dummmy texxt of the printingg andd typesetting industry.</p>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- news and events -->
<section class="news-and-events text-center py-5" id="events">
  <div class="container">
    <div class="row">
      <div class="head py-4">
      <p><span class="small-header">N E W S A N D E V E N T S</span></p>
    <h2 class="wow flipInX">News & Events</h2>
      </div>
    <div class="col-md-4 pt-3">
     <div class="news-events">
      <div class="layer d-flex justify-content-between align-items-center">
        <div class="p-small">demo title of the news of one or teo lines</div>
        <div class="date">Apr 17, 2023</div>
      </div>
      <div class="news-event-img">
      <img src="img/waffles-with-chocolate-sauce-wooden-plate.webp" alt="">
      </div>
     </div>
    </div>
    <div class="col-md-4 pt-3">
     <div class="news-events">
      <div class="layer d-flex justify-content-between align-items-center">
        <div class="p-small">demo title of the news of one or teo lines</div>
        <div class="date">Apr 17, 2023</div>
      </div>
      <div class="news-event-img">
      <img src="img/1-1465726.webp" alt="">
      </div>
     </div>
    </div>
    <div class="col-md-4 pt-3">
     <div class="news-events">
      <div class="layer d-flex justify-content-between align-items-center">
        <div class="p-small">demo title of the news of one or teo lines</div>
        <div class="date">Apr 17, 2023</div>
      </div>
      <div class="news-event-img">
      <img src="img/ddd.webp" alt="">
      </div>
     </div>
    </div>
    <div class="col-md-6">
     <div class="news-events pt-4">
      <div class="layer d-flex justify-content-between align-items-center">
        <div class="p-small">demo title of the news of one or teo lines</div>
        <div class="date">Apr 17, 2023</div>
      </div>
      <div class="news-event-img">
      <img src="img/df.webp" alt="">
      </div>
     </div>
    </div>
    <div class="col-md-6">
     <div class="news-events pt-4">
      <div class="layer d-flex justify-content-between align-items-center">
        <div class="p-small">demo title of the news of one or teo lines</div>
        <div class="date">Apr 17, 2023</div>
      </div>
      <div class="news-event-img">
      <img src="img/df.webp" alt="">
      </div>
     </div>
    </div>
    <div class="readmore d-flex justify-content-center pt-5">
    <a href="#"><h4 class="fw-bold">READ More</h4></a>
    <i class="fa-solid fa-arrow-right-long d-flex align-items-center ps-2"></i>
    </div>
  </div>
</section>

<!-- partners -->
<section class="partners py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-4">
      <div class="head">
      <p><span class="small-header">P A R T N E R S</span></p>
      <h2>Our Strategic Partners.</h2>
      </div>
      <p>Lorem Ipsum isss simply dummy textt of the printinnggl.</p>
      <div class="partner-box d-flex align-items-center">
        <div class="partner-img"  id="targetDiv">
        <img src="img/mzmliEvzFStI1CwdADheSRy1pxbH4e2vvwpHEHGq.png" alt="">
        </div>
        <div class="partner-content">
        <h6>October Roaster</h6>
        <p class="p-small">A Strategic Partner for supplying speciality coffee.</p>
        </div>
      </div>
      </div>
      <div class="col-md-6 my-auto">
      <div class="owl-carousel owl-theme" id="owl-partner">
    <div class="item"> 
      <div class="partner-img">
        <img src="img/جاهو-300x95.webp" alt="">
        </div>
      </div>
    <div class="item">
    <div class="partner-img">
        <img src="img/mzmliEvzFStI1CwdADheSRy1pxbH4e2vvwpHEHGq.png" alt="">
        </div>
    </div>
    <div class="item">
    <div class="partner-img">
        <img src="img/Hungerstation(wikiar).svg.webp" alt="">
        </div>
    </div>
     </div>
     <div class="owl-carousel owl-theme pt-5" id="partner2">
    <div class="item"> 
      <div class="partner-img">
        <img src="img/Hungerstation(wikiar).svg.webp" alt="">
        </div>
      </div>
    <div class="item">
    <div class="partner-img">
        <img src="img/جاهو-300x95.webp" alt="">
        </div>
    </div>
    <div class="item">
    <div class="partner-img">
        <img src="img/mzmliEvzFStI1CwdADheSRy1pxbH4e2vvwpHEHGq.png" alt="">
        </div>
    </div>
     </div>
      </div>
    </div>
  </div>
</section>

<!-- preloader -->
 <!-- <div class="preloader"> -->
  
  <!-- marquee -->
   <!-- <div class="marquee">
  <div class="marquee-content">
  <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
  </div>
  <div class="marquee-content">
  <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
 <img src="img/marque.png" alt="">
  </div>
 </div> 
   <div class="loading">
    <p class="text-center"><img class="w-100" src="img/Group 440@2x.png" alt=""></p>
    <div class="loading-icons d-flex justify-content-center pt-3">
        <span class="persentase fw-bold pe-2">0%</span>
        <div class=" load-icon-mine-1" role="status">
            <i class="fa-solid fa-mug-hot"></i>
        </div>
    </div>
    </div>
</div>  -->


<!-- footer -->
  <?php include './components/html/footer.php';?>