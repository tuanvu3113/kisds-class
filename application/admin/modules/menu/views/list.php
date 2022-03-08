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
                            <th width="40px" class="text-center"><input type="checkbox" id="checkall" name="checkall"/></th>
                            <th width="40px"><?=getLanguage('all','stt')?></th>
                            <th><?=getLanguage('all','name')?></th>
                            <th><?=getLanguage('all','link')?></th>
                            <th><?=getLanguage('all','parent')?></th>
                        </tr>
                        <?php
                            $i= $start;
                            foreach ($datas as $item) {
                                ?>
                                <tr class="row_content item_<?=$item->id; ?> edit" id="<?=$item->id; ?>" >
                                    <td style="text-align: center;"><input class="chkrow" type="checkbox" name="keys[]" id="<?=$item->id; ?>"></td>
                                    <td class="center"><?=$i;?></td>
                                    <td class="name"><?=$item->menu_name;?></td>
                                    <td class="link"  ><?=$item->menu_link;?></td>
                                    <td>
                                        <?php for ($j=0;$j<count($list);$j++){
                                            if ($item->menu_parent==$list[$j]->id) {
                                                echo $list[$j]->menu_name;
                                                break;
                                            }
                                        };?>
                                    </td>
                                    <input type="hidden" value="<?php echo $item->menu_parent;?>"  class="parent"  />
                                </tr>
                                <?php
                                $i++;
                            }?>
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