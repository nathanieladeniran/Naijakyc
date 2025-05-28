<!DOCTYPE html>
<html lang="en">
<?php $title="Contact"; include('partial/header.prt.php'); include('app-settings.php'); ?>
<body>
    
   
    <!-- Navbar -->
    <?php include('partial/nav.prt.php') ?>
    <!-- Main content -->
    <section class="slice py-6 pt-lg-7 pb-lg-8 bg-dark">
        <!-- Container -->
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-lg-6">
                    <!-- Heading -->
                    <h1 class="h1 text-white text-center text-lg-left my-4">
                        Need to <strong>Get In Touch</strong>?
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white text-center text-lg-left opacity-8">
                       Send us a message by fillinng the form below, we will get back to you within 24 hours
                    </p>
                </div>
            </div>
        </div>        
    </section>
    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Contact us</h3>
                    <p class="lh-190">If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Form -->
                    <form action="api/middlewares/contactMail.inc" id="contactform" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="fullname" id="fullname" placeholder="Your Full name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="examplee@ymal.com" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="phone" placeholder="+234745234567" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" placeholder="Tell us a your needs ..." rows="3" name="enq" id="enq" required></textarea>
                        </div>
                        <div class="text-center">
                            <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                            <div id="message"></div>
                            <button type="button" id="enqBut" class="btn btn-block btn-lg btn-success mt-4">Send Message  <span class="btn-inner--icon"><i data-feather="send"></i>
                                </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   
    
    <?php include('partial/footer.prt.php') ?>
    <script src="assets/js//contact.js"></script>
    </body>

</html>