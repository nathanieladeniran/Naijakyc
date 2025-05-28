<!DOCTYPE html>
<html lang="en">
<?php $title="Activate Account"; include('partial/header.prt.php'); include('app-settings.php'); ?>
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
                    <form action="" id="activateform" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="contactperson" id="contactperson" value="<?=$_GET['contactlname']." ".$_GET['contactfname'] ?>" readonly required>
                            <input type="hidden" name="acctType" value="Administrator" /><input type="hidden" name="acctStatus" value="Active" /> <input type="hidden" name="cacno" value="<?=$_GET['cac'] ?>" />
                            <input class="form-control form-control-lg" type="hidden" name="loginurl" id="loginurl" value="<?=LOGIN_URL ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" name="companyemail" id="email" value="<?=$_GET['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="password" name="cpass" id="cpass" placeholder="Retype Password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="file" name="cacImg" id="cacImg" placeholder="" required>
                            <small class="text-success">Upload your CAC Certificate</small>
                        </div>
                       
                        <div id="message"></div>
                        <div class="text-center">
                            <button type="button" id="activateBut" class="btn btn-block btn-lg btn-success mt-4">Complete Setup  <span class="btn-inner--icon"><i data-feather="user"></i>
                                </span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>   
    
    <?php include('partial/footer.prt.php') ?>
    <script src="assets/js/activateacct.js"></script>
    </body>

</html>