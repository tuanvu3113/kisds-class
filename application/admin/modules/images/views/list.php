<style>
    .images{
        width:100%;
    }
    .images_item{        
        float:left;
        width:200px;
        height:255px;
        border: 1px solid #d1dde2;
        margin: 10px 25px 10px 25px;
    }
    .images > .images_item > .title {
        background-color:#fff;
        border: 1px solid #d1dde2;
        border-left:none;
        border-right:none;
        border-top:none;
        background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(226, 234, 244, 1) 100%) repeat scroll 0 0;
        text-align: center;
        padding:5px;
    }
    .images > .images_item > .title > input{
        float:left;
    }
    .images > .images_item> .content{
        padding:10px;
    }
    .images > .images_item > .content > img{
        width:175px;
        height:175px;
    }
    .images > .images_item > .link{
        padding:0px 10px 0px 10px;
    }
    .images > .images_item> .link > input{
        width:100%;
        background-color:white;
        border: 1px solid #d1dde2;
       
    }
</style>
<div class="portlet-title">
    <div class="caption">
        <i>Found <span class='viewtotal'><?php echo count($datas);?></span> results</i>
    </div>
    <div class="tools">
        <a href="javascript:;" class="collapse"></a>
    </div>
</div>

<div class="portlet-body">
    <div class="check"><a href="javascript:void(0)" class="checkAll">Check all</a> / <a href="javascript:void(0)" class="uncheckAll">Uncheck all</a></div>
            <div class="images">
                <?php 
                            $i= $start;
                            foreach ($datas as $item) { 
                                ?>
                <div class="images_item">
                    <div class="title">
                        <input  type="checkbox" value="<?=$item->id;?>" />
                        <?=$item->image_name;?>
                    </div>
                    <div class="content">
                        <img src="<?=base_url();?>images/general/<?=$item->image_file;?>" class="image_view"  />
                    </div>
                    <div class="link">
                        <input type="text" value="/images/general/<?=$item->image_file;?>" disabled="true"/>
                    </div>
                </div>                
                            <?php	
                            $i++;
                            }
                        ?>    
                <div style="clear:both;"></div>
            </div>
    <div class="portlet-body">
        <div class="fleft" id="paging">
<!--            -->
        </div>
    </div>
</div>
<script>
    $(".checkAll").click(function(){
        $.each($("input[type=checkbox]"),function(){
            $(this).attr("checked","checked");
        })
    })
    $(".uncheckAll").click(function(){
        $.each($("input[type=checkbox]"),function(){
            $(this).removeAttr("checked");
        })
    })
    $(".image_view").dblclick(function(){
        
        var img = $(this); // Get my img elem
        var pic_real_width, pic_real_height;
        $("<img/>").attr("src", $(img).attr("src")).load(function() {
            pic_real_width = this.width+50;   // Note: $(this).width() will not
            pic_real_height = this.height+50; // work for in memory images.
            $( "#image_preview" ).dialog({
                autoOpen: false,
                width: pic_real_width,
                height:pic_real_height,
                modal:false
            });
            $( "#image_preview" ).html("<img src='"+$(this).attr("src")+"'/>");
            $( "#image_preview" ).dialog("open");
        });
        
        
    })
</script>
