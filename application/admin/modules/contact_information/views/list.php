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
                            <th width="80px" class="text-center"><input type="checkbox" name="checkall" id="checkall"/></th>
                            <th width="80px"><?= getLanguage('all', 'stt') ?></th>
                            <th width=""><?= getLanguage('all', 'title') ?></th>
                            <th width="80px" style="text-transform: capitalize;"><?= getLanguage('all', 'publish') ?></th>
                            <th width="160px"><?= getLanguage('all', 'images') ?></th>
                        </tr>
                        <?php
                            $i = $start;
                            foreach ($datas as $item) {
                                ?>
                                <tr class="row_content edit" id="<?= $item->id; ?>" >
                                    <td style="text-align: center;">
                                        <input class="chkrow" type="checkbox" onclick="check_click()" name="keys[]" id="<?= $item->id; ?>">
                                    </td>
                                    <td class="center"><?= $i; ?></td>
                                    <td class="title"><a href="<?php echo admin_url() . $routes . "/edit/" . $item->id; ?>"><?= $item->title; ?></a></td>
                                    <td class="publish text-center">
                                        <input type="checkbox" class="ispublish" name="<?= $item->id; ?>" <?= (($item->is_publish == 1) ? "checked" : ""); ?>>
                                    </td>
                                    <td class="image"><img src="<?= base_url(); ?>Images/aboutus/<?= $item->picture; ?>" width=110px height=100px/></td>
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
</script>