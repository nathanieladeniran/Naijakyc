<!DOCTYPE html>
<html lang="en">
<?php $title="SignUp"; include('partial/header.prt.php'); include('app-settings.php'); ?>
<body>
    
   
    <!-- Navbar -->
    <?php include('partial/nav.prt.php') ?>
    <!-- Main content -->
    
    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Create a Free Account</h3>                    
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Form -->
                    <form action="" id="regform" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="companyname" id="companyname" placeholder="Company Name" required>
                            <input class="form-control form-control-lg" type="hidden" name="acctname" id="acctname" value="<?= $_GET['acctType'] ?>" required>                            
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="companyemail" id="companyemail" placeholder="Company Email e.g admin@company.com" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="companyphone" id="companyphone" placeholder="Company Phone+234745234567" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="cacno" id="cacno" placeholder="Company Registration Number" required>
                        </div>                        
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="contactfname" id="contactfname" placeholder="Contact Person Firstname" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="contactlname" id="contactlname" placeholder="Contact Person Lastname" required>
                        </div>
                        <div id="message"></div>
                        <div class="text-center">
                            <button type="button" id="newacctBut" class="btn btn-block btn-lg btn-success mt-4">Create Account  <span class="btn-inner--icon"><i data-feather="user"></i>
                                </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   
    
    <?php include('partial/footer.prt.php') ?>
    <script src="assets/js/newacct.js"></script>
    </body>

</html>