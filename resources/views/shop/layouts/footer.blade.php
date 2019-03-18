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
                    <form action="{{ route('shop.newsletter.mailChimp') }}" method="POST" id="subsForm">
                        {{ csrf_field() }}
                        <input placeholder="Your Email Address" type="email" name="email">
                        <button class="theme-button"  type="submit">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </button>
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
                    <div class="logo-f"><img src="{{ settingsAdminImageExist(setting('site.logo_footer'), "logo") }}" alt="" title="" ></div>
                    <div class="about-b">
                        <div class="footer-text">
                            <p>{{ setting('site.description') }}</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    {{ menu('social_media', 'shop.partials.menus.social_footer') }}
                    <div class="clearfix"></div>
                    <br>
                </div>
                <div class="col-md-3 col-sm-3 link-footer  wow fadeIn" data-wow-delay=".2s">
                    <h2>Quick Links</h2>
                    {{ menu('quick_links', 'shop.partials.menus.quick_links') }}
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-sm-3  wow fadeIn" data-wow-delay=".3s">
                    <h2>INSTAFEED</h2>
                    <ul class="lightwidget lightwidget--grid lightwidget--grid-3 lightwidget--hover-show-instagram-icon lightwidget--image-format-square" data-id="ffd1f5637e125542b95bdc39b7d98b91">
                        <div id="instafeed" class="row"></div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 col-sm-3 footer-address  wow fadeIn" data-wow-delay=".4s">
                    <h2>Get In Touch</h2>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ setting('site.address') }}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{ setting('site.phone') }}">{{ setting('site.phone_view') }}</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{ setting('site.daily_hour') }}</li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="copyright">
        <div class="footer-in">
            <div class="pull-left"><a href="{{ route('shop.home.index') }}">{{ setting('site.title') }} © 2017 - {{ date('Y') }}. All Rights Resrved.</a> </div>
            <div class="pull-right"> Powered by <a href="http://gtsaxrelias.tk/" target="_blank">Giorgos Tsaxrelias</a> </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
