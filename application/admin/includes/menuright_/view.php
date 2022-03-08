<!-- BEGIN USER LOGIN DROPDOWN -->
<li class="dropdown user">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
		<!--<img alt="" src="<?=url_tmpl();?>assets/img/avatar1_small.jpg"/>-->
		<span class="username hidden-1024"><?=$fullname;?></span>
		<i class="fa fa-angle-down"></i>
	</a>
	<ul class="dropdown-menu">
		<li>
			<a href="<?=base_url()?>admin.php/profile">
				<i class="fa fa-user"></i> My Profile
			</a>
			<a href="<?=base_url()?>admin.php/authorize/logout">
				<i class="fa fa-key"></i> Logout
			</a>
		</li>
	</ul>
</li>