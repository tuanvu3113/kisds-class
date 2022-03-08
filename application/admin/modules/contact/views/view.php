<style title="" type="text/css">
    .modal-header {
        background-color: #0080c9; padding-top: 9px; padding-bottom: 9px;
    }
    .modal-header .modal-title {
        color: #fff;
    }
    .btn {
        border-width: 0;
        padding: 7px 14px;
        font-size: 16px;
        outline: none !important;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        border-radius: 0 !important;
        text-shadow: none;
        padding: 5px 20px 5px 20px !important;
    }
    /*SHOW DESKTOP*/
    @media screen and (min-width: 600px) {
        .modal-lg {
            max-width: 1000px;
        }
    }

    /*SHOW MOBIE*/
    @media screen and (max-width: 600px) {
        .modal-lg {
            max-width: 500px;
        }
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
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-5"><?= getLanguage('all', 'search') ?> (<span class="red">*</span>)</label>
                        <div class="col-md-7">
                            <input type="text" name="search_content" id="search_content" class="searchs form-control" placeholder="-- Nhập tiêu đề --"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12" style="margin: 15px 15px 15px -15px;">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" id="token" name="<?= $csrfName; ?>" value="<?= $csrfHash; ?>" />
                        <ul class="button-group pull-right">
                            <li id="search">
                                <button type="button" class="button">
                                    <i class="fa fa-search"></i>
                                    <?= getLanguage('all', 'search') ?>
                                </button>
                            </li>
                            <li id="refresh">
                                <button type="button" class="button">
                                    <i class="fa fa-refresh"></i>
                                    <?= getLanguage('all', 'refresh') ?>
                                </button>
                            </li>

                            <?php if (isset($permission['delete'])) { ?>
                                <li id="delete">
                                    <button type="button" class="button">
                                        <i class="fa fa-times"></i>
                                        <?= getLanguage('all', 'delete') ?>
                                    </button>
                                </li>
                            <?php } ?>
							<button type="button" class="button">
								<i class="fa fa-file-excel-o"></i> Xuất Excel
							</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="portlet box blue page_content">

</div>
<div id="add_box" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" style="top: 15%;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Trả lời</h4>
            </div>
            <div class="modal-body" id="modalContent2" style="overflow: auto !important;height: 450px;">
                <div class="portlet-body">
                    <div style="height: auto; padding: 15px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="control-label col-md-2" style="text-transform: capitalize;">Câu hỏi</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="6" readonly="" id="contentquesion"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="control-label col-md-2">Nội dung (<span class="red">*</span>)</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control ckeditor" id="content_reply" name="content_reply"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-align: center !important;">
                <button type="button" id="add_item" class="btn btn-info">Gửi</button>
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>



<div id="replied_box" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" style="top: 15%;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= getLanguage('contact', 'reply') ?></h4>
            </div>
            <div class="modal-body" id="modalContent2" style="overflow: auto !important;height: 450px;">
                <div class="portlet-body">
                    <div style="height: auto; padding: 15px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="control-label col-md-2" style="text-transform: capitalize;"><?= getLanguage('all', 'quesion') ?>:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="tarepliedquesion"  rows="12" readonly=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="control-label col-md-2"><?= getLanguage('all', 'content') ?>:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="tarepliedcontent"  rows="12" readonly=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-align: center !important;">
                <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
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
        <img src="<?= url_tmpl() ?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<script>
    var controller = '<?= $controller; ?>/';
    var csrfHash = '<?= $csrfHash; ?>';
    var cpage = 1;
    var search;
    $(function () {
        $(".dialog").dialog({
            autoOpen: false,
            width: 850,
            height: 600,
            modal: false
        });
        refresh();
        $("#refresh").click(function () {
            refresh();
        });

        $("#search").click(function () {
            search = getSearch();
            getData();
        });
        $("#delete").click(function () {
            deleteItem();
        });
        $("#add_item").click(function () {
            sendReply();
        });
		
		$("#export").click(function () {
			var searchs = getSearchs();
			window.location =  controller + 'exportexcel?search=' + searchs;
		});
    });
	
	function getSearchs() {
		var obj = {};
		obj['search_content'] = $('#search_content').val();
		return JSON.stringify(obj);
	}

    function view($id) {
        $("#content_box_" + $id).dialog("open");
    }
    function reply(id_reply) {
        $.ajax({
            async: false,
            type: 'POST',
            url: controller + 'loadcontact',
            data: {id: id_reply}
        }).done(function (r) {
            var obj = $.evalJSON(r);
            $("#contentquesion").html(obj.content);
            $("#content_reply").html(obj.reply_content);
            $(".dialog").dialog({
                autoOpen: false,
                width: 850,
                height: 700,
                modal: false
            });
            jQuery("#add_box").modal('show');
            $("#id").val(id_reply);
        }).fail(function (x) {

        });
    }
    function replied(id_reply) {
        $.ajax({
            async: false,
            type: 'POST',
            url: controller + 'loadcontact',
            data: {id: id_reply}
        }).done(function (r) {
            var obj = $.evalJSON(r);
            $("#tarepliedquesion").html(obj.content);
            $("#tarepliedcontent").html(obj.reply_content);
            $(".dialog").dialog({
                autoOpen: false,
                width: 850,
                height: 650,
                modal: false
            });
            jQuery("#replied_box").modal('show');
            $("#id").val(id_reply);
        }).fail(function (x) {

        });
    }
    function sendReply() {
        var content_reply = "";
        content_reply = CKEDITOR.instances['content_reply'].getData();
        if (content_reply == "") {
            error('Nội dung không được để trống!');
            return false;
        }
        $('.loading').show();
        try {
            $.ajax({
                url: controller + 'reply',
                async: false,
                type: 'POST',
                data: {id_reply: $("#id").val(), content_reply: content_reply},
                success: function (datas) {
                    var obj = JSON.parse(datas);
                    if (obj.status == 1) {
                        jQuery("#add_box").modal('hide');
                        error('Gửi mail Thành công');
                        refresh();
                    }
                    else {
                        error('Gửi mail thất bại');
                    }

                },
                error: function () {
                    error('Gửi mail thất bại');
                }
            });
        }
        catch (e) {
            error('Gửi mail thất bại');
        }
        $('.loading').hide();
    }
    function deleteItem() {
        delList = getCheckedId();
        if (delList != "") {
            $.msgBox({
                title: 'Message',
                type: 'error',
                content: '<?= getLanguage('all', 'delete_confirm') ?>',
                buttons: [{value: 'OK'}, {value: 'Cancel'}],
                success: function (result) {
                    if (result == 'OK') {
                        var id = getCheckedId();
                        var token = $('#token').val();
                        $.ajax({
                            url: controller + 'delete',
                            async: false,
                            type: 'POST',
                            data: {list: delList},
                            success: function (datas) {
                                var obj = $.evalJSON(datas);
                                if (obj.status != 1) {
                                    error("<?= getLanguage('all', 'error_unknow') ?>")
                                }
                                else {
                                    search = getSearch();
                                    getData();
                                }
                            },
                            error: function () {
                                error("<?= getLanguage('all', 'error_unknow') ?>")
                                $('.loading').hide();
                            }
                        });
                    }
                }
            });
        }
        else {
            error("<?= getLanguage('all', 'error_select_empty') ?>")
        }
    }
    function refresh() {
        $('.searchs').val('');
        $('#show').html('');
        search = getSearch();//alert(cpage);
        getData();
    }
    function getData() {
        $('.loading').show();
        $.ajax({
            url: controller + 'getList',
            async: false,
            type: 'POST',
            data: {page: cpage, search: search},
            success: function (datas) {
                var obj = $.evalJSON(datas);
                cpage = obj.cPage;
                $('.page_content').html(obj.content);
                $("#paging").html(obj.paging);
                $(".viewtotal").text(obj.viewtotal);
                $('.loading').hide();
                initFunction();
            },
            error: function () {
                alert("<?= getLanguage('all', 'error_unknow') ?>")
                $('.loading').hide();
            }
        });
    }
    function getCheckedId() {
        var del_list = '';
        $('input.chkrow[type=checkbox]').each(function () {
            if ($(this).prop("checked")) {
                if (del_list === "")
                    del_list += $(this).attr("id");
                else
                    del_list += "," + $(this).attr("id");
            }
        });
        return del_list;
    }
    function searchList() {
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0, csrfHash);
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

<script src="<?= url_tmpl(); ?>ckeditor/ckeditor.js" type="text/javascript"></script>
