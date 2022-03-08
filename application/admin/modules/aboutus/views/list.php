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
                            <th width="120px"><?=getLanguage('products','name')?></th>
                            <th><?=getLanguage('all','title')?></th>
                            <th><?=getLanguage('all','description')?></th>
                            <th width="120px"><?=getLanguage('all','images')?></th>
                            <th><?=getLanguage('all','alias')?></th>
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
                                        <td class="product_name"><?=$item->product_name;?></td>
                                        <td class="product_title"><?=$item->product_title;?></td>
                                        <td class="product_description"  ><?=substr($item->product_description,0,100);?></td>
                                        <td class="product_image"><img src="<?=base_url();?>images/products/<?=$item->product_image;?>" width=110px height=100px/></td>
                                        <td class="product_alias"><?=$item->product_alias;?></td>
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

