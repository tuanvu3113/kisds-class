/*$(function(){
	$("#data").scroll(function () {
		var scrollLeft = $(this).scrollLeft();
		$("#tHeader").scrollTo(scrollLeft,0,0);
	});
});*/
$(function(){
	$("#data").scroll(function () {
		var scrollLeft = $(this).scrollLeft();
		$("#tHeader").scrollTo(scrollLeft,0,0);
	});
	/*$("#tbheader").colResizable({
		liveDrag:true, 
		//gripInnerHtml:"<div class='grip'></div>", 
		draggingClass:"dragging",
		onResize:onSampleResized
	});*/
});
var onSampleResized = function(e){
	var columns = $(e.currentTarget).find("th");
	var columnsTD = $("#tbbody").find("tr:first-child");	
	$("table#tbbody").removeAttr('width');	
	columns.each(function(index){ 
		var w = $(this).width()+1;
		$("table#tbbody colgroup:first col:nth-child(" + (index+1) + ")").css('width',w+'px');
		$("table#tbbody tr:first td:nth-child(" + (index+1) + ")").css('width',w+'px');		
	});
	$("table#tbbody").css('width',$(e.currentTarget).width()+'px');
	//$("#sample2Txt").html(msg);*/
};	