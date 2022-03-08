<!-- OUR NEWS -->
<div class="section" id="from-news">
    <div class="content-wrap">
        <div class="container">
            <div class="row" id="listData">

            </div>
            <div class="col-sm-12 col-md-12" id="showpagination">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var controller = '<?= $controller; ?>/';
    var cpage = 1;
    $(document).ready(function () {
        getData(1);
    });

    function getDataPage(page){
        getData(page);
        setTimeout(function () {
            $('body, html').animate({scrollTop:0},800);
        }, 1000);
    }

    function getData(page = "") {
        if(page !== ''){
            cpage = page;
        }
        $(".loader").delay(400).fadeOut();
        $(".animationload").delay(400).fadeOut("fast");
        $.ajax({
            url: controller + 'getList',
            async: false,
            type: 'POST',
            data: {page: cpage},
            success: function (datas) {
                var obj = JSON.parse(datas);
                if (obj.content !== '') {
                    $('#listData').html(obj.content);
                    if (obj.count > 10) {
                        $("#showpagination").html(obj.paging);
                    }
                }
                else {
                    window.location.href = "/page404";
                }
            },
            error: function () {
            }
        });
    }
</script>