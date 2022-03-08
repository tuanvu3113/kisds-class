<div class="portlet-title">
    <div class="caption">
        <i><?=getLanguage('all','tim-thay');?> <span class='viewtotal'><?php echo count($datas); ?></span> <?=getLanguage('all','result');?></i>
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
                        <tr>
                            <th width="40px" class="text-center"><input type="checkbox" name="checkAll" id="checkAll" /></th>
                            <th width="40px"><?= getLanguage('all', 'stt') ?></th>
                            <th width="150px"><?= getLanguage('all', 'title') ?></th>
                            <th width="200px"><?= getLanguage('all', 'link') ?></th>
                            <th><?= getLanguage('all', 'content') ?></th>
                            <th width="80px"><?= getLanguage('all', 'text_align') ?></th>
                            <th width="60px"><button type="button" id="btnorder" class="btn btn-xs"><?= getLanguage('all', 'order') ?></button></th>
                            <th width="100px" style="text-transform: capitalize;"><?= getLanguage('all', 'publish') ?></th>
                            <th width="120px"><?= getLanguage('all', 'images') ?></th>
                        </tr>
                        <tbody id="grid-rows">
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
                                    <td class="link"><?= $item->link; ?></td>
                                    <td class="content"><?= substr($item->content, 0, 100); ?></td>
                                    <td class="link"><?= ($item->align == 1) ? "Left" : "Right"; ?></td>
                                    <td class="position text-center"><input type="number" style="width: 45px;" class="order-record" name="<?= $item->id; ?>" value="<?= $item->position; ?>"></td>
                                    <td class="publish text-center"><input type="checkbox" class="ispublish" name="<?= $item->id; ?>" <?php echo ($item->is_publish == 1) ? "checked" : ""; ?>></td>
                                    <td class="image"><img src="<?= base_url(); ?>images/solution/<?= $item->picture; ?>" width=110px height=100px/></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end body-->
        </div>
    </div>
    <div class="portlet-body">
        <div class="fleft" id="paging">
            <!--            -->
        </div>
    </div>
</div>

