<div class="header header-1">
        <!-- TOPBAR -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-8 col-md-6">
                        <div class="info">
                            <div class="info-item">
                                <i class="fa fa-phone"></i> +62 7144 3300
                            </div>
                            <div class="info-item">
                                <i class="fa fa-envelope-o"></i> <a href="mailto:support@kids.com" title="">support@kids.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-6">
                        <div class="sosmed-icon pull-right d-inline-flex">
                            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="ig"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="in"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NAVBAR SECTION -->
        <div class="navbar-main">
            <div class="container">
                <nav id="navbar-example" class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="home.html">
                        <img src="/images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <?= $menus; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php if ($url2 == 'home' || $url2 == '') { ?>
<!-- BANNER -->
<div id="oc-fullslider" class="banner">
    <div class="owl-carousel owl-theme full-screen">
        <div class="item">
            <img src="/images/dummy-img-1920x900.jpg" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center">
                <div class="wrap-caption">
                    <h5 class="caption-supheading">Welcome to Kids</h5>
                    <h1 class="caption-heading">Best Kindergarten at California</h1>
                    <a href="#" class="btn btn-secondary">LEARN MORE</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/images/dummy-img-1920x900-2.jpg" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center">
                <div class="wrap-caption">
                    <h5 class="caption-supheading">Welcome to Kids</h5>
                    <h1 class="caption-heading">Best Kindergarten at California</h1>
                    <a href="#" class="btn btn-secondary">LEARN MORE</a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/images/dummy-img-1920x900-3.jpg" alt="Slider">
            <div class="overlay-bg"></div>
            <div class="container d-flex align-items-center">
                <div class="wrap-caption">
                    <h5 class="caption-supheading">Welcome to Kids</h5>
                    <h1 class="caption-heading">Best Kindergarten at California</h1>
                    <a href="#" class="btn btn-secondary">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-nav owl-nav"></div>
</div>
<?php } else { ?>
    <!-- BANNER -->
    <div class="section banner-page" data-background="/images/dummy-img-1920x300.jpg">
        <div class="content-wrap pos-relative">
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <div class="title-page"><?php echo isset($_SESSION["title_SEO"]) ? $_SESSION["title_SEO"] : 'KIDS';?></div>
            </div>
            <div class="d-flex justify-content-center bd-highlight mb-3">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo isset($_SESSION["title_SEO"]) ? $_SESSION["title_SEO"] : 'KIDS';?></li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
<?php } ?>