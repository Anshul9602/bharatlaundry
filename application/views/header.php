<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BHARAT LAUNDRY</title>
  <link rel="icon" href="assets/logo/1.png">
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <!-- nice-select -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- fancybox -->
  <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/aos.css">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- style -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive -->
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- color -->
  <link rel="stylesheet" href="assets/css/color.css">

  <style>
    .four-point-star::after,
    .four-point-star::before {
      position: absolute;
      top: -144px;
      left: -61px;
      content: "\2726";
      font-size: 12rem;
    }


    .four-point-star::after {
      /* The foreground star */
      background: #170454;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }


    .four-point-star {
      position: relative;
    }


    /* these change bottom bar before if want star edge */
    /*================================================ */
    /*================================================ */
      /* left: 29%;
      border-top-left-radius: 0px;
      border-bottom-left-radius: 0px; */
    /*================================================ */ 
    /*================================================ */





  </style>


</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader-6">
      <div class="set-one">
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
      <div class="set-two">
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>
  </div>
  <!-- preloader end -->
  <header>

    <div class="container"  >
      <div class="bottom-bar" >
        <a href="main"><img style="max-width: 220px;" src="https://bharatlaundry.co/logos.png" alt="logo"></a>
        <!-- <span class="four-point-star"></span> -->
        <nav class="navbar">
          <ul class="navbar-links">
            <li class="navbar-dropdown has-children">
              <a href="<?php echo base_url('main');?>">Home</a>
            </li>

            <li class="navbar-dropdown">
              <a href="<?php echo base_url('about');?>">About Us</a>
            </li>

            <li class="navbar-dropdown has-children">
              <a href="<?php echo base_url('service');?>">Services</a>
            </li>

            <li class="navbar-dropdown">
              <a href="<?php echo base_url('contact');?>">Contact Us</a>
            </li>
          </ul>
        </nav>
        <div class="pickup">
          <!-- <a href="javascript:void(0)" class="lightbox-toggle sec-btn">Schedule a Pickup</a> -->
          <a href="<?php echo base_url('contact')?>" class="sec-btn ">Enquire Now </a>
        </div>
        <div class="bar-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>

    <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
      <div class="res-log">
        <a href="main">
          <img src="assets/logo/logos.png" alt="Responsive Logo">
        </a>
      </div>
      <ul>

        <li><a href="<?php echo base_url('main');?>">Home</a>

        </li>
        <li><a href="<?php echo base_url('about');?>">About Us</a></li>

        <li><a href="<?php echo base_url('service');?>">Services</a></li>


        <li><a href="<?php echo base_url('contact');?>">Contact Us</a></li>

      </ul>

    </div>

  </header>


</body>