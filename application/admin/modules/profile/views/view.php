<style title="" type="text/css">
    .row{
        margin-bottom:10px;
    }
    #cke_1_contents{
         height:500px !important;
    }
</style>
<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption" style="margin: 10px 10px 10px 10px">
                <i class="fa fa-reorder"></i>
                <?=getLanguage('all','edit')?>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"></a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="wrap" style="width: 850px;    margin-left: auto;    margin-right: auto;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <label class="control-label col-md-3"><?=getLanguage('profile','current_pass')?> (<span class="red">*</span>)</label>
                            <div class="col-md-9">
                                <input type="password" name="current" id="current" class="searchs form-control" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <label class="control-label col-md-3"><?=getLanguage('profile','new_pass')?> (<span class="red">*</span>)</label>
                            <div class="col-md-9">
                                <input type="password" name="new" id="new" class="searchs form-control" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group"> 
                            <label class="control-label col-md-3"><?=getLanguage('profile','new_pass_confirm')?> (<span class="red">*</span>)</label>
                            <div class="col-md-9">
                                <input type="password" name="new_confirm" id="new_confirm" class="searchs form-control" value="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mtop10">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="mright10" >
                            <input type="hidden" name="id" id="id" value="" />
                            <ul class="button-group pull-right">
                                <li id="save">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                        <?=getLanguage('all','save')?>
                                    </button>
                                </li>
                            </ul>
                        </div>		
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!--<div class="portlet box blue page_content">
    
</div>-->
<!-- END PORTLET-->
<!-- END PORTLET-->
<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?=url_tmpl()?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div> 
<script>
    var controller = '<?=$controller;?>/';
    $(function(){        
        $("#save").click(function(){
            if ($("#current").val()==""){
                    error2("current");
                    $("#current").focus();
                    return false;
            }
            success("current");
            if ($("#new").val()==""){
                    error2("new");
                    $("#new").focus();
                    return false;
            }
            success("new");
            if ($("#new_confirm").val()=="" || $("#new_confirm").val()!=$("#new").val()){
                    error2("new_confirm");
                    $("#new_confirm").focus();
                    return false;
            }
            success("new_confirm");
            var data = new FormData();
            data.append("current",$("#current").val());
            data.append("new",$("#new").val());
            data.append("new_confirm",$("#new_confirm").val());
            $.ajax({
                    url : controller + 'editItem',
                    type: 'POST',
                    async: false,
                    data:data,
                    enctype: 'multipart/form-data',
                    processData: false,  
                    contentType: false,   
                    success:function(datas){
                        var obj = $.evalJSON(datas); 
                        if (obj.status!=1){
                                if (obj.status==0){
                                       error("<?=getLanguage('profile','wrong_pass')?>")
                                }
                        }    
                        else{
                                window.location='/admin.php/authorize/logout';
                        }
                        
                    },
                });
        })
    });
    function error2(object){
            $("#"+object).css("border-color","red");
    }
    function success(object){
            $("#"+object).css("border-color","");
    }
    
//CKEDITOR.instances['description'].getData() //get value of CK_Editor
</script>

