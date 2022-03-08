<?php $arr = ["Default", "Giới thiệu", "Tuyển dụng", "Hoạt động"]; ?>
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
                            <th width="150px"><?= getLanguage('all', 'title') ?></th>
                            <th width="150px">Menu</th>
                            <th><?= getLanguage('all', 'content') ?></th>
                            <th width="90px" style="text-transform: capitalize;"><?= getLanguage('all', 'publish') ?></th>
                            <th width="120px"><?= getLanguage('all', 'images') ?></th>
                        </tr>
                        <?php
                            $i = $start;
                            foreach ($datas as $item) {
                                ?>
                                <tr class="row_content edit" id="<?= $item->id; ?>" >
                                    <td style="text-align: center;">
                                        <input class="chkrow" type="checkbox" name="keys[]" id="<?= $item->id; ?>">
                                    </td>
                                    <td class="center"><?= $i; ?></td>
                                    <td class="title"><a href="<?php echo admin_url() . $routes . "/edit/" . $item->id; ?>"><?= $item->title; ?></a></td>
                                    <td class="solution"><?= $arr[$item->area]; ?></td>
                                    <?php
                                    if ($item->area == 1) { ?>
                                        <td class="content"><?= substr($item->content, 0, 200); ?></td>
                                    <?php }
                                    else { ?>
                                        <td class="content"><?= substr($item->content, 0, 300); ?></td>
                                    <?php } ?>
                                    <td class="publish text-center"><input type="checkbox" class="ispublish" name="<?= $item->id; ?>" <?php echo ($item->is_publish == 1) ? "checked" : ""; ?>></td>
                                    <td class="image"><img src="<?= base_url(); ?>Images/public/<?= $item->picture; ?>" width=110px height=100px/></td>
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