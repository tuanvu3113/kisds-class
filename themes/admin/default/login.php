<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - LH WORK </title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!--link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/-->
<link rel='shortcut icon' type='image/ico' href='<?= url_tmpl() ?>favicon.ico' />
<link href="<?=url_tmpl();?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?=url_tmpl();?>bootstrap/css/bootstrap.min.css">
<link href="<?=url_tmpl();?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>assets/plugins/select2/select2.css" />
<link rel="stylesheet" type="text/css" href="<?=url_tmpl();?>assets/plugins/select2/select2-metronic.css" />
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?=url_tmpl();?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?=url_tmpl();?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?=url_tmpl();?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?=url_tmpl();?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?=url_tmpl();?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?=url_tmpl();?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="<?=url_tmpl();?>msgbox/Styles/msgBoxLight.css" rel="stylesheet" type="text/css"/>
 <link href="<?=url_tmpl();?>toast/toastr.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<script type="text/javascript">
	var urlImg = '<?=url_tmpl()?>msgbox/Images/';
</script>
<script src="<?=url_tmpl();?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>js/jquery.json.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>msgbox/Scripts/jquery.msgBox.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>toast/toastr.js"></script>
<script src="<?=url_tmpl();?>js/main.js" type="text/javascript"></script>
	<style type="text/css">
		.bg {
			background-image: <?=url_tmpl();?>assets/css/pages/bg.jpg !important;
		}
	</style>
</head>
<body class="login">
	<div class="content bg">
		<?=$content;?>
	</div>
<script src="<?=url_tmpl();?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=url_tmpl();?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=url_tmpl();?>assets/plugins/select2/select2.min.js" ></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=url_tmpl();?>assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
</html>
<style>
/*(điện thoại di động, hiển thị chiều dọc)*/
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
.login .content {margin-top: 35%;}
}
</style>