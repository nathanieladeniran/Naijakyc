<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index" class="text-success">
                
                <img alt="Image placeholder" src="assets/img/logo.png" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">   
                    <li class="nav-item ">
                        <a class="nav-link" href="#whyus">About Us</a>
                    </li>                 
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Products</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="pavs" class="dropdown-item">PAVS </a>
                            <div class="dropdown-divider"></div>
                            <a href="cvs" class="dropdown-item">CVS</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>                   
                    <li class="nav-item ">
                        <a class="nav-link" href="faq">FAQ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=LOGIN_URL ?>login" target="_blank">Login</a>
                    </li> 
                </ul>
                <!--Web Button -->                
                <a class="navbar-btn btn btn-sm btn-success d-none d-lg-inline-block ml-3" href="signup?acctType=Standard" target="_blank">Create Free Account  
                    <span class="btn-inner--icon"><i data-feather="user"></i></span></a>
                <!-- Mobile button -->                
                <div class="d-lg-none text-center"><a href="signup?acctType=Standard" class="btn btn-block btn-sm btn-success" target="_blank">Create Free Account  
                    <span class="btn-inner--icon"><i data-feather="user"></i></span></a></div>
            </div>
        </div>
    </nav>