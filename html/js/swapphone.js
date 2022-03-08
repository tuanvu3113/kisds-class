$(function(){
//S Sorting
	$("[id^='ord_']").each(function(){
		$(this).click(function(){
			order =  $(this).attr('id');
			if(index == 'DESC'){
				index = 'ASC';
			}
			else{
				index = 'DESC';
			}
			$(".loading").show();
			searchList();
		});
	});
	//E Sorting
});
var getList = function (page,csrfHash){	
	$("#token").val('');
	$.ajax({
		  url:controller+'getList',
		  async: false,
		  type: 'POST',
		  data:{csrf_stock_name:csrfHash,page:page,search:search,order:order,index:index},
		  success:function(datas) {
			 var obj = $.evalJSON(datas);  
			 $('#paging').html(obj.paging);
			 $('#grid-rows').html(obj.content);
			 $("#token").val(obj.csrfHash);
			 var total = obj.viewtotal;
			 $(".viewtotal").html(total);
			 $(".loading").hide();
			 paging(obj.csrfHash);
			 if(typeof(func_get)=='function'){
				func_get(obj);
			 }
			  if(typeof(funcList)=='function'){
				  funcList(obj);
			  }
		  }
	});
}
function func_get(obj){
	$('.edit').each(function(e){
		 $(this).click(function(){
			  var id = $(this).attr('id');
			  var groupname = $(".groupname").eq(e).html();
			  $("#id").val(id);
			  $("#groupname").val(groupname);
		 }); 
		 $(this).click(function () { 
			//con tro toi tr
			var _this = $(this);
			//con tro toi check box
			var _checkbox = _this.find(":checkbox[name='keys[]']");
			//click hang nao thi check vao hang do
			var check = _checkbox.is(':checked');
			if(check == true){
				_checkbox.removeAttr('checked');
			}
			else{
				_checkbox.attr('checked',true);
			}
			//kiem tra xem co check all chua
			var len = $(":checkbox[name='keys[]']:checked").length;
			var len2 = $(":checkbox[name='keys[]']").length;
			$ch = (len==len2)?true:false;
			$("#checkAll").attr('checked',$ch);
		});
	});
}
function paging(csrfHash){
	$("#paging a").each(function(){
		$(this).click(function(){
			cpage = $(this).attr('name');
			getList(cpage,csrfHash);
			return false;
		});
	});
}
function getCombo(id){
	var val = $('#'+id).multipleSelect('getSelects');
	if(typeof val === 'object'){
		val = "";
	}
	return val;
}
$(function(){
	$("#checkAll").click(function() {
		$(":checkbox[name='keys[]']").attr('checked', $('#checkAll').is(':checked'));
	});
});
function error(text){
	$.msgBox({
		title: "Message",
		type: "error",
		content:text,
		buttons: [{value: 'Đóng'}]
	});
}
function success(text){
	$.msgBox({
		title: "Message",
		content:text,
		buttons: [{value: 'Đóng'}]
	});
}
function error_focus(text, idForcus){
	$.msgBox({
		title: "Message",
		type: "error",
		content:text,
		buttons: [{value: 'Đóng'}],
		afterClose: function(result) { 
			$('#'+ idForcus).focus();
		}
	});
}
