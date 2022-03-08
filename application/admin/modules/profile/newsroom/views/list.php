<div class="portlet-title">
    <div class="caption">
        <i>Found <span class='viewtotal'><?php echo count($datas);?></span> results</i>
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
                    <table width="100%" cellspacing="0" border="1" id="tb<?=$routes;?>" >
                        <tr>
                            <th width="40px" class="text-center"><input type="checkbox" name="checkAll" id="checkAll" /></th>
                            <th width="40px"><?=getLanguage('all','stt')?></th>
                            <th width="80px"><?=getLanguage('all','priority')?></th>
                            <th width="200px"><?=getLanguage('all','title')?></th>
                            <th><?=getLanguage('all','summary')?></th>
                            <th width="120px"><?=getLanguage('all','images')?></th>
                        </tr>
                        <tbody id="grid-rows">
                        <?php 
                            $i= $start;
                            foreach ($datas as $item) { 
                                ?>
                                <tr class="row_content edit" id="<?=$item->id; ?>" >
                                        <td style="text-align: center;">
                                        <input class="" type="checkbox" name="keys[]" id="<?=$item->id; ?>"></td>
                                        <td class="center"><?=$i;?></td>
                                        <td class="priority"><?=$item->news_priority;?></td>
                                        <td class="title"><?=$item->news_title;?></td>
                                        <td class="content"  ><?=$item->news_summary;?></td>
                                        <td class="image"><img src="<?=base_url();?>images/news/<?=$item->news_image;?>" width=110px height=100px /></td>
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

