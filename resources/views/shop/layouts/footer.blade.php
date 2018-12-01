<div class="footer-css">
    <div class="newsletter wow fadeIn">
        <div class="container">
            <div class="p-color-bg">
                <div class="text float-left"> <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h2><span>Subscribe</span> Newsletter</h2>
                    <p>Get all latesr news and  Offer by subcribing to our Newsletter</p>
                    <div class="clearfix"></div>
                </div>
                <!-- /.text -->
                <div class="float-right">
                    <form method="post" id="subsForm" onSubmit="return ajaxmailsubscribe();">
                        <input placeholder="Your Email Address" type="email" name="subsemail" id="subsemail">
                        <button class="theme-button"  type="button" value="SUBSCRIBE" onClick="return ajaxmailsubscribe();"> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        <!--<input class="theme-button"/><i class="fa fa-angle-right" aria-hidden="true"></i>-->
                        <!--<button class="theme-button"><i class="fa fa-angle-right" aria-hidden="true"></i></button>-->
                    </form>
                </div>
                <!-- /.float-right -->
                <div class="clearfix"></div>
            </div>
            <!-- /.bg -->
        </div>
        <!-- /.container -->
    </div>
    <div class="clearfix"></div>
    <div class="footer-in">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3  wow fadeIn" data-wow-delay=".1s">
                    <div class="logo-f"><img src="assets/images/logo-2.png" alt="" title="" ></div>
                    <div class="about-b">
                        <div class="footer-text">
                            <p>Es ist ein lang erwiesener Fakt, dass ein Leser vom Text abgelenkt wird, wenn er sich ein Layout ansieht. Der Punkt, Lorem Ipsum zu nutzen, ist, dass es mehr oder weniger.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{ menu('social_media', 'shop.partials.menus.social_footer') }}
                    <div class="clearfix"></div>
                    <br>
                </div>
                <div class="col-md-3 col-sm-3 link-footer  wow fadeIn" data-wow-delay=".2s">
                    <h2>Quick Links</h2>
                    <ul class="pull-left">
                        <li><a href="about-us.html"> <i class="fa fa-stop" aria-hidden="true"></i> About</a></li>
                        <li><a href="product.html"><i class="fa fa-stop" aria-hidden="true"></i> Shop Now</a></li>
                        <li><a href="blog.html"><i class="fa fa-stop" aria-hidden="true"></i> Blog</a></li>
                        <li><a href="terms-and-conditions.html"><i class="fa fa-stop" aria-hidden="true"></i> Terms & Condition</a></li>
                        <li><a href="privacy.html"><i class="fa fa-stop" aria-hidden="true"></i> Privacy</a></li>
                        <li><a href="faq.html"><i class="fa fa-stop" aria-hidden="true"></i> FAQ</a></li>
                        <li><a href="contact-us.html"><i class="fa fa-stop" aria-hidden="true"></i> Contact Us</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-sm-3  wow fadeIn" data-wow-delay=".3s">
                    <h2>INSTAFEED</h2>
                    <div class="text-center"><img src="assets/images/instagram.png" alt="" title="" class="img-fluid"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-sm-3 footer-address  wow fadeIn" data-wow-delay=".4s">
                    <h2>Get In Touch</h2>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ setting('site.address') }}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone_view') }}</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 9:00pm - 5:00pm<br>
                            Sunday Closed </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="copyright">
        <div class="footer-in">
            <div class="pull-left"> ©  2018. <a href="index-2.html">Jewellery Shoppe</a> </div>
            <div class="pull-right"> Lovingly Crafted By <a href="http://srgit.com/" target="_blank">SRGIT</a> </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
