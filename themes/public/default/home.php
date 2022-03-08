<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo isset($_SESSION["title_SEO"]) ? $_SESSION["title_SEO"] : 'KIDS';?></title>
        <meta name="description" content="KIDS is a clean, modern, and fully responsive Html Template. Take your Startup business website to the next level. It is designed for kindergarten, childcare, homeschooling, school, learning, playground businesses or any type of person or business who wants to showcase their work, services and professional way.">
        <meta name="keywords" content="business, care, childcare, children, clean, corporate, happykids, homeschool, kids, kindergarten, playground, responsive, school, learning">
        <meta name="author" content="rometheme.net">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        CSS VENDOR
        =============================================== -->
        <link rel="stylesheet" type="text/css" href="/css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/vendor/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="/css/vendor/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="/css/vendor/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="/css/vendor/animate.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" type="text/css" href="/css/style.css" />

        <script src="/js/vendor/modernizr.min.js"></script>
        <script src="/js/vendor/jquery.min.js"></script>
        <!-- SENDMAIL -->
        <script src="/js/script.js"></script>
    </head>
    <body>
        <?= $this->load->inc('menu'); ?>
        <?= $content; ?>
        <?= $this->load->inc('footer'); ?>
    </body>
    <footer>
        <!-- LOAD PAGE -->
        <div class="animationload">
            <div class="loader"></div>
        </div>
        <!-- BACK TO TOP SECTION -->
        <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>
        <!-- JS VENDOR -->
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/vendor/owl.carousel.js"></script>
        <script src="/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="/js/vendor/isotope.pkgd.min.js"></script>
        <script src="/js/vendor/imagesloaded.pkgd.min.js"></script>
        <!-- SENDMAIL -->
        <script src="/js/vendor/validator.min.js"></script>
        <script src="/js/vendor/form-scripts.js"></script>
    </footer>
</html>