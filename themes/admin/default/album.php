<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>R&D </title>


<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="<?=url_tmpl();?>album/assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="<?=url_tmpl();?>album/assets/animate/animate.css" />
<link rel="stylesheet" href="<?=url_tmpl();?>album/assets/animate/set.css" />
<!-- gallery -->
<link rel="stylesheet" href="<?=url_tmpl();?>album/assets/gallery/blueimp-gallery.min.css">
<link rel="stylesheet" href="<?=url_tmpl();?>album/assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a href="<?=base_url();?>"><img src="<?=url_tmpl();?>img/logo_final.png" alt="logo" style="width:60px; margin-top:5px;"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">&nbsp;&nbsp;&nbsp;</a></li>
                 <!--<li ><a href="#about">About</a></li>
                 <li ><a href="#partners">Partners</a></li>
                 <li ><a href="#contact">Contact</a></li>-->
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<div id="works" class="section clearfix grid">  
		<?=$content;?> 
</div>





<!-- works -->
<div   class=" "> 
    
    

     
</div>
<!-- works -->

<!-- Footer Starts -->
<div class="footer text-center spacer">
<!--<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>-->
Copyright 2017 R&D. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#works" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="<?=url_tmpl();?>album/assets/jquery.js"></script>

<!-- wow script -->
<script src="<?=url_tmpl();?>album/assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="<?=url_tmpl();?>album/assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="<?=url_tmpl();?>album/assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="<?=url_tmpl();?>album/assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="<?=url_tmpl();?>album/assets/script.js"></script>

</body>
</html>