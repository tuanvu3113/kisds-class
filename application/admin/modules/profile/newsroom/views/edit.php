<style title="" type="text/css">
    .row{
        margin-bottom:10px;
    }
</style>
<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>
	<?=getLanguage('all','edit')?>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">     
                        <table>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: 0px;width:40%;">
                                        <div class="row">
                                            <label class="control-label col-md-3"><?=getLanguage('all','images')?> (<span class="red">*</span>)</label>
                                            <div class="col-md-9">
                                                <input type="file" name="images" id="images" class="searchs form-control" />
                                            </div>
                                            <div class="col-md-12">
                                                <div name="images_preview" id="images_preview"><img src="<?=base_url();?>images/news/<?=$detail->news_image;?>" width="100%" height="100%"/> </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <label class="control-label col-md-2"><?=getLanguage('all','priority')?> (<span class="red">*</span>)</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="priority" name="priority" value="<?=$detail->news_priority;?>"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-md-2"><?=getLanguage('all','title')?> (<span class="red">*</span>)</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" id="title" name="title" value="<?=$detail->news_title;?>"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-md-2"><?=getLanguage('all','summary')?> (<span class="red">*</span>)</label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" id="summary" name="summary"><?=$detail->news_summary;?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-md-2"><?=getLanguage('all','content')?> (<span class="red">*</span>)</label>
                                            <div class="col-md-10">
                                                <textarea class="ckeditor form-control" id="content" name="content"><?php echo stripslashes($detail->news_content);?></textarea>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" value="<?=$detail->id;?>" />
                        <ul class="button-group pull-right">
                            <li id="back">
                                <button type="button" class="button" onclick="window.location='<?=$controller;?>'">
                                    <i class="fa fa-backward"></i>
		<?=getLanguage('all','back')?>
                                </button>
                            </li>
                            <li id="save">
                                <button type="button" class="button">
                                    <i class="fa fa-save"></i>
		<?=getLanguage('all','edit')?>
                                </button>
                            </li>
                        </ul>
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
        $("#images").change(function(){            
                $("#images_preview").html("<img src='<?=base_url();?>images/mini_loading.gif'/>");
                var data = new FormData();
                var filesData = document.getElementById('images').files;
                data.append('file', filesData[0]);
                $.ajax({
                    url : controller + 'uploadFile',
                    type: 'POST',
                    async: false,
                    data:data,
                    enctype: 'multipart/form-data',
                    processData: false,  
                    contentType: false,   
                    success:function(datas){
                    var obj = $.evalJSON(datas); 
                       $("#images_preview").html("<img src='<?=base_url();?>images/news/tmp/"+obj.filename+"' width=100%;height:100% />");
                    },
                    error : function(){

                    }
                });
        })
        $("#save").click(function(){
            if ($("#title").val().trim()==""){
                    error2("title");
                    $("#title").focus();
            }
            var data = new FormData();
            var filesData = document.getElementById('images').files;
            data.append("id",$("#id").val());
            data.append("priority",$("#priority").val().trim());
            data.append("title",$("#title").val().trim());
            data.append("summary",CKEDITOR.instances['summary'].getData());
            data.append("content",CKEDITOR.instances['content'].getData());
            data.append('images', filesData[0]);
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
//                                if (obj.status==2){
//                                       error("<?=getLanguage('products','product_exist')?>")
//                                }
                                if (obj.status==0){
                                       error("<?=getLanguage('all','permision_denied')?>")
                                }
                        }    
                        else{
                                window.location="<?=$controller;?>";
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
<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>

