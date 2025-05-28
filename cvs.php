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
                <div class="col-lg-8">
                    <!-- Heading -->
                    <h1 class="h1 text-white text-center text-lg-left my-4">
                        CVS
                    </h1>
                    <!-- Text -->
                    <p class="lead text-white text-center text-lg-left opacity-8">
                       Want to get more details of a client?
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
                    <h3>Customized Verification System</h3>
                    <p class="lh-190"><h6>Do you need a comprehensive information about a client ?</h6></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Form -->
                    <p>
                    If you feel any of our identity verification services do not meet your specific needs, 
                    feel free to tell us your special need, we will provide a bespoke solution that meets all your identity verification requirements.
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