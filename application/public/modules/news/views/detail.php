<!-- CONTENT -->
<div id="class" class="">
    <div class="content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="single-news">
                        <div class="media">
                            <img src="/images/dummy-img-900x600.jpg" alt="" class="rounded img-fluid">
                        </div>
                        <?php foreach ($content as $key) { ?>
                            <h2 class="title"><?=(isset($key->news_title)?$key->news_title:''); ?></h2>
                            <?php echo $key->news_content; 
                        } ?>
                    </div>
                    <div class="author-box">
                        <div class="media">
                            <img src="/images/dummy-img-400x400.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="body">
                            <h4 class="media-heading"><span>Author :</span>John Doel</h4>
                            We are also create and designing template for categories Graphic template and Game asset. in November 2014, we have won big contest Envato most wanted for categories game assets.
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end author box -->
                    <div class="comments-box">
                        <h4 class="title-heading">Comments <span>(3)</span></h4>

                        <div class="media comment">
                            <img class="mr-3" alt="80x80" src="/images/dummy-img-400x400.jpg" style="width: 64px; height: 64px;">
                            <div class="media-body">
                                <h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">August 24, 2014</small>
                                </h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <div class="media reply-comment">
                            <img class="mr-3" alt="80x80" src="/images/dummy-img-400x400.jpg" style="width: 64px; height: 64px;">
                            <div class="media-body">
                                <h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">August 24, 2014</small>
                                </h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <div class="media comment">
                            <img class="mr-3" alt="80x80" src="/images/dummy-img-400x400.jpg" style="width: 64px; height: 64px;">
                            <div class="media-body">
                                <h5 class="media-heading mt-0 mb-1">Susi Doel<small class="date">August 24, 2014</small>
                                </h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

                    </div>
                    <!-- end comment -->
                    <div class="leave-comment-box">
                        <h4 class="title-heading">Leave Comments</h4>
                        <form action="#" class="form-comment">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" value="" class="inputtext form-control" placeholder="Enter Website">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <textarea id="message" name="message" class="inputtext form-control" rows="6" placeholder="Enter Your Message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <button id="send" type="submit" class="btn btn-primary">Post Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="widget categories" style="display: none;">
                        <ul class="category-nav">
                            <li class="active"><a href="#">Why Choose Us</a></li>
                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Enrichment</a></li>
                            <li><a href="#">Meet Our Staff</a></li>
                            <li><a href="#">Staff Corner</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-text" style="display: none;">
                        <div class="widget-title">
                            Text Widget
                        </div>
                        <p><strong>Pets is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. it is designed for pet care, clinic, veterinary, shop, store, adopt, food, pets, businesses or any type of person or business who wants to showcase their work, services and professional way.</strong></p>
                        <p>Nam efficitur orci quis leo tincidunt, ac lacinia purus aliquet. Nam pellentesque pretium nibh cursus diam dapibus a.</p>
                    </div>

                    <div class="widget widget-archive">
                        <div class="widget-title">
                            Archive
                        </div>
                        <select class="form-control">
                            <option>April 2017</option>
                            <option>March 2017</option>
                            <option>February 2017</option>
                            <option>January 2017</option>
                        </select>
                    </div>

                    <div class="widget tags">
                        <div class="widget-title">
                            Tags
                        </div>
                        <div class="tagcloud">
                            <a href="#" title="3 topics">business</a>
                            <a href="#" title="1 topic" >care</a>
                            <a href="#" title="1 topic" >childcare</a>
                            <a href="#" title="4 topics" >children</a>
                            <a href="#" title="2 topics" >clean</a>
                            <a href="#" title="1 topic" >corporate</a>
                            <a href="#" title="2 topics" >happykids</a>
                            <a href="#" title="1 topic" >homeschool</a>
                            <a href="#" title="2 topics" >kids</a>
                            <a href="#" title="5 topics">kindergarten</a>
                            <a href="#" title="2 topics">themeforest</a>
                            <a href="#" title="1 topic" >playground</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>