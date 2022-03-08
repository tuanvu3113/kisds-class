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
                <?= getLanguage('all', 'search') ?>
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
                        <label class="control-label col-md-5 text-left" style="text-align: left;"><?= getLanguage('user', 'username') ?> (<span class="red">*</span>):</label>
                        <div class="col-md-7">
                            <input type="text" name="username" id="username" class="searchs form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('user', 'password') ?> (<span class="red">*</span>):</label>
                        <div class="col-md-7">
                            <input type="password" name="password" id="password" class="searchs form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('user', 'fullname') ?> (<span class="red">*</span>):</label>
                        <div class="col-md-7">
                            <input type="text" name="fullname" id="fullname" class="searchs form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('all', 'email') ?>:</label>
                        <div class="col-md-7">
                            <input type="text" name="email" id="email" class="searchs form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('all', 'phone') ?>:</label>
                        <div class="col-md-7">
                            <input type="text" name="mobile" id="mobile" class="searchs form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('group', 'group_name') ?> (<span class="red">*</span>):</label>
                        <div class="col-md-7">
                            <select name="groupid" id="groupid" class="combos" >
                                <option value=""></option>
                                <?php foreach ($groups as $item) { ?>
                                    <option value="<?= $item->id; ?>"><?= $item->groupname ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-5" style="text-align: left;"><?= getLanguage('all', 'avatar') ?>:</label>
                        <div class="col-md-7">
                            <div class="col-md-6" style="padding:0px !important;" >
                                <ul style="margin:0px;" class="button-group">
                                    <li class="" onclick ="javascript:document.getElementById('imageEnable').click();"><button type="button" class="btnone"><?= getLanguage('all', 'chon-file') ?></button></li>
                                </ul>
                                <input style='display:none;' accept="image/*" id ="imageEnable" type="file" name="userfile">
                            </div>
                            <div class="col-md-6" >
                                <span id="show"></span>
                            </div>
                        </div>
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
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i><th><?= getLanguage('all', 'tim-thay') ?></th> <span class='viewtotal'>0</span> <th><?= getLanguage('all', 'ket-qua') ?></th></i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="portlet-body">
            <div id="gridview" >
                <table class="resultset" id="grid"></table>
                <!--header-->
                <div id="cHeader">
                    <div id="tHeader">
                        <table width="100%" cellspacing="0" border="1" id="tb<?= $routes; ?>" >
                            <?php for ($i = 1; $i < 9; $i++) { ?>
                                <col class="c<?= $i; ?>">
                            <?php } ?>
                            <tr>
                                <th width="40px" class="text-center"><input type="checkbox" name="checkAll" id="checkAll" /></th>
                                <th><?= getLanguage('all', 'stt') ?></th>
                                <th><?= getLanguage('user', 'username') ?></th>
                                <th><?= getLanguage('user', 'fullname') ?></th>
                                <th><?= getLanguage('group', 'group_name') ?></th>
                                <th><?= getLanguage('all', 'phone') ?></th>
                                <th><?= getLanguage('all', 'email') ?></th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--end header-->
                <!--body-->
                <div id="data">
                    <div id="gridView">
                        <table  width="100%" cellspacing="0" border="1">
                            <?php for ($i = 1; $i < 9; $i++) { ?>
                                <col class="c<?= $i; ?>">
                            <?php } ?>
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
        $('#imageEnable').change(function (evt) {
            var files = evt.target.files;
            for (var i = 0, f; f = files[i]; i++) {
                var size = f.size;
                //if (size < 2048000){
                    if (!f.type.match('image.*'))
                    {
                        continue;
                    }
                    var reader = new FileReader();
                    reader.onload = (function (theFile) {
                    return function (e) { //size e = e.tatal
                        $('#show').html('<img src="<?= base_url() ?>files/user/' + e.target.result + '" style="width:60px; height:40px" />');
                        $("#img1").val(e.target.result);
                    };
                })(f);
                reader.readAsDataURL(f);
                /*}
                 else{
                 $('#fileupload').val(');
                 $('.showImages').attr('src', ');
                 alert("File size can't over 2Mb.");
             }*/
         }
     });
        $('#groupid').multipleSelect({
            filter: true,
            placeholder:'<?=getLanguage('all','vui-long-chon')?>',
            single: true
        });
        refresh();
        $('#refresh').click(function () {
            $(".loading").show();
            refresh();
        });
        $('#search').click(function () {
            $('.loading').show();
            searchList();
        });
        $('#save').click(function () {
            search = getSearch();
            var obj = $.evalJSON(search);
            if (obj.username == "") {
                error('<?= getLanguage('user', 'username_empty'); ?>');
                $('#username').focus();
                return false;
            }
            if (obj.fullname == '') {
                error('<?= getLanguage('user', 'fullname_empty'); ?>');
                return false;
            }
            if (obj.password == '') {
                error('<?= getLanguage('user', 'password_empty'); ?>');
                $("#username").focus();
                return false;
            }
            if (!validateEmail(obj.email) && obj.email != '') {
                error('<?= getLanguage('all', 'email-valid') ?>');
                $('#email').focus();
                return false;
            }
            if (!$.isNumeric(obj.mobile) && obj.mobile != '') {
                error("<?= getLanguage('all', 'phone-valid') ?>");
                $("#mobile").focus();
                return false;
            }
            if (obj.groupid == '') {
                error("<?= getLanguage('group', 'group-empty') ?>");
                $("#username").focus();
                return false;
            }
            var token = $('#token').val();
            var data = new FormData();
            var objectfile = document.getElementById('imageEnable').files;
            data.append('userfile', objectfile[0]);
            data.append('csrf_stock_name', token);
            data.append('search', search);
            data.append('id', "");
            $.ajax({
                url: controller + 'save',
                type: 'POST',
                async: false,
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function (datas) {
                    var obj = $.evalJSON(datas);
                    $("#token").val(obj.csrfHash);
                    if (obj.status == 0) {
                        error("<?= getLanguage('all', 'add_failed') ?>");
                        return false;
                    }
                    else if (obj.status == -1) {
                        error("<?= getLanguage('user', 'user_exits') ?>");
                        return false;
                    }
                    else {
                        refresh();
                    }
                },
                error: function () {

                }
            });
        });
        $('#edit').click(function () {
            search = getSearch();
            var obj = $.evalJSON(search);
            var token = $('#token').val();
            var id = $('#id').val();
            if (id == '') {
                error('Please choose at least one user.');
                return false;
            }
            if (obj.username == '') {
                error('<?= getLanguage('user', 'username_empty') ?>');
                $("#username").focus();
                return false;
            }
            if (obj.fullname == "") {
                error("<?= getLanguage('user', 'fullname_empty') ?>");
                return false;
            }
            if (!validateEmail(obj.email) && obj.email != "") {
                error("<?= getLanguage('all', 'email-valid') ?>");
                $("#email").focus();
                return false;
            }
            if (!$.isNumeric(obj.mobile) && obj.mobile != "") {
                error("<?= getLanguage('user', 'phone-valid') ?>");
                $("#mobile").focus();
                return false;
            }
            if (obj.groupid == "") {
                error("<?= getLanguage('user', 'group-empty') ?>");
                $("#username").focus();
                return false;
            }

            var data = new FormData();
            var objectfile = document.getElementById('imageEnable').files;
            data.append('userfile', objectfile[0]);
            data.append('csrf_stock_name', token);
            data.append('search', search);
            data.append('id', id);
            $.ajax({
                url: controller + 'edit',
                type: 'POST',
                async: false,
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function (datas) {
                    var obj = $.evalJSON(datas);
                    $("#token").val(obj.csrfHash);
                    if (obj.status == 0) {
                        error('<?= getLanguage('all', 'edit-fail') ?>');
                        return false;
                    }
                    else if (obj.status == -1) {
                        error('<?= getLanguage('user', 'user_exits') ?>');
                        return false;
                    }
                    else {
                        refresh();
                    }
                },
                error: function () {

                }
            });
        });
        $('#delete').click(function () {
            var id = $('#id').val();
            if (id == '') {
                error('<?= getLanguage('all', 'chon-nguoi-dung') ?>');
                return false;
            }
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
                            url: controller + 'deletes',
                            type: 'POST',
                            async: false,
                            data: {csrf_stock_name: token, id: id},
                            success: function (datas) {
                                var obj = $.evalJSON(datas);
                                $('#token').val(obj.csrfHash);
                                if (obj.status == 0) {
                                    error('<?= getLanguage('all', 'xoa-khong-thanh-cong') ?>');
                                    return false;
                                }
                                else {
                                    refresh();
                                }

                            },
                            error: function () {

                            }
                        });
                    }
                }
            });
        });
    });
