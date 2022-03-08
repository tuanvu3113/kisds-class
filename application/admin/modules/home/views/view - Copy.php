<style title="" type="text/css">
	table col.c1 { width: 45px; }
	table col.c2 { width: 60px; }
	table col.c3 { width: 250px; }
	table col.c4 { width: 100px; }
	table col.c5 { width: 100px; }
	table col.c6 {width: auto;}
</style>
<!-- BEGIN PORTLET-->
<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-search" style="margin-top:2px;"></i>
			Search
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse">
			</a>
		</div>
	</div>
	<div class="portlet-body">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Nhóm quyền</label>
						<div class="col-md-8">
							<input type="text" name="groupname" id="groupname" class="searchs form-control" required />
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Loại quyền</label>
						<div class="col-md-8">
							<select name="grouptype combo" id="grouptype">
								<option value="">Select a group type</option>
								<option value="-1">Root</option>
								<option value="0">Admin</option>
								<option value="1">Guest</option>
								<option value="2">Manager</option>
								<option value="3">User</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4">Bộ phận</label>
						<div class="col-md-8">
							<select name="department combo" id="department">
								<?php foreach ($departments as $key => $value) { ?>
									<option value="<?=$value->country_id ?>"><?=$value->name ?></option>	
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row mtop10">
				<div class="col-md-12">
					<div class="mright10" >
						<input type="hidden" name="id" id="id" />
						<input style="width:300px;" type="hidden" id="token" name="<?=$csrfName;?>" value="<?=$csrfHash;?>" />
						<ul class="button-group pull-right">
							<li id="search">
								<button class="button">
									<i class="fa fa-search"></i>
									<?=$lang['all']['tim-kiem']?>
								</button>
							</li>
							<li id="refresh" >
								<button class="button">
									<i class="fa fa-refresh"></i>
									<?=$lang['all']['lam-moi']?>
								</button>
							</li>
							<?php if(isset($permission['add'])){?>
							<li id="save"><button class="button">
								<i class="fa fa-plus"></i>
								<?=$lang['all']['them-moi']?>
								</button>
							</li>
							<?php }?>
							<?php if(isset($permission['edit'])){?>
							<li id="edit">
								<button class="button">
									<i class="fa fa-save"></i>
									<?=$lang['all']['sua']?>
								</button>
							</li>
							<?php }?>
							<?php if(isset($permission['delete'])){?>
							<li id="delete">
								<button type="button" class="button">
									<i class="fa fa-times"></i>
									<?=$lang['all']['xoa']?>
								</button>
							</li>
							<?php }?>
						</ul>
					</div>		
				</div>
			</div>
	</div>
</div>

<div class="portlet box blue">
	<div class="portlet-title">
        <div class="caption">
            <i>Found <span class='viewtotal'>0</span> results</i>
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
    	<div class="portlet-body">
        	<div id="gridview" >
				<table class="resultset" id="grid"></table>
				<!--header-->
				<div id="cHeader">
					<div id="tHeader">    	
						<table width="100%" cellspacing="0" border="1" >
							<?php for($i=1; $i< 5; $i++){?>
								<col class="c<?=$i;?>">
							<?php }?>
							<tr>
								<th><input type="checkbox" id="checkAll" autocomplete="off" /></th>
								<th>STT</th>
								<th>Group Name</th>
								<th>Right</th>
								<th></th>
							</tr>
						</table>
					</div>
				</div>
				<!--end header-->
				<!--body-->
				<div id="data">
					<div id="gridView">
						<table  width="100%" cellspacing="0" border="1">
							<?php for($i=1; $i< 5; $i++){?>
								<col class="c<?=$i;?>">
							<?php }?>
							<tbody id="grid-rows"></tbody>
						</table>
					</div>
				</div>
				<!--end body-->
            </div>
        </div>
        <div class="portlet-body">
			<div class="fleft" id="paging"></div>
        </div>
    </div>
</div>
<!-- END PORTLET-->
<div class="loading" style="display: none;">
	<div class="blockUI blockOverlay" style="width: 100%;height: 100%;top:0px;left:0px;position: absolute;background-color: rgb(0,0,0);opacity: 0.1;z-index: 1000;">
	</div>
	<div class="blockUI blockMsg blockElement" style="width: 30%;position: absolute;top: 15%;left:35%;text-align: center;">
		<img src="<?=url_tmpl()?>img/ajax_loader.gif" style="z-index: 2;position: absolute;"/>
	</div>
</div> 
<!-- ui-dialog -->
<div id="dialog" title="Right"></div>
<script>
	var controller = '<?=base_url().$routes;?>/';
	var csrfHash = '<?=$csrfHash;?>';
	var table;
	var cpage = 0;
	var search;
	var routes = '<?=$routes;?>';
	$(function(){	
		$("#grouptype").multipleSelect({
			filter: true,
			placeholder:'Chọn nhóm quyền',
			single: true
		});
		$("#department").multipleSelect({
			filter: true,
			placeholder:'Chọn bộ phận',
			single: false
		});
		refresh();
		$("#search").click(function(){
			$(".loading").show();
			searchList();	
		});
		$("#refresh").click(function(){
			$(".loading").show();
			refresh();
		});
		$("#save").click(function(){
			search = getSearch();
			var token = $("#token").val();
			$.ajax({
				url : controller + 'save',
				type: 'POST',
				async: false,
				data: {csrf_stock_name:token,search:search , id:""},
				success:function(datas){
					var obj = $.evalJSON(datas); 
					$("#token").val(obj.csrfHash);
					if(obj.status == 0){
						error("Thêm mới không thành công."); return false;	
					}
					else if(obj.status == -1){
						error("Nhóm quyền đã tồn tại."); return false;		
					}
					else{
						refresh();
					}
				},
				error : function(){
					
				}
			});
		});
		$("#edit").click(function(){
			search = getSearch();
			var token = $("#token").val();
			var id = $("#id").val();
			$.ajax({
				url : controller + 'edit',
				type: 'POST',
				async: false,
				data: {csrf_stock_name:token,search:search , id:id},
				success:function(datas){
					var obj = $.evalJSON(datas); 
					$("#token").val(obj.csrfHash);
					if(obj.status == 0){
						error("Sửa nhóm quyền không thành công."); return false;	
					}
					else if(obj.status == -1){
						error("Nhóm quyền đã tồn tại."); return false;		
					}
					else{
						refresh();
					}
				},
				error : function(){
					
				}
			});
		});
		$("#delete").click(function(){ 
			var id = getCheckedId();
			var token = $("#token").val();
			$.ajax({
				url : controller + 'deletes',
				type: 'POST',
				async: false,
				data: {csrf_stock_name:token,id:id},
				success:function(datas){
					var obj = $.evalJSON(datas); 
					$("#token").val(obj.csrfHash);
					if(obj.status == 0){
						error("Xóa không thành công."); return false;		
					}
					else{
						refresh();	
					}
					
				},
				error : function(){
					
				}
			});
		});
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			height:460,
			modal:false
		});
	});
	function getCheckedId(){
		var strId = '';
		$('#'+routes).find('input:checked').each(function(){
			var id = $(this).attr('id');
			if(id != 'checkAll'){
				strId += ',' + $(this).attr('id') ;
			}
		})
		return strId.substring(1);
	}
    function funcList(obj){
		$(".edit").each(function(e){
			$(this).click(function(){ 
				 var groupname = $(".groupname").eq(e).html().trim();
				 var grouptype = $(this).attr('grouptype');
				 var department = $(this).attr('department');
				 var id = $(this).attr('id');
				 $("#id").val(id);	
				 $("#groupname").val(groupname);	
				 $("#department").multipleSelect('setSelects', department.split(','));
				 $("#grouptype").multipleSelect('setSelects', grouptype.split(','));
			});
			function getIDChecked(){
				return 1;	
			} 
		});	
		$(".permission").each(function(e){
			$(this).click(function(event){ 
				$( "#dialog" ).dialog( "open" );
				event.preventDefault();
				var id = $(this).attr('id');
				var token = $("#token").val();
				$.ajax({
					url : controller + 'getRight',
					type: 'POST',
					async: false,
					data: {csrf_stock_name:token, id:id},
					success:function(datas){
						var obj = $.evalJSON(datas); 
						$("#token").val(obj.csrfHash); 
						$('#dialog').html(obj.content);
						$("#saveright").click(function(){
							var right = getRight();
							token = $("#token").val();
							$.ajax({
								url : controller + 'setRight',
								type: 'POST',
								async: false,
								data: {csrf_stock_name:token, id:id, right:right},
								success:function(datas){
									var obj2 = $.evalJSON(datas);
									$("#token").val(obj2.csrfHash);
								}
							});
							$("#dialog").dialog( "close" );	
						});	
					},
					error : function(){
						
					}
				});
				return false;
			});
		});
	}
	function refresh(){
		$(".loading").show();
		$(".searchs").val("");
		$('#grouptype,#department').multipleSelect('uncheckAll');
		csrfHash = $('#token').val();
		search = getSearch();
		getList(cpage,csrfHash);	
	}
	function searchList(){
		search = getSearch();
		csrfHash = $('#token').val();
		getList(cpage,csrfHash);	
	}
	function getSearch(){
		var grouptype = getCombo('grouptype');
		var department = getCombo('department');
		var obj = '';
		$('.searchs').each(function(i){
			var id = $(this).attr('id');
			var val = $(this).val();
			obj +=',"'+id+'":"'+val+'"';		
		});
		return '{"department":"'+department+'","grouptype":"'+grouptype+'"'+obj+'}';
	}
</script>
<script src="<?=url_tmpl();?>js/right.js" type="text/javascript"></script>
<script src="<?=url_tmpl();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
