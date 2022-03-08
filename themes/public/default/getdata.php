<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="author" content="greystonevn.com"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <title>Greystone Data Technology</title>
        <link rel="shortcut icon" type="image/ico" href='<?= url_tmpl(); ?>img/favicon.ico' />
        <link href="<?= url_tmpl(); ?>css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/animate.min.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/owl.carousel.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/owl.transitions.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/custom.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/responsive.css" rel="stylesheet"/>
        <link href="<?= url_tmpl(); ?>css/font.css" rel="stylesheet"/>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/jquery.json.js"></script>

        <script type="text/javascript" src="<?= url_tmpl(); ?>highcharts/js/highcharts.js"></script>
        <script type="text/javascript" src="<?= url_tmpl(); ?>highcharts/js/modules/exporting.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'line'
                    },
                    title: {
                        text: 'Productivity'
                    },
                    /*subtitle: {
                     text: 'Source: WorldClimate.com'
                     },*/
                    xAxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                    },
                    yAxis: {
                        title: {
                            text: 'App'
                        }
                    },
                    plotOptions: {
                        line: {
                            dataLabels: {
                                enabled: true
                            },
                            enableMouseTracking: false
                        }
                    },
                    series: [{
                            name: 'Android',
                            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                        }, {
                            name: 'iOS',
                            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                        }]
                });
            });
        </script>
        <style>
            .highcharts-button{
                display:none;
            }
        </style>
    </head>
    <body>
        <center>
            <section class="wapper">
                <!--S Layer banner-->
                <?= $content; ?>
                <!--S Layer Content 2-->
                <!--S Layer footer-->
                <div class="clear"></div>
                <!--E Layer footer-->
            </section>
        </center>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?= url_tmpl(); ?>js/main.js"></script>
    </body>
</html>
