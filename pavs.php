<!DOCTYPE html>
<html lang="en">
<?php $title="PAVS"; include('partial/header.prt.php'); include('app-settings.php'); ?>
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
                        PAVS
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white text-center text-lg-left opacity-8">
                       Do you need us to help you verify the address of your customer and be sure they gave a real Address?
                    </p>
                    <a href="signup?acctType=Standard" class="btn btn-success btn-icon" target="_blank">
                            <span class="btn-inner--text">Get Started</span>
                            <span class="btn-inner--icon"><i data-feather="user"></i></span>
                        </a>
                </div>
            </div>
        </div>        
    </section>
    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Physical Address Verification System</h3>
                    <p class="lh-190"><h6>Are you having a doubt about customer or client address ?</h6></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Form -->
                    <p>
                    Nigeria KYC Provides a unique Physical Identity and Address Verification Service. 
                    This is a specialized solution targeted at people/clients who want to meet customers/business partners physically prior to doing business with them.
                    </p>
                    <p>
                    Our Physical Address and Identity Verification comes with reports, photographs and geographic location details of whom to be a business partner.
                    </p>
                    <p>
                    If you want to minimize your business risk, our Physical Address verification Service can save you a fortune.
                    </p>
                    <a href="signup?acctType=Standard" class="btn btn-success btn-icon" target="_blank">
                            <span class="btn-inner--text">Get Started</span>
                            <span class="btn-inner--icon"><i data-feather="user"></i></span>
                        </a>
            </div>
        </div>
    </section>   
    
    <?php include('partial/footer.prt.php') ?>
    </body>

</html>