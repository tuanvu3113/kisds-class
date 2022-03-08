<link href="<?=url_tmpl();?>admin/css/tree.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?=url_tmpl();?>admin/js/jquery.tree.js"></script>

<div  style="height:370px; overflow-y:auto; float:left;width:392px; margin-left:-13px; border: 1px solid #d1dde2 !important; border-radius: 5px !important;">
       <div ><input type="hidden" value="<?=$id;?>" id="ids" />
         <div style="margin-top:10px;"><div id="tree"></div></div>
       </div>
</div>
<ul class="button-group pull-right" style="margin-right:0px; margin-top:6px;">
	<li id="cancel"><button class="button" style="height: 26px; padding: 2px 10px;">Cancel</button></li>
	<li id="saveright"><button class="button" style="height: 26px; padding: 2px 10px;">Save</button></li>
</ul>
<style type="text/css">

	.bbit-tree-node-anchor > span{
		font-family:Arial, Helvetica, sans-serif; font-size:14px;
	}
</style>
<script type="text/javascript">
	function createNode(){
	  var root = {
		"id" : "0",
		"text" : "Select All",
		"value" : "86",
		"showcheck" : true,
		complete : true,
		"isexpand" : true,
		"checkstate" : <?=$root?>,
		"hasChildren" : true
	  };

	  root["ChildNodes"] = <?=$menu?>;
	  return root;
	}
	treedata = [createNode()];
	var userAgent = window.navigator.userAgent.toLowerCase();
    $.browser.msie8 = $.browser.msie && /msie 8\.0/i.test(userAgent);
    $.browser.msie7 = $.browser.msie && /msie 7\.0/i.test(userAgent);
    $.browser.msie6 = !$.browser.msie8 && !$.browser.msie7 && $.browser.msie && /msie 6\.0/i.test(userAgent);
	function load() {
		var o = { showcheck: true,
		cbiconpath:'<?=url_tmpl();?>/admin/css/images/icons/'
		};
		o.data = treedata;
		$("#tree").treeview(o);

	}
	if( $.browser.msie6){
		load();
	}
	else{
		$(document).ready(load);
	}
	$(function(){
		$("#cancel").click(function(){
			$("#dialog").dialog( "close" );
		});
	})
</script>
<style type="text/css">
	tr:nth-child(2n+1) {
		background:none !important;
		border:none !important;
	}
</style>