
  <?php include "header1.php"; ?>
<!-- End Header -->

              <!---section of contact--->

      <section id="contact" style="margin-top:10%;background-image:url('images/cont.jpg');height:350px;background-repeat:no-repeat;background-size: 100% 100%;
    background-position: right;">
        <div class="container">
                <div class="row">
                    <div class="about_our_company" style="margin-bottom:20px;">                        
                        <h2 style="color:#fff;text-align:center;"><b>Contact Us</b></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">					
                        <form name="sentMessage" id="contactForm" novalidate="" method="POST">
						<p style="color:#fff;">Write Your Message</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="fname" name="fname" required="" data-validation-required-message="Please enter your name.">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="emailInfo" name="emailInfo" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="messageinfo" required="" name="messageinfo" data-validation-required-message="Please enter a message."></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <link rel="stylesheet" type="text/css" href="contact.php">
                                    <button type="submit" class="btn btn-primary" onclick="contact.php" name="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <p style="color:#fff;">
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                        Plot No.5, Ladikar Layout, Manewada Road, 
                        Nagpur- 440024 MH

                       </p>
                        <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
Tel No. 0712-2705331, 
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            info@shivshaktiedu.org</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
                                          <!-- footer -->
             <?php include "footer.php"; ?>
            <!-- End footer-->        