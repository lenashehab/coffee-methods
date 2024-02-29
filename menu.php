<?php include './components/html/head.php';?>
<?php include 'navbar.php';?>

<section class="our-menu pt-5 mt-5 mb-3 pb-1">
    <div class="container-fluid">
  <div class="row">
    <div class="col-md-6 d-flex justify-content-center align-items-center">
    <div class="meal-offer-content text-center">
    <p><span class="small-header">O U R M E N U</span></p>
        <h3 class="wow flipInX">BREAKFAST COMBO</h3>
        <h3 class="wow flipInX">كومبو الفطور</h3>
        <div class="discound fs-4 trend-font"><span class="fs-2">10%</span> DISCOUND</div>
    </div>
   </div>
   <div class="col-md-6 wow slideInRight">
    <div class="meal-offer-img">
    <img src="img/fetar-.jpg" alt="">
   </div>
    </div>
</div>
    </div>
</section>

<!-- items -->
<section class="items pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center">
            <img src="img/od.png" alt="">
            </div>
            <div class="col-md-8 d-flex align-items-center">
            <div class="btn-group w-100 d-flex align-items-center justify-content-center shadow">
  <button type="button" class="btn trend-font text-start" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
   Drinks
   <div class=" dropdown-toggle d-flex justify-content-between align-items-center fs-5">مشروب</div>
  </button>
  <ul class="dropdown-menu dropdown-menu-lg-end">
    <li><button class="dropdown-item" type="button">SANDWICHES</button></li>
  </ul>
    </div>
    </div>
        </div>

        <!-- items carousel -->
         <div class="owl-menu-container">
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-menu">
    <div class="item owl-menu-title active"><a href="#" data-filter="all">ALL</a></div>
    <div class="item owl-menu-title"><a href="#" data-filter="drip">DRIP COFFEE</a></div>
    <div class="item owl-menu-title"><a href="#" data-filter="hot">HOT COFFEE</a></div>
    <div class="item owl-menu-title"><a href="#" data-filter="cold">COLD COFFEE</a></div>
    <div class="item owl-menu-title"><a href="#" data-filter="combos">COMBOS</a></div>
      </div>
      <div class="owl-menu-arrow-left">
      <i class="fa-solid fa-chevron-left"></i>
      </div>
      <div class="owl-menu-arrow-right">
      <i class="fa-solid fa-chevron-right"></i>
      </div>
        </div>
        <hr>

        <div class="all-menu">
        <div class="menu-item" data-category="cold">
            <div class="row menu-box">
            <div class="col-md-4">
            <div class="items-img">
                <img src="img/Untitled-2.png" alt="">
            </div>
            </div>
            <div class="col-md-8">
                <div class="items-details">
                <div class="fs-3">ICE DROP COFFEE</div>
                <div class="price-box d-flex justify-content-between align-items-center pt-5">
                    <div class="trend-font">18 SR</div>
                    <button class="add-card-btn rounded-3">ADD TO CARD</button>
                </div>
                </div>
            </div>
            </div>
            <hr>
        </div>

            <div class="menu-item" data-category="drip">
                <div class="row menu-box">
                <div class="col-md-4">
            <div class="items-img">
                <img src="img/Untitled-4.png" alt="">
            </div>
            </div>
            <div class="col-md-8">
                <div class="items-details">
                <div class="fs-3">DRIP COFFEE</div>
                <div class="price-box d-flex justify-content-between align-items-center pt-5">
                    <div class="trend-font">12 SR</div>
                    <button class="add-card-btn rounded-3">ADD TO CARD</button>
                </div>
                </div>
            </div>
                </div>
            <hr>
            </div>
            
            <div class="menu-item" data-category="cold">
                <div class="row menu-box">
                <div class="col-md-4">
            <div class="items-img">
                <img src="img/Untitled-2.png" alt="">
            </div>
            </div>
            <div class="col-md-8">
                <div class="items-details">
                <div class="fs-3">ICE DROP COFFEE</div>
                <div class="price-box d-flex justify-content-between align-items-center pt-5">
                    <div class="trend-font">18 SR</div>
                    <button class="add-card-btn rounded-3">ADD TO CARD</button>
                </div>
                </div>
            </div>
                </div>
            <hr>
        </div>

        <div class="menu-item" data-category="hot">
                <div class="row menu-box">
                <div class="col-md-4">
            <div class="items-img">
                <img src="img/Untitled-1.png" alt="">
            </div>
            </div>
            <div class="col-md-8">
                <div class="items-details">
                <div class="fs-3">HOT COFFEE</div>
                <div class="price-box d-flex justify-content-between align-items-center pt-5">
                    <div class="trend-font">18 SR</div>
                    <button class="add-card-btn rounded-3">ADD TO CARD</button>
                </div>
                </div>
            </div>
                </div>
            <hr>
        </div>

        <div class="menu-item" data-category="combos">
                <div class="row menu-box">
                <div class="col-md-4">
            <div class="items-img">
                <img src="img/Untitled-3.png" alt="">
            </div>
            </div>
            <div class="col-md-8">
                <div class="items-details">
                <div class="fs-3">COMBO</div>
                <div class="price-box d-flex justify-content-between align-items-center pt-5">
                    <div class="trend-font">18 SR</div>
                    <button class="add-card-btn rounded-3">ADD TO CARD</button>
                </div>
                </div>
            </div>
                </div>
            <hr>
        </div>

   </div>
</section>


<!-- footer -->
<?php include './components/html/footer.php';?>