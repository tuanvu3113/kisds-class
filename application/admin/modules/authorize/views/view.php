
<h3 class="form-title" style="color:#1e9b31 !important;">Login</h3>
<div class="alert alert-danger display-hide">
    <button class="close" data-close="alert"></button>
    <span id="error" class="red">
        Enter username and password
    </span>
</div>
        <?php if (isset($message) && !empty($message)) { ?>
<div class="alert alert-danger display-hide" style="display: block;">
    <button class="close" data-close="alert"></button>
    <span id="message">
                     <?=$message?>
    </span>
</div>
        <?php } ?>
<div class="form-group" >
    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
    <label class="control-label visible-ie8 visible-ie9">Username</label>
    <div class="input-icon">
        <i class="fa fa-user"></i>
        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" id="username" name="username" value="<?=$username;?>"/>
    </div>
</div>
<div class="form-group" style="margin-top:10px;">
    <label class="control-label visible-ie8 visible-ie9">Password</label>
    <div class="input-icon">
        <i class="fa fa-lock"></i>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" id="password" name="password" onkeypress="keypressed(event);" value="<?=$password;?>"/>
    </div>
</div>
<div class="form-group" style="margin-top:10px;">
    <div class="col-md-6" style="padding-left:0px;">
        <div class="input-icon">
            <i class="fa fa-qrcode"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Captcha" id="verification" name="verification" onkeypress="keypressed(event);"/>
        </div>
    </div>
    <div class="col-md-4">
        <img  title="Refresh"  src="<?=admin_url()?>authorize/captcha/543534.html" id="icaptcha">
    </div>
    <div class="col-md-2" style="text-align:right;">
        <img id="reload" title="Create another code" style="cursor:pointer; margin-left:5px; margin-top:5px;" align="absmiddle" src="<?=url_tmpl();?>images/reload.png" />
    </div>
</div>
<div class="form-group" >
    <div class="col-md-12" style="margin-top:0px; padding-left:0px;  padding-right:0px; ">
        <label class="checkbox" style="margin-left:-5px;">
            <input <?php if(!empty($username)){?> checked <?php }?> type="checkbox" id="remember" name="remember" value="1" /> Remember me </label>
        <button id="login" type="submit" class="btn green pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
        </button>
        <input id="token" value="<?=$token;?>" type="hidden" />
    </div>
</div>
<!-- END PORTLET-->
<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 33%;left:35%;text-align: center;">
        <img src="<?=url_tmpl()?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<div style="color:#999; font-site:12px; margin-top:10px;clear: both; padding-bottom: 15px;"></div>
<script type="text/javascript">
    var controller = '<?=$controller;?>/';
    $(function(){
        $("#reload").click(function(){
            var id = randomNumberFromRange(100,1000);
            $("#icaptcha").attr("src",controller+"/captcha/"+id+".html");
        });
        $("#login").click(function(){
            login();
        });
    });
    function randomNumberFromRange(min,max){
        return Math.floor(Math.random()*(max-min+1)+min);
    }
    function keypressed(event){
        if(event.keyCode=='13'){
            login();
        }
    }
    function login(){
        $(".loading").show();
        var password = $("#password").val();
        var username = $("#username").val();
        var verification = $("#verification").val();
        var remember = $('#remember').is(':checked');
        if(remember){
            remember = 1;
        }
        else{
            remember = 0;
        }
        if(username == ''){
            error("Username does not empty.");
            $(".loading").hide(); return false;
        }
        if(password == ''){
            error("Password does not empty.");
            $(".loading").hide(); return false;
        }
        if(verification == ''){
            error("Captcha does not empty.");
            $(".loading").hide(); return false;
        }
        var token = $("#token").val();
        $.ajax({
            url : controller + 'login',
            type: 'POST',
            async: false,
            data: {csrf_stock_name:token,password:password , username:username,
                remember:remember,captcha:verification},
            success:function(datas){
                var obj = $.evalJSON(datas);
                $("#token").val(obj.token);
                if(obj.status == 1){
                    window.location = "<?=admin_url()?>home_image.html";
                    $(".loading").hide();
                }
                else{
                    var id = randomNumberFromRange(100,1000);
                    $("#icaptcha").attr("src","<?=admin_url()?>authorize/captcha/"+id+".html");
                    error("Username or password invalid.");
                    $(".loading").hide();
                }
            },
            error : function(){
                var id = randomNumberFromRange(100,1000);
                $("#icaptcha").attr("src","<?=admin_url()?>authorize/captcha/"+id+".html");
            }
        });
    }
</script>