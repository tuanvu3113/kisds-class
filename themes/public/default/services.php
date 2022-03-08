<!DOCTYPE html>
<html>
        <head>

        <!-- /.website title -->
        <title>Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="<?=url_tmpl();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?=url_tmpl();?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?=url_tmpl();?>fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?=url_tmpl();?>css/animate.css" rel="stylesheet" media="screen">
        <link href="<?=url_tmpl();?>css/owl.theme.css" rel="stylesheet">
        <link href="<?=url_tmpl();?>css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="<?=url_tmpl();?>css/css-app.css" rel="stylesheet" media="screen">
        <link href="<?=url_tmpl();?>css/custom.css" rel="stylesheet">
        <script src="<?=url_tmpl();?>js/jquery.js"></script>
        <script src="<?=url_tmpl();?>js/jquery-ui.js" type="text/javascript"></script>
        <script src="<?=url_tmpl();?>js/jquery.json.js" type="text/javascript"></script>

    </head>

    <body data-spy="scroll" data-target="#navbar-scroll">
        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>
        <!-- NAVIGATION -->
        <div id="menu" class="">
            <nav class = "navbar navbar-default navbar-static-top " role = "navigation">
                <div class = "navbar-header" style="padding-left:4.5%;">
                     <?=$this->load->inc('logo');?>
                </div>
                <div class="col-md-6 mtop20">
                    <?=$this->load->inc('menu');?>
                </div>
                <div class="col-md-2 text-right mtop30 dhonesearch">
                    <div class="homesearch">
                        <div class="inputs"><input placeholder="Search" value="" type="text" /></div>
                        <div class="icons"><i class="fa fa-search"></i>
                        </div>

                    </div>
                </div>
            </nav>
        </div>

        <!-- /.parallax full screen background image -->
        <div id="home" class="fullscreen landing parallax" data-img-width="2000" data-img-height="1325" data-diff="100">

            <div class="overlay">
                <div class="container">
			<?=$content;?>
                </div><!--E container-->
            </div>
        </div>
        <!-- /.footer -->
        <footer id="footer">
            <div class="container">
                <?=$this->load->inc('footer');?>
            </div>
        </footer>

        <!-- /.javascript files -->

        <script src="<?=url_tmpl();?>js/bootstrap.min.js"></script>
        <script src="<?=url_tmpl();?>js/custom.js"></script>
        <script src="<?=url_tmpl();?>js/jquery.sticky.js"></script>
        <script src="<?=url_tmpl();?>js/wow.min.js"></script>
        <script src="<?=url_tmpl();?>js/owl.carousel.min.js"></script>
        <script src="<?=url_tmpl();?>js/ekko-lightbox-min.js"></script>

        <script type="text/javascript">
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) { event.preventDefault(); $(this).ekkoLightbox(); });
        </script>
        <script>
            $('.carousel').carousel({
                interval: 60000 /*6000*/
            })
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
