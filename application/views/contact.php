<style>
    .pos {
        font-size: 30px;
        font-weight: 600;
        color: #8c99cf;
    }

    .dos {
        font-size: 20px;
        font-weight: 600;
        color: #132e4c;
    }

    .imgBubble{
        width: 100%;
    }

   

  .col-md-3:hover .pos {
    /* text-decoration: underline; */
    transition: color 0.3s;
    color: #FA620A;
  }
  .col-md-4:hover .pos {
    /* text-decoration: underline; */
    transition: color 0.3s;
    color: #FA620A;
  }

  
  
</style>

<section class="hero-section banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h2>Contact</h2>
                    <!-- <h6>Dry cleaning and laundry service, made to make life fresher</h6> -->
                    <h6>Laundary services made for Hospital and Hotels</h6>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="main">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <div class="hero-img">
                    <img src="assets/images/a2.png" alt="img">
                </div>
            </div>
        </div>
    </div>

</section>

<section style="padding:40px 0px;">
    <div class="container ">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading two contact-heading">
                    <p>CONNECT WITH OUR PROFESSIONALS</p>
                    <h2>We'd Love to Hear From You!</h2>
                    <!-- <h6>Dry Cleaning & Laundry Expers with Collection and Delivery in 24 hours</h6> -->

                </div>
            </div>
            <div class="col-lg-6">
                <form class="content-form" action="contact/insert_data" id="contactform" method="post" enctype="multipart/form-data">
                    <input type="text" name="Name" placeholder="Full Name" required autocomplete="off">
                    <input type="email" name="Email" placeholder="Email Address" required autocomplete="off">
                    <input type="tel" name="PhoneNo" placeholder="Phone No" required autocomplete="off"  pattern="[6-9][0-9]{9}"
                     title="Please enter a valid 10-digit mobile number">
                    <textarea  name="Message" placeholder="Your Message" required autocomplete="off"></textarea>
                    <button class="sec-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <hr style="color:#FA620A; margin:0;"> -->

<section style="position: relative;" class="Bubbleimg">
    <!-- <img src="https://cleanlaundry.com/wp-content/uploads/2023/06/CL-bubbles-bottom@2x-1.png" alt="" style="width:99%;"> -->
    <img src="assets/logo/bubble-line.png" class="imgBubble" >

    <div class="container" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
        <div class="row d-flex justify-content-between" style="
    margin-top: -74px;">
            <div class="col-md-3 text-center">
                <h6 class="pos">Working Hours</h6>
                <h4 class="dos">  Operating 24/7</h4>
            </div>

            <div class="col-md-3 text-center">
                <h6 class="pos">Phone No.</h6>
                <h4><a class="dos" href="callto:+91 9828096696">+91 9828096696</a></h4>
            </div>

            <div class="col-md-4 text-center">
                <h6 class="pos">Email Address</h6>
                <h4><a class="dos" href="mailto:mayanksharma@bharatlaundry.co">mayanksharma@bharatlaundry.co</a></h4>
            </div>
        </div>
    </div>
</section>
