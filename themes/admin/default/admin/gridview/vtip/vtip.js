/**
 Vertigo Tip by www.vertigo-project.com
 Requires jQuery
 */

this.vtip = function() {

    var $widthVtip = 0;
//lay do rong cua man hinh trinh duyet		
    var $withPage = 0;
    var $posionX = 0;

    $(".vtip").live("mouseover",
            function(e) {
                //xac dinh chieu cao cua trinh duyet 
				
                //xac dinh scroll
                $posionX = $(window).scrollTop() - 5;
                //xac dinh do rong trinh duyet
                $withPage = $(window).width() / 2;


                $('body').append('<div id="vtip">' + $(this).attr("vtiptitle") + '</div>');


                var $anphaHeight = $(window).height() - $("#vtip").height();
                if ($anphaHeight > 0) {
                    this.top = $posionX + ($anphaHeight / 2);
                }
                else {
                    this.top = $posionX;
                }



                $widthVtip = $("#vtip").width() + 30;


                //vi tri xuat pop up toa do x

                if (e.pageX > $withPage) {
                    this.left = (e.pageX - $widthVtip);
                }
                else {
                    this.left = (e.pageX + 20);
                }

                $('div#vtip').css("top", this.top + "px").css("left", this.left + "px").fadeIn("slow");

            }
    ).live("mousemove",
            function(e) {


                var $anphaHeight = $(window).height() - $("#vtip").height();
                if ($anphaHeight > 0) {
                    this.top = $posionX + ($anphaHeight / 2);
                }
                else {
                    this.top = $posionX;
                }



                $widthVtip = $("#vtip").width() + 30;


                if (e.pageX > $withPage) {
                    this.left = (e.pageX - $widthVtip);
                }
                else {
                    this.left = (e.pageX + 20);
                }

                $("div#vtip").css("top", this.top + "px").css("left", this.left + "px");
            }
    ).live("click", function() {
        $("div#vtip").fadeOut("slow").remove();
    }).live("mouseout", function() {
        $("div#vtip").fadeOut("slow").remove();
    });
};

jQuery(document).ready(function($) {
    vtip();
}) 