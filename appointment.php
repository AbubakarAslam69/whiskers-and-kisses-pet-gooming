<?php include 'include/header.php' ?>
<title>Whiskers & Kisses Pet Grooming</title>
</head>

<body>
    <?php include 'include/menu.php' ?>


    <!-- Begin: Main Slider -->
    <div class="innerBan">
        <!-- <img src="images/innerbnr1.png" class="w-100" alt=""> -->
        <div class="overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <h2><span>Appointment</span></h2>
                    </div>
                    <div class="col-md-6">
                        <img src="images/innerbnr1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Main Slider -->



    <section class="booking-section">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="booking-top" data-aos="fade-up">
                        <img src="images/foot-print.png" class="img-fluid foot-print-img" alt="image">
                        <h2 class="mainHead">Booking Online</h2>
                        <h3>Appointment</h3>
                    </div>
                    <form class="contactForm contact-form" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-up">
                                <div class="contactboxs">
                                    <span><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" name="fname" placeholder="Full Name *">
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up">
                                <div class="contactboxs">
                                    <span><i class="fas fa-phone-alt"></i></span>
                                    <input type="text" class="form-control" name="lname" placeholder="Phone number *">
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up">
                                <div class="contactbox">

                                    <input type="date" class="form-control" name="phone" placeholder="Date*">
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up">
                                <div class="contactboxs">
                                    <span><i class="far fa-clock"></i></span>
                                    <input type="time" class="form-control" name="email" placeholder="time*">
                                </div>
                            </div>

                            <div class="col-md-12" data-aos="fade-up">
                                <div class="contactboxs">
                                    <span><i class="fas fa-comment"></i></span>
                                    <textarea rows="6" class="form-control" name="msg" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button class="themeBtn ">Make an Appointment</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 faqs-section">
                    <figure>
                        <img src="images/appoint11.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="happy-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7" data-aos="fade-up">
                    <div class="happy-cntnt">
                        <h2>A Happy Pet Behaves Happy</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up">
                    <a href="" class="themeBtn">Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php' ?>