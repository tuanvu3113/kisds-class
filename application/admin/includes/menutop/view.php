<nav class="navbar navbar-static-top">
	<!-- Sidebar toggle button-->
	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
	</a>

	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<li class="">
				<a href="<?=base_url()?>admin.php/profile">
					<i class="fa fa-user"></i> <?= getLanguage('all', 'my-profile') ?>
				</a>
			</li>
			<li class="dropdown user user-menu notifications-menu">
				<a href="<?=base_url();?>admin.php/authorize/logout">
					<i class="fa fa-sign-out text-blue"></i> <?= getLanguage('all', 'log-out') ?>
				</a>
			</li>
		</ul>
	</div>
</nav>