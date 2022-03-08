$(function () {	
		//Tinh do rong cac cot
		var w = 0; var attw; var arr = [];
		$('.tbtop th').each(function(e){
			var attw = parseInt($(this).attr('width'));
			if(!isNaN(attw)){
				w+=attw;
			}
			else{
				attw = 'auto';
			}
			arr[e] = attw;
		});
		var ws = parseInt(w*20/100);
		w+=ws;
		$('.tbtop').width(w); //Gan do rong table
		$('.tbcenter').width(w-20); //Gan do rong table
		var toptitle = parseInt($('.toptitle').height())+10;
		$('.tbtop').css('margin-top',toptitle);
		$('#table').find('#ccenter').scroll(function(obj) {
			var scrollLeft = $(this).scrollLeft();
			var scrollTop = $(this).scrollTop();
			$('#table').find('#header').scrollTo(scrollLeft, 0);
		});
		//Clikc o checkbox
		/*$(":checkbox[name='keys[]']").each(function(e){
			$(this).click(function(){
				var check = $(":checkbox[name='keys[]']").eq(e).is(':checked');
				if(check == true){
					$(":checkbox[name='keys[]']").eq(e).removeAttr('checked');
				}
				else{
					$(":checkbox[name='keys[]']").eq(e).attr('checked',true);
				}
			});
		});*/
		$(":checkbox[name='keys[]']").click(function(){
				var len = $(":checkbox[name='keys[]']:checked").length;
				var len2 = $(":checkbox[name='keys[]']").length;
				$ch = (len==len2)?true:false;
				$("#checkall").attr('checked',$ch);
		});
		$("#checkall").click(function(){
			if($("#checkall").is(':checked')){
				$(":checkbox[name='keys[]']").attr('checked',true);
			}
			else{
				$(":checkbox[name='keys[]']").removeAttr('checked');
			}
		});
	});