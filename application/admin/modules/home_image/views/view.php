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
<div><?=$this->load->inc('breadcrumb');?></div>
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
                <div class="col-md-12">
                    <div class="col-md-1 col-xs-3 col-sm-3 text-right"><label class="control-label-sm"><?= getLanguage('all', 'title') ?>:</label></div>
                    <div class="col-md-5 col-xs-9 col-sm-9" >
                        <input type="text" name="title" id="title" class="searchs form-control" placeholder="-- Nhập tiêu đề --" />
                    </div>
                    <div class="col-md-1 col-xs-3 col-sm-3 text-right"><label class="control-label-sm" style="text-transform: capitalize;"><?= getLanguage('all', 'solution') ?>:</label></div>
                    <div class="col-md-5 col-xs-9 col-sm-9">
                        <select id="area" class="combos">
                            <option value=''></option>
                            <option value='1'>Image</option>
                            <option value='2'>Slide</option>
                            <option value='3'>Technology</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12" style="margin: 10px 10px 10px 1px">
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
                            <?php if (isset($permission['add'])) { ?>
                                <li id="save">
                                    <button type="button" class="button">
                                        <i class="fa fa-plus"></i>
                                        <?= getLanguage('all', 'add') ?>
                                    </button>
                                </li>
                            <?php } ?>
                            <?php if (isset($permission['edit'])) { ?>
                                <li id="edit">
                                    <button type="button" class="button">
                                        <i class="fa fa-save"></i>
                                        <?= getLanguage('all', 'edit') ?>
                                    </button>
                                </li>
                            <?php } ?>
                            <?php if (isset($permission['delete'])) { ?>
                                <li id="delete">
                                    <button type="button" class="button">
                                        <i class="fa fa-times"></i>
                                        <?= getLanguage('all', 'delete') ?>
                                    </button>
                                </li>
                            <?php } ?>
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
        <img src="<?= url_tmpl() ?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<script>
    var controller = '<?= $controller; ?>/';
    var csrfHash = '<?= $csrfHash; ?>';
    var cpage = 1;
    var search;
    $(function () {
        $('#area').multipleSelect({
            filter: true,
            placeholder: '<?= getLanguage('all', 'vui-long-chon') ?>',
            single: true
        });
        refresh();
        $("#refresh").click(function () {
            refresh();
        });
        $("#search").click(function () {
            search = getSearch();
            getData();
        });
        $("#edit").click(function () {
            var list_id = '';
            $('input.chkrow[type=checkbox]').each(function () {
                if ($(this).prop("checked")) {
                    if (list_id === "")
                        list_id += $(this).attr("id");
                    else
                        list_id += "," + $(this).attr("id");
                }
            });
            if (list_id.indexOf(",") !== -1 || list_id.length === 0) {
                error("<?= getLanguage('all', 'error_select_empty') ?>");
                return false;
            }
            window.location = "<?= $controller; ?>/edit/" + list_id;
        });
        $("#save").click(function () {
            window.location = "<?= $controller; ?>/edit/0";
        });
        $("#delete").click(function () {
            var list_id = '';
            $('input.chkrow[type=checkbox]').each(function () {
                if ($(this).prop("checked")) {
                    if (list_id === "")
                        list_id += $(this).attr("id");
                    else
                        list_id += "," + $(this).attr("id");
                }
            });
            if (list_id !== "") {
                $.msgBox({
                    title: 'Message',
                    type: 'error',
                    content: '<?= getLanguage('all', 'delete_confirm') ?>',
                    buttons: [{value: 'OK'}, {value: 'Cancel'}],
                    success: function (result) {
                        if (result === 'OK') {
                            var token = $('#token').val();
                            $.ajax({
                                url: controller + 'delete',
                                async: false,
                                type: 'POST',
                                data: {list: list_id},
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
        });
        $(document.body).on("click", ".ispublish", function () {
            //var index = $(".ispublish").index(this);
            var id = $(this).attr("name");
            var status = $(this).prop("checked") ? 1 : 0;
            $.ajax({
                async: false,
                type: 'POST',
                url: controller + 'ispublish',
                data: {id: id, status: status}
            }).done(function (r) {
                if (r === "endsession") {
                    window.location = "<?php echo admin_url(); ?>" + "authorize.html";
                }
                var obj = JSON.parse(r);
                if (obj.status === "success") {
                    /* set only record have is_publish equal 1
                     if (status === 1) {
                     $(".ispublish").each(function (i) {
                     if (i !== index) {
                     $(this).prop("checked", false);
                     }
                     });
                     }
                     */
                } else if (obj.status === "deny") {
                    error("<?= getLanguage('all', 'permision_denied') ?>");
                } else if (obj.status === "fail") {
                    error("<?= getLanguage('all', 'save_error') ?>");
                }
            }).fail(function (x) {
                error("<?= getLanguage('all', 'save_error') ?>");
            });
        });
    });

    function refresh() {
        $('.searchs').val('');
        $('select.combos').multipleSelect('uncheckAll');
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
    function searchList() {
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0, csrfHash);
    }
</script>

