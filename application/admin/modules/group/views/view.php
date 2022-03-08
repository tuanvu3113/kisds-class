<style title="" type="text/css">
    table col.c1 { width: 45px; }
    table col.c2 { width: 60px; }
    table col.c3 { width: 250px; }
    table col.c4 { width: 100px; }
    table col.c5 { width: 100px; }
    table col.c6 {width: auto;}
    .caption {
        margin: 10px 10px 10px 10px;
    }
</style>
<!-- BEGIN PORTLET-->
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-search" style="margin-top:2px;"></i>
            <?=getLanguage('all','search');?>
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
                    <label class="control-label col-md-4"><?=getLanguage('group','group_name');?></label>
                    <div class="col-md-8">
                        <input type="text" name="groupname" id="groupname" class="searchs form-control" required />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="control-label col-md-4"><?=getLanguage('group','group_type');?></label>
                    <div class="col-md-8">
                        <select name="grouptype combo" id="grouptype">
                            <option value=""></option>
                            <option value="1">Root</option>
                            <option value="2">Admin</option>
                            <option value="3">Manager</option>
                            <option value="4">User</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mtop10">
            <div class="col-md-12" style="margin: 10px 10px 10px 1px">
                <div class="mright10" >
                    <input type="hidden" name="id" id="id" />
                    <input style="width:300px;" type="hidden" id="token" name="<?=$csrfName;?>" value="<?=$csrfHash;?>" />
                    <ul class="button-group pull-right">
                        <li id="search">
                            <button class="button">
                                <i class="fa fa-search"></i>
									<?=getLanguage('all','search');?>
                            </button>
                        </li>
                        <li id="refresh" >
                            <button class="button">
                                <i class="fa fa-refresh"></i>
									<?=getLanguage('all','refresh');?>
                            </button>
                        </li>
							<?php if(isset($permission['add'])){?>
                        <li id="save"><button class="button">
                                <i class="fa fa-plus"></i>
								<?=getLanguage('all','add');?>
                            </button>
                        </li>
							<?php }?>
							<?php if(isset($permission['edit'])){?>
                        <li id="edit">
                            <button class="button">
                                <i class="fa fa-save"></i>
									<?=getLanguage('all','edit');?>
                            </button>
                        </li>
							<?php }?>
							<?php if(isset($permission['delete'])){?>
                        <li id="delete">
                            <button type="button" class="button">
                                <i class="fa fa-times"></i>
									<?=getLanguage('all','delete');?>
                            </button>
                        </li>
							<?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i><?=getLanguage('all','tim-thay');?> <span class='viewtotal'>0</span> <?=getLanguage('all','ket-qua');?></i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="portlet-body">
            <div id="gridview" >
                <table class="resultset" id="grid"></table>
                <!--header-->
                <div id="cHeader">
                    <div id="tHeader">
                        <table width="100%" cellspacing="0" border="1" >
							<?php for($i=1; $i< 5; $i++){?>
                            <col class="c<?=$i;?>">
							<?php }?>
                            <tr>
                                <th><input type="checkbox" id="checkAll" autocomplete="off" /></th>
                                <th><?=getLanguage('all','stt');?></th>
                                <th><?=getLanguage('group','group_name');?></th>
                                <th><?=getLanguage('group','right');?></th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--end header-->
                <!--body-->
                <div id="data">
                    <div id="gridView">
                        <table id="group"  width="100%" cellspacing="0" border="1">
							<?php for($i=1; $i< 5; $i++){?>
                            <col class="c<?=$i;?>">
							<?php }?>
                            <tbody id="grid-rows"></tbody>
                        </table>
                    </div>
                </div>
                <!--end body-->
            </div>
        </div>
        <div class="portlet-body">
            <div class="fleft" id="paging"></div>
        </div>
    </div>
</div>
<!-- END PORTLET-->
<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?=url_tmpl()?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<!-- ui-dialog -->
<div id="dialog" title="<?=getLanguage('group','right');?>"></div>
<script>
    var controller = '<?=$controller;?>/';
    var csrfHash = '<?=$csrfHash;?>';
    var table;
    var cpage = 1;
    var search;
    var routes = '<?=$routes;?>';
    $(function(){
        $("#grouptype").multipleSelect({
            filter: true,
            placeholder:'<?=getLanguage('all','vui-long-chon')?>',
            single: true
        });
        refresh();
        $("#search").click(function(){
            $(".loading").show();
            searchList();
        });
        $("#refresh").click(function(){
            $(".loading").show();
            refresh();
        });
        $("#save").click(function(){
            search = getSearch();
            var obj = $.evalJSON(search);
            if(obj.groupname == ""){
                error("<?=getLanguage('group','group-empty')?>");
                $("#groupname").focus();
                return false;
            }
            var token = $("#token").val();
            $.ajax({
                url : controller + 'save',
                type: 'POST',
                async: false,
                data: {csrf_stock_name:token,search:search , id:""},
                success:function(datas){
                    var obj = $.evalJSON(datas);
                    $("#token").val(obj.csrfHash);
                    if(obj.status == 0){
                        error("<?=getLanguage('all','add_failed')?>"); return false;
                    }
                    else if(obj.status == -1){
                        error("<?=getLanguage('all','group-exists')?>"); return false;
                    }
                    else{
                        refresh();
                    }
                },
                error : function(){

                }
            });
        });
        $("#edit").click(function(){
            search = getSearch();
            var obj = $.evalJSON(search);
            if(obj.groupname == ""){
                error("<?=getLanguage('group','group-empty')?>");
                $("#groupname").focus();
                return false;
            }
            var token = $("#token").val();
            var id = $("#id").val();
            $.ajax({
                url : controller + 'edit',
                type: 'POST',
                async: false,
                data: {csrf_stock_name:token,search:search , id:id},
                success:function(datas){
                    var obj = $.evalJSON(datas);
                    $("#token").val(obj.csrfHash);
                    if(obj.status == 0){
                        error("<?=getLanguage('all','edit-fail')?>"); return false;
                    }
                    else if(obj.status == -1){
                        error("<?=getLanguage('group','group-exists')?>"); return false;
                    }
                    else{
                        refresh();
                    }
                },
                error : function(){

                }
            });
        });
        $("#delete").click(function(){
            var id = getCheckedId();
            if(id == ''){ return false;}
            $.msgBox({
                title: "Message",
                type: "error",
                content:"<?=getLanguage('group','delete-group')?>",
                buttons: [{value: 'OK'},{ value: 'Cancel'}],
                success: function(result) {
                    if (result == 'OK') {
                        var token = $("#token").val();
                        $.ajax({
                            url : controller + 'deletes',
                            type: 'POST',
                            async: false,
                            data: {csrf_stock_name:token,id:id},
                            success:function(datas){
                                var obj = $.evalJSON(datas);
                                $("#token").val(obj.csrfHash);
                                if(obj.status == 0){
                                    error("<?=getLanguage('all','delete-faile')?>"); return false;
                                }
                                else{
                                    refresh();
                                }

                            },
                            error : function(){

                            }
                        });
                    }
                }
            });
        });
        $( "#dialog" ).dialog({
            autoOpen: false,
            width: 400,
            height:460,
            modal:false
        });
    });
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
    function funcList(obj){
        $(".edit").each(function(e){
            $(this).click(function(){
                var groupname = $(".groupname").eq(e).html().trim();
                var grouptype = $(this).attr('grouptype');
                var id = $(this).attr('id');
                $("#id").val(id);
                $("#groupname").val(groupname);
                $("#grouptype").multipleSelect('setSelects', grouptype.split(','));
            });
            function getIDChecked(){
                return 1;
            }
        });
        $(".permission").each(function(e){
            $(this).click(function(event){
                $( "#dialog" ).dialog( "open" );
                event.preventDefault();
                var id = $(this).attr('id');
                var token = $("#token").val();
                $.ajax({
                    url : controller + 'getRight',
                    type: 'POST',
                    async: false,
                    data: {csrf_stock_name:token, id:id},
                    success:function(datas){
                        var obj = $.evalJSON(datas);
                        $("#token").val(obj.csrfHash);
                        $('#dialog').html(obj.content);
                        $("#saveright").click(function(){
                            var right = getRight();
                            token = $("#token").val();
                            $.ajax({
                                url : controller + 'setRight',
                                type: 'POST',
                                async: false,
                                data: {csrf_stock_name:token, id:id, right:right},
                                success:function(datas){
                                    var obj2 = $.evalJSON(datas);
                                    $("#token").val(obj2.csrfHash);
                                }
                            });
                            $("#dialog").dialog( "close" );
                        });
                    },
                    error : function(){

                    }
                });
                return false;
            });
        });
    }
    function refresh(){
        $(".loading").show();
        $(".searchs").val("");
        $('#grouptype,#schoolid').multipleSelect('uncheckAll');
        csrfHash = $('#token').val();
        search = getSearch();
        getList(cpage,csrfHash);
    }
    function searchList(){
        search = getSearch();
        csrfHash = $('#token').val();
        getList(cpage,csrfHash);
    }
    function getSearch(){
        var grouptype = getCombo('grouptype');
        //var schoolid = getCombo('schoolid');
        var obj = '';
        $('.searchs').each(function(i){
            var id = $(this).attr('id');
            var val = $(this).val();
            obj +=',"'+id+'":"'+val+'"';
        });
        return '{"grouptype":"'+grouptype+'"'+obj+'}';
    }
</script>
<script src="<?=url_tmpl();?>js/right.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
