<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
	<div class="pull-left image">
	  <?php if(file_exists('files/user/'.$login->image) && !empty($login->image)){?>
		<img src="<?=base_url();?>files/user/<?=$login->image;?>" class="img-circle" alt="User Image">
	  <?php }else{?>
		 <img src="<?=base_url();?>files/user/user_img.jpg" class="img-circle" alt="User Image">
	  <?php }?>
	</div>
	<div class="pull-left info">
	  <p style ="padding-top:12px"><?=$login->fullname;?></p>
	  <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
	</div>
  </div>
  <!-- <div style="margin-top: 10px" style="display: none;">
    <ul>
      <a class="alang" href="<?=admin_url()?>home/setLanguage?lang=vn&url=<?=$url;?>">
        <img alt="" src="<?=url_tmpl();?>img/viet.png"/>
      </a>
      <a class="alang" href="<?=admin_url()?>home/setLanguage?lang=us&url=<?=$url;?>">
        <img alt="" src="<?=url_tmpl();?>img/eng.png"/>
      </a>
    </ul>
  </div> -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
	  <?=$menus;?>
  </ul>
</section>
<style type="text/css">

</style>
<style type="text/css">
        .custom-combobox {
            position: relative;
            display: inline-block;
        }
        .custom-combobox-toggle {
            position: absolute;
            top: 0;
            bottom: 0;
            margin-left: -1px;
            padding: 0;
            /* support: IE7 */
            *height: 1.7em;
            *top: 0.1em;
        }
        .custom-combobox-input {
            margin: 0;
            padding: 0.3em;
        }
        .user-panel > .image > img {
            height: 35px !important;
            width: 35px !important;
        }
</style>
