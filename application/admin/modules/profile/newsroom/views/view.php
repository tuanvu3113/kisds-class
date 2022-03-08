<style title="" type="text/css">
    table col.c1 { width: 45px; }
    table col.c2 { width: 60px; }
    table col.c3 { width: 180px; }
    table col.c4 { width: 180px; }
    table col.c5 { width: 150px; }
    table col.c6 { width: 150px; }
    table col.c7 { width: 250px; }
    table col.c8 {width: auto; }
</style>
<!-- BEGIN PORTLET-->
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
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
                        <label class="control-label col-md-5"><?=getLanguage('all','title')?> (<span class="red">*</span>)</label>
                        <div class="col-md-7">
                            <input type="text" name="title" id="title" class="searchs form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12">
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
		<?php if(isset($permission['edit'])){?>
                            <li id="edit">
                                <button type="button" class="button">
                                    <i class="fa fa-save"></i>
		<?=getLanguage('all','edit')?>
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
    var csrfHash = '<?=$csrfHash;?>';
    var cpage = 1;
    var search;
    $(function(){
        refresh();
        $("#refresh").click(function(){
            refresh();
        })
        
        $("#search").click(function(){
            search = getSearch();
            getData();
        })
        $("#edit").click(function(){
            id =   getCheckedId();
            if (id.indexOf(",")!=-1 || id.length==0) {
                error("<?=getLanguage('all','error_select_empty')?>");
                return false;
            }
//            $.each($(".content"),function(){
//                if ($(this).attr("id")==delList){
//                    product_name    =   $(this).find(".product_alias").text().trim().toLowerCase();   
//                }
//            })
            window.location="<?=$controller;?>/edit/"+id;
        })
        $("#save").click(function(){
                window.location="<?=$controller;?>/add";
        })
        $("#delete").click(function(){
                delList =   getCheckedId();
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
    function getCheckedId(){
        var del_list = '';
        $.each($(".content").find("input[type=checkbox]"),function(){
            if ($(this).attr("checked")=="checked"){
                if (del_list=="")
                    del_list=del_list+$(this).attr("id");
                else
                    del_list=del_list+","+$(this).attr("id");
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

