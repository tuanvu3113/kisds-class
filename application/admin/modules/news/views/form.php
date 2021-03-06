<style>
    #tbl_img > tbody > tr > td {
        vertical-align: middle;
    }
    #tbl_img > thead > tr > th:first-child {
        border-left: 1px solid #d1dde2;
    }
    #tbl_img > thead > tr > th:last-child {
        border-right: 1px solid #d1dde2;
    }
    #tbl_img > thead > tr > th {
        border-top: 1px solid #d1dde2;
    }
    .control-label-sm {
        margin-top: 3px;
    }
    .caption {
        margin: 10px 10px 10px 10px;
    }
    .row {
        margin-top: 10px;
        margin-left: 5px
    }
</style>
<form method="post" enctype="multipart/form-data">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-reorder"></i>
                <?= getLanguage('all', 'edit') ?>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse">
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'title') ?><lable style="color:red"> *</lable>:</label></div>
                <div class="col-md-10 col-xs-12 col-sm-12" ><input type="text" class="form-control input-sm" id="news_title" value="<?php echo $detail->news_title; ?>" style="width: 100%;"/></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'author') ?>:</label></div>
                <div class="col-md-10 col-xs-12 col-sm-12" ><input type="text" class="form-control input-sm" id="author" value="<?php echo $detail->author; ?>" style="width: 100%;"/></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm">Tóm tắt:</label></div>
                <div class="col-md-10 col-xs-12 col-sm-12" ><input type="text" class="form-control input-sm" id="news_summary" value="<?php echo $detail->news_summary; ?>" style="width: 100%;"/></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'content') ?><lable style="color:red"> *</lable>:</label></div>
                <div class="col-md-10 col-xs-12 col-sm-12" >
                    <textarea class="ckeditor form-control" id="content" name="content"><?= $detail->news_content; ?></textarea>
                </div>
            </div>
           <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'view-number') ?>:</label></div>
               <div class="col-md-2 col-xs-3 col-sm-3" ><input type="number" class="form-control input-sm" id="views_number" value="<?=(isset($detail->views_number)?$detail->views_number:''); ?>" style="width: 100%;"/></div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'date') ?>:</label></div>
                <div class="col-md-2 col-xs-3 col-sm-3" ><input type="date" id="date_created" name="trip-start" value="<?=(isset($detail->date_created)?date("Y-m-d", strtotime($detail->date_created)):''); ?>"></div>
                </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'show') ?>:</label></div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <select id="isshow" class="form-control input-sm">

                        <option value='1' <?php echo ($detail->isshow == 1) ? "selected" : ""; ?>><?= getLanguage('all', 'enable') ?></option>
                        <option value='0' <?php echo ($detail->isshow == 0) ? "selected" : ""; ?>><?= getLanguage('all', 'disable') ?></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'popular') ?>:</label></div>
                <div class="col-md-3 col-xs-12 col-sm-12">
                    <select id="popular" class="form-control input-sm">
                        <option value='1' <?php echo ($detail->popular == 1) ? "selected" : ""; ?>><?= getLanguage('all', 'enable') ?></option>
                        <option value='0' <?php echo ($detail->popular == 0) ? "selected" : ""; ?>><?= getLanguage('all', 'disable') ?></option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'background-img') ?> <lable style="color:red">*</lable>:</label></div>
                <div class="col-md-10 col-xs-12 col-sm-12" >
                    <input type="file" id="i-picture" style="width: 100%;"/><input type="hidden" id="news_image" value="<?php echo $detail->news_image; ?>"/>
                    <div style="margin-top: 2px; height: 250px; border: 1px solid #e5e5e5">
                        <a id="picture-preview" href="<?php echo base_url() . "Images/home/news/" . $detail->news_image; ?>" class="fancybox-button" data-rel="fancybox-button">
                            <img style="max-width: 100%; max-height: 100%;" class="img-responsive" src="<?php echo base_url() . "Images/home/news/" . $detail->news_image; ?>" alt="<?php echo $detail->news_image; ?>">
                        </a>
                    </div>
                </div>

                </div><div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm"><?= getLanguage('all', 'image-popular') ?><lable style="color:red">*</lable>:</label></div>
                    <div class="col-md-10 col-xs-12 col-sm-12" >
                        <input type="file" id="i-picture-mobile" style="width: 100%;"/><input type="hidden" id="news_image_right" value="<?=(isset($detail->news_image_right)?$detail->news_image_right:''); ?>"/>
                        <div style="margin-top: 2px; height: 250px; border: 1px solid #e5e5e5">
                            <a id="picture-mobile-preview" href="<?php echo base_url() . "Images/home/news/" . (isset($detail->news_image_right)?$detail->news_image_right:''); ?>" class="fancybox-button" data-rel="fancybox-button">
                                <img style="max-width: 100%; max-height: 100%;" class="img-responsive" src="<?php echo base_url() . "Images/home/news/" . (isset($detail->news_image_right)?$detail->news_image_right:''); ?>" alt="<?=(isset($detail->news_image_right)?$detail->news_image_right:''); ?>">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-md-2 col-xs-12 col-sm-12"><label class="control-label-sm">Background Mobile:</label></div>
                    <div class="col-md-10 col-xs-12 col-sm-12" >
                        <input type="file" id="i-picture-mobile" style="width: 100%;"/><input type="hidden" id="news_image_right" value="<?=(isset($detail->news_image_right)?$detail->news_image_right:'');?>"/>
                        <div style="margin-top: 2px; height: 200px; border: 1px solid #e5e5e5">
                            <a id="picture-mobile-preview" href="<?php echo base_url() . "Images/home/news/" .(isset($detail->news_image_right)?$detail->news_image_right:'') ; ?>" class="fancybox-button" data-rel="fancybox-button">
                                <img style="max-width: 100%; max-height: 100%;" class="img-responsive" src="<?php echo base_url() . "Images/home/news/" . (isset($detail->news_image_right)?$detail->news_image_right:''); ?>" alt="<?=(isset($detail->news_image_right)?$detail->news_image_right:''); ?>">
                            </a>
                        </div>
                    </div>
                </div>   -->
            <div class="row" style="margin-top: 15px;">
                <div class="col-md-12">
                    <div id="tab_images_uploader_container" class="text-align-reverse">
                        <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
                            <i class="fa fa-plus"></i> <?= getLanguage('all', 'select-images') ?> </a>
                        <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
                            <i class="fa fa-share"></i> <?= getLanguage('all', 'upload-images') ?> </a>
                    </div>
                    <div class="row" style="margin-right: 0px; margin-left: 0px;">
                        <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
                    </div>
                    <table class="table table-bordered table-hover" id="tbl_img">
                        <thead>
                            <tr role="row" class="heading">
                                <th class="text-center" width="15%"><?= getLanguage('all', 'picture') ?></th>
                                <th class="text-center" width="40%"><?= getLanguage('all', 'label') ?></th>
                                <th class="text-center" width="28%"><?= getLanguage('all', 'link') ?></th>
                                <th class="text-center" width="7%"><?= getLanguage('all', 'show') ?></th>
                                <th class="text-center" width="10%"><?= getLanguage('all', 'function') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($detail->json_pictures)) {
                                $arr_pics = json_decode($detail->json_pictures, true);
                                $i = 0;
                                foreach ($arr_pics as $spic) {
                                    $pic = base_url() . "Images/home/news/" . $spic['name'];
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $pic; ?>" class="fancybox-button" data-rel="fancybox-button">
                                                <img class="img-responsive" src="<?php echo $pic; ?>" alt="<?php echo $spic['name']; ?>">
                                            </a>
                                        </td>
                                        <td>
                                            <textarea rows="4" class="form-control ta-label"><?php echo $spic['label']; ?></textarea>
                                            <input type="hidden" class="img_name" value="<?php echo $spic['name']; ?>">
                                        </td>
                                        <td class="text-center"><textarea rows="4" class="form-control ta-link"><?php echo $spic['link']; ?></textarea></td>
                                        <td class="text-center"><input class="form-control ic-display" type="checkbox" <?php echo ($spic['display'] == 1) ? "checked" : ""; ?> ></td>
                                        <td class="text-center"><a href="javascript:;" class="btn default btn-sm btn-img-remove"><i class="fa fa-times"></i> <?= getLanguage('all', 'remove') ?> </a></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mtop10">
                <div class="col-md-12 caption">
                    <div class="mright10" >
                        <input type="hidden" name="id" id="id" value="<?= $detail->id; ?>" />
                        <ul class="button-group pull-right">
                            <li id="back">
                                <button type="button" class="button" onclick="window.location = '<?= $controller; ?>'">
                                    <i class="fa fa-backward"></i>
                                    <?= getLanguage('all', 'back') ?>
                                </button>
                            </li>
                            <li id="save">
                                <button type="button" class="button">
                                    <i class="fa fa-save"></i>
                                    <?= getLanguage('all', (empty($detail->id) ? 'add' : 'edit')) ?>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="idr" value="<?php echo $detail->id; ?>">
</form>

<div class="loading" style="display: none;">
    <div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
    </div>
    <div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
        <img src="<?= url_tmpl() ?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
    </div>
</div>
<script>
    var controller = '<?= $controller; ?>/';
    var url_theme = '<?php echo url_tmpl(); ?>';
    var path_image = '<?php echo base_url() . "Images/home/news/"; ?>';
    $(function () {
        var uploader = new plupload.Uploader({
            runtimes: 'html5,flash,silverlight,html4',
            browse_button: document.getElementById('tab_images_uploader_pickfiles'), // you can pass in id...
            container: document.getElementById('tab_images_uploader_container'), // ... or DOM Element itself
            url: controller + "upload",
            filters: {
                max_file_size: '10mb',
                mime_types: [
                    {title: "Image files", extensions: "jpg,gif,png"},
                    {title: "Zip files", extensions: "zip"}
                ]
            },
            // Flash settings
            flash_swf_url: url_theme + 'assets/plugins/plupload/js/Moxie.swf',
            // Silverlight settings
            silverlight_xap_url: url_theme + 'assets/plugins/plupload/js/Moxie.xap',
            init: {
                PostInit: function () {
                    $('#tab_images_uploader_filelist').html("");

                    $('#tab_images_uploader_uploadfiles').click(function () {
                        uploader.start();
                        return false;
                    });

                    $('#tab_images_uploader_filelist').on('click', '.added-files .remove', function () {
                        uploader.removeFile($(this).parent('.added-files').attr("id"));
                        $(this).parent('.added-files').remove();
                    });
                },
                FilesAdded: function (up, files) {
                    plupload.each(files, function (file) {
                        $('#tab_images_uploader_filelist').append('<div class="alert alert-warning added-files" id="uploaded_file_' + file.id + '">' + file.name + '(' + plupload.formatSize(file.size) + ') <span class="status label label-info"></span>&nbsp;<a href="javascript:;" style="margin-top:-5px" class="remove pull-right btn btn-sm red"><i class="fa fa-times"></i> remove</a></div>');
                    });
                },
                UploadProgress: function (up, file) {
                    $('#uploaded_file_' + file.id + ' > .status').html(file.percent + '%');
                },
                FileUploaded: function (up, file, response) {
                    var response = $.parseJSON(response.response);
                    if (response.hasOwnProperty('result')) {
                        var img = path_image + file.name;
                        var row = $("#tbl_img tbody tr").length;
                        $('#uploaded_file_' + file.id + ' > .status').removeClass("label-info").addClass("label-success").html('<i class="fa fa-check"></i> Done'); // set successfull upload
                        var html = '<tr><td><a href="' + img + '" class="fancybox-button" data-rel="fancybox-button"><img class="img-responsive" src="' + img + '" alt=""></a></td>';
                        html += '<td><textarea rows="4" class="form-control ta-label"></textarea><input type="hidden" class="img_name" value="' + file.name + '"></td>';
                        html += '<td class="text-center"><textarea rows="4" class="form-control ta-link"></textarea></td>';
                        html += '<td class="text-center"><input class="form-control ic-display" type="checkbox" checked /></td>';
                        html += '<td class="text-center"><a href="javascript:;" class="btn default btn-sm btn-img-remove"><i class="fa fa-times"></i> Remove </a></td></tr>';
                        $("#tbl_img tbody").append(html);
                        $(".fancybox-button").fancybox();
                    } else {
                        $('#uploaded_file_' + file.id + ' > .status').removeClass("label-info").addClass("label-danger").html('<i class="fa fa-warning"></i> Failed'); // set failed upload
                        Metronic.alert({type: 'danger', message: 'Có một hình ảnh upload lỗi. Vui lòng thực hiện lại.', closeInSeconds: 10, icon: 'warning'});
                    }
                },
                Error: function (up, err) {
                    Metronic.alert({type: 'danger', message: err.message, closeInSeconds: 10, icon: 'warning'});
                }
            }
        });
        uploader.init();

        $("#i-picture").change(function () {
            $(".loading").show();
            $("#picture-preview").html("<img src='<?= base_url(); ?>Images/mini_loading.gif'/>");
            var data = new FormData();
            var filesData = document.getElementById('i-picture').files;
            data.append('file', filesData[0]);
            $.ajax({
                url: controller + 'uploadFile',
                type: 'POST',
                async: false,
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function (datas) {
                    $(".loading").hide();
                    var obj = $.evalJSON(datas);
                    $("#picture-preview").html("<img src='<?= base_url(); ?>Images/temp/" + obj.filename + "' style='max-width: 100%; max-height: 100%;' />");
                    if (obj.status === "pass") {
                        $("#news_image").val(obj.filename);
                    } else if (obj.status === "size") {
                        $("#news_image").val("");
                    }
                },
                error: function () {
                    $(".loading").hide();
                }
            });
        });

        $("#i-icon").change(function () {
            $(".loading").show();
            $("#icon-preview").html("<img src='<?= base_url(); ?>Images/mini_loading.gif'/>");
            var data = new FormData();
            var filesData = document.getElementById('i-icon').files;
            data.append('file', filesData[0]);
            $.ajax({
                url: controller + 'uploadFile',
                type: 'POST',
                async: false,
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function (datas) {
                    $(".loading").hide();
                    var obj = $.evalJSON(datas);
                    $("#icon-preview").html("<img src='<?= base_url(); ?>Images/temp/" + obj.filename + "' style='max-width: 100%; max-height: 100%;' />");
                    if (obj.status === "pass") {
                        $("#icon").val(obj.filename);
                    } else if (obj.status === "size") {
                        $("#icon").val("");
                    }
                },
                error: function () {
                    $(".loading").hide();
                }
            });
        });

        $("#i-picture-mobile").change(function () {
            $(".loading").show();
            $("#picture-mobile-preview").html("<img src='<?= base_url(); ?>Images/mini_loading.gif'/>");
            var data = new FormData();
            var filesData = document.getElementById('i-picture-mobile').files;
            data.append('file', filesData[0]);
            $.ajax({
                url: controller + 'uploadFile',
                type: 'POST',
                async: false,
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function (datas) {
                    $(".loading").hide();
                    var obj = $.evalJSON(datas);
                    $("#picture-mobile-preview").html("<img src='<?= base_url(); ?>Images/temp/" + obj.filename + "' style='max-width: 100%; max-height: 100%;' />");
                    if (obj.status === "pass") {
                        $("#news_image_right").val(obj.filename);
                    } else if (obj.status === "size") {
                        $("#news_image_right").val("");
                    }
                },
                error: function () {
                    $(".loading").hide();
                }
            });
        });

        $('#tbl_img').on('click', ".btn-img-remove", function () {
            $(this).closest('tr').remove();
        });

        $("#save").click(function () {
            var valid = 0, content_error = "";
            var id = $("#idr").val();
            var title = $("#news_title").val();
            var views_number = $("#views_number").val();
            var date_created = $("#date_created").val();
            //var label = $("#label").val();
            //var align = $("#align").val();
            var author = $("#author").val();
            var news_summary = $("#news_summary").val();
            var picture = $("#news_image").val();
            var picture_right = $("#news_image_right").val();
            //var picture_mobile = $("#picture_mobile").val();
            var content = CKEDITOR.instances['content'].getData().trim();
            var publish = $("#isshow").val();
            var popular = $("#popular").val();
            var pictures = [];
            $(".img_name").each(function (i) {
                var obj_pic = {};
                obj_pic["name"] = $(this).val();
                //obj_pic["label"] = $(".ta-label").eq(i).val();
                obj_pic["link"] = $(".ta-link").eq(i).val();
                obj_pic["display"] = ($(".ic-display").eq(i).prop("checked") === true) ? 1 : 0;
                pictures.push(obj_pic);
            });
            var json_pic = JSON.stringify(pictures);
            if (title.length === 0) {
                content_error = "<?=getLanguage('all','title-is-not-empty')?>";
            }  else if (picture === "") {
                content_error = "<?=getLanguage('all','picture-not-empty-or-size-not-incorrect')?>";
            }else if (picture_right === "") {
                content_error = "<?=getLanguage('all','picture-not-empty-or-size-not-incorrect')?>";
            } else if (content === "") {
                content_error = "<?=getLanguage('all','content-not-empty')?>";
            } else {
                valid = 1;
            }
            if (valid === 1) {
                var fdata = {};
                fdata['news_title'] = title;
                fdata['views_number'] = views_number;
                fdata['date_created'] = date_created;
                //fdata['label'] = label;
                fdata['author'] = author;
                fdata['news_summary'] = news_summary;
                //fdata['align'] = align;
                fdata['news_image'] = picture;
                fdata['news_image_right'] = picture_right;
                fdata['news_content'] = content;
                fdata['isshow'] = publish;
                fdata['popular'] = popular;
                $.ajax({
                    async: false,
                    type: 'POST',
                    url: controller + 'mysave',
                    data: {id: id, fdata: fdata}
                }).done(function (r) {
                    if (r === "endsession") {
                        window.location = "<?php echo admin_url(); ?>" + "authorize.html";
                    }
                    var obj = JSON.parse(r);
                    if (obj.status === "deny") {
                        error("<?= getLanguage('all', 'permision_denied') ?>");
                    } else if (obj.status === "exist") {
                        error("<?= getLanguage('all', 'item_exist') ?>");
                    } else if (obj.status === "fail") {
                        error("<?= getLanguage('all', 'save_error') ?>");
                    } else {
                        window.location = '<?= $controller; ?>';
                    }
                }).fail(function (x) {
                    error("<?= getLanguage('all', 'save_error') ?>");
                });
            } else {
                error(content_error);
            }
        });
    });
    function error2(object) {
        $("#" + object).css("border-color", "red");
    }
    function success(object) {
        $("#" + object).css("border-color", "");
    }
</script>
<script src="<?= url_tmpl(); ?>ckeditor/ckeditor.js" type="text/javascript"></script>
<link href="<?php echo url_tmpl(); ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script src="<?php echo url_tmpl(); ?>assets/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- <script src="<?php echo url_tmpl(); ?>assets/plugins/fancybox/source/jquery.fancybox.js" type="text/javascript"></script> -->