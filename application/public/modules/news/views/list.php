<?php foreach ($datas as $item) {
    $date_tmp = date("d F Y", strtotime($item->date_created));
    ?>
    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
        <div class="rs-news-1">
            <div class="media-box">
                <a href="/news/<?= $item->id; ?>.html"><img src="images/news/dummy-img-600x400.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="body-box">
                <div class="title">
                    <a href="/news/<?= $item->id; ?>.html"><?php echo $item->news_title ?></a></div>
                    <div class="meta-date"><?=$date_tmp;?></div>
                    <p><?php echo $item->news_summary ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>