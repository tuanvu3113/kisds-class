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
                            <th width="200px" style="text-transform: capitalize;"><?= getLanguage('all', 'author') ?></th>
                            <th width="100px" style="text-transform: capitalize;"><?= getLanguage('all', 'view-number') ?></th>
                            <th width="100px" style="text-transform: capitalize;"><?= getLanguage('all', 'date') ?></th>
                            <th width="100px" style="text-transform: capitalize;"><?= getLanguage('all', 'popular') ?></th>
                            <th width="100px" style="text-transform: capitalize;"><?= getLanguage('all', 'show') ?></th>
                            <th width="120px"><?= getLanguage('all', 'images') ?></th>
                            <th width="120px"><?= getLanguage('all', 'image-popular') ?></th>
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
                                    <td class="title"><a href="<?php echo admin_url() . $routes . "/edit/" . $item->id; ?>"><?= $item->news_title; ?></a></td>
                                    <td class="link"><?= $item->author; ?></td>
                                    <td class="link"><?= $item->views_number; ?></td>
                                    <td class="link"><?= $item->date_created; ?></td>
                                    <td class="popular text-center"><input type="checkbox" class="ispopular" name="<?= $item->id; ?>" <?php echo ($item->popular == 1) ? "checked" : ""; ?>></td>

                                    <td class="isshpw text-center"><input type="checkbox" class="isshow" name="<?= $item->id; ?>" <?php echo ($item->isshow == 1) ? "checked" : ""; ?>></td>
                                    <td class="image"><img src="<?= base_url(); ?>Images/home/news/<?= $item->news_image; ?>" width=110px height=100px/></td>
                                    <td class="image_right"><img src="<?= base_url(); ?>Images/home/news/<?= $item->news_image_right; ?>" width=110px height=100px/></td>
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