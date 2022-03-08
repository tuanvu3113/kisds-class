<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
             <i><?=getLanguage('all', 'tim-thay')?> <span class='viewtotal'>0</span> <?=getLanguage('all', 'ket-qua')?></i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse">
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div id="gridview" >
            <div id="tHeader">
                <div id="gridView" style="overflow-y: scroll !important;">
                    <table id="tbbody"  width="100%" cellspacing="0" border="1">
                        <tr>
                            <th width="40px" class="text-center"><input type="checkbox" name="checkall" id="checkall" /></th>
                            <th width="40px"><?= getLanguage('all', 'stt') ?></th>
                            <th width="120px">Họ tên</th>
                            <th width="120px"><?= getLanguage('all', 'phone') ?></th>
                            <th width="220px">Zalo liên hệ</th>
                        </tr>
                        <?php
                            $i = $start;
                            foreach ($datas as $item) {
                                ?>
                                <tr class="row_content edit" id="<?= $item->id; ?>" >
                                    <td style="text-align: center;">
                                        <input class="chkrow" type="checkbox" name="keys[]" id="<?= $item->id; ?>"></td>
                                    <td class="center"><?= $i; ?></td>
                                    <td class="fullname"><?= $item->fullname; ?></td>
                                    <td class="phone"><?= $item->cellphone; ?></td>
                                    <td class="content"><?= $item->content; ?></td>
                                    <td class="reply" style="display: none;">
                                        <?php if ($item->reply_date != "") { ?>
                                            <a href="javascript:void(0);" class="view" onclick="replied('<?= $item->id; ?>');"> <?= getLanguage('contact', 'replied') ?></a>
                                        <?php } else {
                                            ?>
                                            <a href="javascript:void(0);" class="reply" onclick="reply('<?= $item->id; ?>');"><i class="fa fa-reply"></i> <?= getLanguage('contact', 'reply') ?></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="portlet-body mtopa20" id="paging"></div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#checkall').click(function () {
            if ($(this).prop('checked')) {
                $('.chkrow').prop('checked', true);
            } else {
                $('.chkrow').prop('checked', false);
            }
        });
    });
    function getDataPage(page){
        cpage   =   page;
        getData();
    }

    function view($id) {
        $(".dialog").dialog({
            autoOpen: false,
            width: 500,
            height: 300,
            modal: false
        });
        $("#content_box_" + $id).dialog("open");
    }
    function viewReply($id) {
        $(".dialog").dialog({
            autoOpen: false,
            width: 600,
            height: 450,
            modal: false
        });
        $("#reply_content_box_" + $id).dialog("open");
    }
    $(document).ready(function(){
        $('#checkall').click(function () {
            if ($(this).prop('checked')) {
                $('.chkrow').prop('checked', true);
            } else {
                $('.chkrow').prop('checked', false);
            }
        });
    });
    function getDataPage(page){
        cpage   =   page;
        getData();
    }
</script>