function save() {

}
function funcList(obj) {
    $('.edit').each(function (e) {
        $(this).click(function () {
            console.log($(this).children(".username").text().trim());
            var username = $(this).children(".username").text().trim();
            var groupid = $(this).attr('groupid');

            var fullname = $(this).children(".fullname").text().trim();
            var email = $(this).children(".email").text().trim();
            var mobile = $(this).children(".mobile").text().trim();
            var avatar = '<?= base_url() ?>files/user/' + $(this).attr('avatar');

            var id = $(this).attr('id');
            $('#id').val(id);
            $('#username').val(username);
            $('#fullname').val(fullname);
            $('#email').val(email);
            $('#mobile').val(mobile);

            $('#groupid').multipleSelect('setSelects', groupid.split(','));
            $('#show').html('<img src="' + avatar + '" style="width:60px; height:40px" />');
        });
    });
        /*$('.permission').each(function(e){
         $(this).click(function(event){
         $('#dialog').dialog('open');
         event.preventDefault();
         var id = $(this).attr('id');
         var token = $('#token').val();
         $.ajax({
         url : controller + 'getright',
         type: 'POST',
         async: false,
         data: {csrf_stock_name:token, id:id},
         success:function(datas){
         var obj = $.evalJSON(datas);
         //$("#token").val(obj.csrfHash);
         $('#dialog').html(obj.content);
         },
         error : function(){

         }
         });
         return false;
         });
     });*/
 }
 function refresh() {
    $('.loading').show();
    $('.searchs').val('');
    $('#show').html('');
    $('select.combos').multipleSelect('uncheckAll');
    csrfHash = $('#token').val();
        search = getSearch();//alert(cpage);
        getList(cpage, csrfHash);
    }
    function getCheckedId() {
        var del_list = '';
        $('#grid-rows input.noClick:checked').each(function () {
            var id = $(this).attr('id');
            del_list += ',' + id;
        });
        del_list = del_list.substr(1);
        return del_list;
    }
    function searchList() {
        search = getSearch();//alert(cpage);exit;
        csrfHash = $('#token').val();
        getList(0, csrfHash);
    }
    function validateEmail(email) {
        var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var valid = emailReg.test(email);

        if (!valid) {
            return false;
        } else {
            return true;
        }
    }
</script>
<!--<script src="<?= url_tmpl(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
