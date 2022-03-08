<style title="" type="text/css">
    .row{
        margin-bottom:10px;
    }
    .dialog{
        overflow:visible !important;
    }
    .dialog > form{
          width:800px;
          height:300px;
          padding-right: 10px;
          overflow: auto;
    }
    
</style>
<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption" style="margin: 10px 10px 10px 10px">
                <i class="fa fa-reorder"></i>
                <?=getLanguage('all','search')?>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5"><?=getLanguage('all','name')?></label>
                        <div class="col-md-7">
                            <input type="text" name="image_name" id="image_name" class="searchs form-control" />
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" id="token" name="<?=$csrfName;?>" value="<?=$csrfHash;?>" />
                        <ul class="button-group pull-right">
                            <li id="search">
                                <button type="button" class="button">
                                    <i class="fa fa-search"></i>
		                              <?=getLanguage('all','search')?>
                                </button>
                            </li>
                            <li id="refresh">
                                <button type="button" class="button">
                                    <i class="fa fa-refresh"></i>
                                    <?=getLanguage('all','refresh')?>
                                </button>
                            </li>
                            <?php if(isset($permission['add'])){?>
                            <li id="save">
                                <button type="button" class="button">
                                    <i class="fa fa-plus"></i>
                                    <?=getLanguage('all','add')?>
                                </button>
                            </li>
                        <?php }?>
		
                        <?php if(isset($permission['delete'])){?>
                            <li id="delete">
                                <button type="button" class="button">
                                    <i class="fa fa-times"></i>
                                    <?=getLanguage('all','delete')?>
                                </button>
                            </li>
                        <?php }?>
                        </ul>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</form>
<div class="portlet box blue page_content">
    
</div>
<div id="add_box" class="dialog" title="<?=getLanguage('all','add')?>">
        <form method="post" enctype="multipart/form-data">
            <div class="portlet box blue">        
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"> 
                                
                                <div class="row">
                                    <label class="control-label col-md-2"><?=getLanguage('all','name')?> (<span class="red">*</span>)</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="name_add" name="name_add"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="control-label col-md-2"><?=getLanguage('all','images')?> (<span class="red">*</span>)</label>
                                    <div class="col-md-5">
                                        <input type="file" name="images_add" id="images_add" class="searchs form-control" />
                                    </div>
                                    <div class="col-md-5">
                                        <div name="images_add_preview" id="images_add_preview">  </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>  
    <div class="row mtop10">
        <div class="col-md-12">
            <div class="mright10" >
                <input type="hidden" name="id" id="id" />
                <input type="hidden" id="token" name="<?=$csrfName;?>" value="<?=$csrfHash;?>" />
                <ul class="button-group pull-right">
                    <li id="add_item">
                        <button type="button" class="button">
                            <i class="fa fa-plus"></i>
                            <?=getLanguage('all','add')?>
                        </button>
                    </li>
                </ul>
            </div>		
        </div>
    </div>
        
</div>
<div class="dialog" id="image_preview">
    
</div>

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
    var csrfHash = '<?=$csrfHash;?>';
    var cpage = 1;
    var search;
    $(function(){
        
        $( ".dialog" ).dialog({
            autoOpen: false,
            width: 850,
            height:350,
            modal:false
        });
        $("#images_add").change(function(){            
                $("#images_add_preview").html("<img src='<?=base_url();?>images/mini_loading.gif'/>");
                var data = new FormData();
                var filesData = document.getElementById('images_add').files;
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
                       $("#images_add_preview").html("<img src='<?=base_url();?>images/general/tmp/"+obj.filename+"' width=100%;height:100% />");
                    },
                    error : function(){

                    }
                });
        })
        $("#add_item").click(function(){
            if ($("#name_add").val().trim()==""){
                    errorInput("name_add");
                    $("#name_add").focus();
                    return false;
            }
            var data = new FormData();
            var filesData = document.getElementById('images_add').files;
            data.append("name",$("#name_add").val().trim());
            data.append('images', filesData[0]);
            $.ajax({
                    url : controller + 'addItem',
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
                                       error("<?=getLanguage('all','permision_denied')?>")
                                }
                        }    
                        else{
                                refresh();
                        }
                        
                    },
                });
        })
        refresh();
        $("#refresh").click(function(){
            refresh();
        })
        
        $("#search").click(function(){
            search = getSearch();
            getData();
        })
        
        $("#save").click(function(){
            $("#name_add").val("");
            $("#images_add_preview").html("");
                $( "#add_box" ).dialog( "open" );
        })
        $("#delete").click(function(){
                delList =   getCheckedImages();
                if (delList!=""){
                    $.msgBox({
                        title: 'Message',
                        type: 'error',
                        content:'<?=getLanguage('all','delete_confirm')?>',
                        buttons: [{value: 'OK'},{ value: 'Cancel'}],
                        success: function(result) { 
                            if (result == 'OK') {
                                var id = getCheckedId();
                                var token = $('#token').val();
                                    $.ajax({
                                            url:controller+'delete',
                                            async: false,
                                            type: 'POST',
                                            data:{list:delList},
                                            success:function(datas) {
                                                   var obj = $.evalJSON(datas); 
                                                   if (obj.status!=1){
                                                        error("<?=getLanguage('all','error_unknow')?>")
                                                   }
                                                   else{
                                                        search = getSearch();
                                                        getData();
                                                   }
                                            },
                                            error:function(){
                                                    error("<?=getLanguage('all','error_unknow')?>")
                                                    $('.loading').hide();
                                            }
                                    });
                                }
                            }
                    });                        
                }
                else{
                    error("<?=getLanguage('all','error_select_empty')?>")
                }
        })
    });
    
    function refresh(){
        $('.searchs').val('');
        $('#show').html('');
        search = getSearch();//alert(cpage);
        getData();
    }
    function getData(){
            $('.loading').show();
            $.ajax({
                    url:controller+'getList',
                    async: false,
                    type: 'POST',
                    data:{page:cpage,search:search},
                    success:function(datas) {
                           var obj = $.evalJSON(datas);  
                           cpage    =   obj.cPage;
                           $('.page_content').html(obj.content); 
                           $("#paging").html(obj.paging);         
                           $(".viewtotal").text(obj.viewtotal);
                           $('.loading').hide();
                           initFunction();
                    },
                    error:function(){
                        alert("<?=getLanguage('all','error_unknow')?>")
                        $('.loading').hide();
                    }
            });
    }
    function getCheckedImages(){
        var del_list = '';
        $.each($(".images").find("input[type=checkbox]"),function(){
            if ($(this).attr("checked")=="checked"){
                if (del_list=="")
                    del_list=del_list+$(this).val();
                else
                    del_list=del_list+","+$(this).val();
            }
        })
        return del_list;
    }
    function searchList(){
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0,csrfHash);	
    }
//    function getSearch(){
//        var str = '';
//        $('input.searchs').each(function(){
//            str += ',"'+ $(this).attr('id') +'":"'+ $(this).val().trim() +'"';
//        })
//        $('select.combos').each(function(){
//            str += ',"'+ $(this).attr('id') +'":"'+ getCombo($(this).attr('id')) +'"';
//        })
//        return '{'+ str.substr(1) +'}';
//    }
</script>

<script src="<?=url_tmpl();?>ckeditor/ckeditor.js" type="text/javascript"></script>
