<style title="" type="text/css">
    table col.c1 { width: 45px; }
    table col.c2 { width: 60px; }
    table col.c3 { width: 180px; }
    table col.c4 { width: 180px; }
    table col.c5 { width: 150px; }
    table col.c6 { width: 150px; }
    table col.c7 { width: 250px; }
    table col.c8 {width: auto; }
    .caption {
        margin: 10px 10px 10px 10px;
    }
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
                        <label class="control-label col-md-5"><?=getLanguage('all','search')?> (<span class="red">*</span>)</label>
                        <div class="col-md-7">
                            <input type="text" name="search_content" id="search_content" class="searchs form-control" />
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
                            <li id="add">
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
<div id="add_box" class="dialog" title="<?=getLanguage('all','add')?>">
    <form method="post" enctype="multipart/form-data">
        <div class="portlet box blue">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4"><?=getLanguage('all','name')?> (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name_add" name="name_add"/>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4"><?=getLanguage('all','link')?> (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="link_add" name="link_add"/>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4">Parent (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <select name="parent_add" id="parent_add " class="select-box">
                                        <option value="0"></option>
                                        <?php for ($i=0;$i<count($list);$i++){
                                            if ($list[$i]->menu_parent==0 || $list[$i]->menu_link==""){
                                            ?>
                                        <option value="<?php echo $list[$i]->id;?>"><?php echo $list[$i]->menu_name;?></option>
                                        <?php }
                                        }?>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mtop10">
        <div class="col-md-12" style="margin: 10px 10px 10px 1px">
            <div class="mright10" >
                <ul class="button-group pull-right">
                    <li id="add_item">
                        <button type="button" class="button">
                            <i class="fa fa-save"></i>
                            <?=getLanguage('all','save')?>
                        </button>
                    </li>

                    <li id="huy1">
                        <button type="button" class="button">
                            <i class="fa fa-close"></i>
                            <?=getLanguage('all','cancel')?>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="edit_box" class="dialog" title="<?=getLanguage('all','edit')?>">
    <form method="post" enctype="multipart/form-data">
        <div class="portlet box blue">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4"><?=getLanguage('all','name')?> (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="name_edit" name="name_edit"/>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4"><?=getLanguage('all','link')?> (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="link_edit" name="link_edit"/>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                        <div class="form-group">
                                <label class="control-label col-md-4">Parent (<span class="red">*</span>)</label>
                                <div class="col-md-8">
                                    <select name="parent_edit" id="parent_edit" class="select-box">
                                        <option value="0"></option>
                                        <?php for ($i=0;$i<count($list);$i++){
                                            if ($list[$i]->menu_parent==0 || $list[$i]->menu_link==""){
                                            ?>
                                        <option value="<?php echo $list[$i]->id;?>"><?php echo $list[$i]->menu_name;?></option>
                                        <?php }
                                        }?>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row mtop10">
        <div class="col-md-12" style="margin: 10px 10px 10px 1px">
            <div class="mright10" >
                <ul class="button-group pull-right">
                    <li id="edit_item">
                        <button type="button" class="button">
                            <i class="fa fa-save"></i>
                            <?=getLanguage('all','save')?>
                        </button>
                    </li>

                    <li id="huy">
                        <button type="button" class="button">
                            <i class="fa fa-close"></i>
                            <?=getLanguage('all','cancel')?>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
    $(function() {
        $( ".dialog" ).dialog({
            autoOpen: false,
            width: 500,
            height:260,
            modal:false
        });
        refresh();
        $("#refresh").click(function(){
            refresh();
        })

        $("#search").click(function(){
            search = getSearch();
            getData();
        })

        $("#huy").click(function(){
            $('#edit_box').dialog('close');
        })

        $("#huy1").click(function(){
            $('#add_box').dialog('close');
        })

        $("#add").click(function(){
            $("#add_box").dialog("open");
        })
        $("#add_item").click(function(){
            add();
        })
        $("#edit").click(function(){
            idEdit  =   getCheckedId();
            if (idEdit==""){
                error("<?=getLanguage('all','error_select_empty')?>");
                return false;
            }
            if (idEdit.indexOf(",")!=-1){
                idEdit = idEdit.substr(0,idEdit.indexOf(","));
            }
            $("#name_edit").val($(".item_"+idEdit).find(".name").text());
            $("#link_edit").val($(".item_"+idEdit).find(".link").text());
            $("#parent_edit").val($(".item_"+idEdit).find(".parent").val());
            $("#id").val(idEdit);
            $("#edit_box").dialog("open");
        })
        $("#edit_item").click(function(){
            edit();
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
    function add(){
        if ($("#name_add").val().trim()==""){
                error2("name_add");
                $("#name_add").focus();
                return false;
        }
        $.ajax({
            url:controller+'addItem',
            async: false,
            type: 'POST',
            data:{name_add:$("#name_add").val(),link_add:$("#link_add").val(),parent_add:$("#parent_add").val()},
            success:function(datas) {
                   var obj = $.evalJSON(datas);
                   if (obj.status!=1){
                        error("<?=getLanguage('all','error_unknow')?>")
                   }
                   else{
                        search = getSearch();
                        getData();
                        $("#add_box").dialog("close");
                   }
            },
            error:function(){
                    error("<?=getLanguage('all','error_unknow')?>")
                    $('.loading').hide();
            }
        });
    }
    function edit(){
        if ($("#name_edit").val().trim()==""){
            error2("name_edit");
            $("#name_edit").focus();
            return false;
        }

        $.ajax({
            url:controller+'editItem',
            async: false,
            type: 'POST',
            data:{id:$("#id").val(),name_edit:$("#name_edit").val(),link_edit:$("#link_edit").val(),parent_edit:$("#parent_edit").val()},
            success:function(datas) {
                   var obj = $.evalJSON(datas);
                   if (obj.status!=1){
                        error("<?=getLanguage('all','error_unknow')?>")
                   }
                   else{
                        search = getSearch();
                        getData();
                        $("#edit_box").dialog("close");
                   }
            },
            error:function(){
                    error("<?=getLanguage('all','error_unknow')?>")
                    $('.loading').hide();
            }
        });
    }
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
        var strId = '';
        $('#gridview').find('input:checked').each(function(){
            var id = $(this).attr('id');
            if(id != 'checkAll'){
                strId += ',' + $(this).attr('id') ;
            }
        })
        return strId.substring(1);
    }
    function searchList(){
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0,csrfHash);
    }
    function getSearch() {
       var str = '';
       $('input.searchs').each(function(){
           str += ',"'+ $(this).attr('id') +'":"'+ $(this).val().trim() +'"';
       })
       $('select.combos').each(function(){
           str += ',"'+ $(this).attr('id') +'":"'+ getCombo($(this).attr('id')) +'"';
       })
       return '{'+ str.substr(1) +'}';
   }
    function error2(object){
        $("#"+object).css("border-color","red");
    }
    function success(object){
        $("#"+object).css("border-color","");
    }
</script>

