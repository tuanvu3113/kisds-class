<div id="contact">
        <div class="content-wrap pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="p_subject" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                        <div class="spacer-content"></div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- MAPS -->
    <div class="maps-wraper">
        <div id="cd-zoom-in"></div>
        <div id="cd-zoom-out"></div>
        <div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="/images/cd-icon-location.png">
        </div>
    </div>