<?php

use App\CustomPage;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CustomPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        CustomPage::insert([
            [
                'title' => 'About Us',
                'slug' => 'about',
                'image_parallax' => 'custom-pages/dummy/about.jpg',
                'body' => '     <!--About Us-->
                                <section class="content-section specific-module">
                                    <div class="col-lg-8  div-center div-center2">
                                        <div class="specific-content">
                                            <h5 class="black wow fadeInDown">Discover Our Jewellery</h5>
                                            <h2 class="title-h wow fadeInDown"> Collections </h2>
                                            <div class="wow fadeIn text-style">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vulputate nisi vel metus scelerisque, eu auctor mauris fringilla. Mauris hendrerit congue sapien, quis aliquet velit tempus sed. Sed ac purus augue.</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="container">
                                        <div class="row m-0">
                                            <div class="col-md-6 about-left wow fadeInLeft">&nbsp;</div>
                                            <div class="col-md-6  wow fadeInRight">
                                                <div class="about-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo varius vehicula. Mauris porta metus vitae nulla dignissim egestas. Aliquam sed molestie eros, in pharetra purus. Praesent consequat porta viverra. Praesent gravida dapibus condimentum. Vestibulum vel lacus aliquet, laoreet mi eu, tempor est. Quisque volutpat finibus tristique.  Praesent gravida dapibus condimentum. Vestibulum vel lacus aliquet, laoreet mi eu, tempor est. Quisque volutpat finibus tristique.</p>
                                                    <p class="marg-0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo varius vehicula. Mauris porta metus vitae nulla dignissim egestas. Aliquam sed molestie eros, in pharetra purus. Praesent consequat porta viverra. Praesent gravida dapibus condimentum. Vestibulum vel lacus aliquet, laoreet mi eu, tempor est. Quisque volutpat finibus tristique. Duis at nibh eget nulla pretium pretium. Quisque arcu sem, dignissim eu egestas quis, vulputate non mauris.  Praesent gravida dapibus condimentum. Vestibulum vel lacus aliquet, laoreet mi eu, tempor est. Quisque volutpat finibus tristique.  Praesent gravida dapibus condimentum.  Praesent gravida dapibus condimentum. Vestibulum vel lacus aliquet, laoreet </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </section>
                                <!--two images-->
                                <section class="content-section  product-bg">
                                    <h2 style="display:none">&nbsp;</h2>
                                    <div class="clearfix"></div>
                                    <div class="img-div3">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 wow fadeInLeft"> <a href="product.html" class="right-img">
                                                    <div><img  src="assets/images/products/2.jpg" class="img-fluid grayscale" alt="" title=""></div>
                                                </a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 wow fadeInRight"> <a href="product.html" class="right-img">
                                                    <div><img  src="assets/images/products/1.jpg" class="img-fluid grayscale" alt="" title=""></div>
                                                </a> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </section>
                                <div class="clearfix"></div>
                                <!--testimonials-->
                                <div class="tetpbg">
                                    <div class="container">
                                        <div class="row">
                                            <div class=\'col-md-12 text-center\'>
                                                <div class="title-box  wow fadeIn">
                                                    <h2>Hear what our <span>clients</span> say</h2>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class=\'row\'>
                                            <div class=\'col-md-12 col-center\'>
                                                <div class="carousel slide wow fadeIn" data-ride="carousel" id="quote-carousel">
                                                    <!-- Carousel Slides / Quotes -->
                                                    <div class="carousel-inner">
                                                        <!-- Quote 1 -->
                                                        <div class="carousel-item active">
                                                            <div class="row">
                                                                <div class="col-sm-9 col-center text-center"> <img class="img-circle"  src="assets/images/testimonial-be.jpg" alt="" title=""> </div>
                                                                <div class="col-sm-9 col-center">
                                                                    <div class="clients text-center"><img  src="assets/images/coma.jpg" class="coma1" alt="" title=""> Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller <img  src="assets/images/coma2.jpg" class="coma12" alt="" title=""></div>
                                                                    <p class="clients-name">- Clients name - </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Quote 2 -->
                                                        <div class="carousel-item">
                                                            <div class="row">
                                                                <div class="col-sm-9 col-center text-center"> <img class="img-circle"  src="assets/images/testimonial-be2.jpg" alt="" title=""> </div>
                                                                <div class="col-sm-9 col-center">
                                                                    <div class="clients text-center"><img  src="assets/images/coma.jpg" class="coma1" alt="" title=""> Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text seit 1500, als ein unbekannter Schriftsteller <img  src="assets/images/coma2.jpg" class="coma12" alt="" title=""></div>
                                                                    <p class="clients-name"> - Clients name - </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Carousel Buttons Next/Prev -->
                                                    <a data-slide="prev" href="#quote-carousel" class="left left-arrow"><i class="fa fa-chevron-left"></i></a> <a data-slide="next" href="#quote-carousel" class="right right-arrow"><i class="fa fa-chevron-right"></i></a> </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>',
                'extra_css_top' => null,
                'extra_js_bottom' => null,
                'status' => CustomPage::STATUS_ACTIVE,
                'layout' => CustomPage::LAYOUT_CONTAINER_FLUID,
                'breadcrumbs' => false,
                'column_right_left' => CustomPage::COLUMN_DEFAULT,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Terms & Conditions',
                'slug' => 'terms',
                'image_parallax' => 'custom-pages/dummy/terms.jpg',
                'body' => ' <div class="text-style2"><p class="wow fadeIn">The following terms and conditions Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            <div class="inner-section terms-text">
                                <div class="wow fadeIn">
                                    <h2>1. Acceptance</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>2. Charges</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>3. Client Review</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>4. Turnaround Time and Content Control</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>6. Payment</h2>
                                    <p>Invoices will be provided by Wombat Creative Limited upon completion but before publishing the live website. Invoices are normally sent via email; however, the Client may choose to receive hard copy invoices. Invoices are due upon receipt. Accounts that remain unpaid thirty (30) days after the date of the invoice will be assessed a service charge in the amount of the higher of one and one-half percent (1.5%) or £30 per month of the total amount due.</p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>7. Additional Expenses</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>8. Web Browsers</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>9. Default</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>10. Termination</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                            </div>',
                'extra_css_top' => null,
                'extra_js_bottom' => null,
                'status' => CustomPage::STATUS_ACTIVE,
                'layout' => CustomPage::LAYOUT_CONTAINER_DEFAULT,
                'breadcrumbs' => true,
                'column_right_left' => CustomPage::COLUMN_DEFAULT,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'Privacy',
                'slug' => 'privacy',
                'image_parallax' => 'custom-pages/dummy/privacy.jpg',
                'body' => ' <div class="text-style2"><p class="wow fadeIn">The following terms and conditions Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>
                            <div class="inner-section terms-text">
                                <div class="wow fadeIn">
                                    <h2>1. Acceptance</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>2. Charges</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>3. Client Review</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>4. Turnaround Time and Content Control</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>6. Payment</h2>
                                    <p>Invoices will be provided by Wombat Creative Limited upon completion but before publishing the live website. Invoices are normally sent via email; however, the Client may choose to receive hard copy invoices. Invoices are due upon receipt. Accounts that remain unpaid thirty (30) days after the date of the invoice will be assessed a service charge in the amount of the higher of one and one-half percent (1.5%) or £30 per month of the total amount due.</p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>7. Additional Expenses</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>8. Web Browsers</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>9. Default</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                                <div class="wow fadeIn">
                                    <h2>10. Termination</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. </p>
                                </div>
                            </div>',
                'extra_css_top' => null,
                'extra_js_bottom' => null,
                'status' => CustomPage::STATUS_ACTIVE,
                'layout' => CustomPage::LAYOUT_CONTAINER_DEFAULT,
                'breadcrumbs' => true,
                'column_right_left' => CustomPage::COLUMN_DEFAULT,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'title' => 'FAQ',
                'slug' => 'faq',
                'image_parallax' => 'custom-pages/dummy/faq.jpg',
                'body' => '<div class="inner-section">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="headingOne">
                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit  ?</a> </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="headingTwo">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus  ?</a> </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="headingThree">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Aenean consequat lorem ut felis ullamcorper  ?</a> </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="heading4">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseThree"> Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus  ?</a> </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="heading5">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5"> Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus  ?</a> </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="heading6">
                                <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse5"> Aenean consequat lorem ut felis ullamcorper  ?</a> </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-bg" role="tab" id="heading7">
                                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapseOne"> Lorem ipsum dolor sit amet, consectetur adipiscing elit  ?</a> </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS. </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- panel-group -->
                    <div class="clearfix"></div>
                </div>',
                'extra_css_top' => '<style>
                                        .panel-title a {
                                            color: #222;
                                            display: block;
                                            padding: 15px!important;
                                        }
                                        .panel-body {
                                            border: solid 1px #ccc;
                                            margin: 0 0 5px 0;
                                        }
                                    </style>',
                'extra_js_bottom' => null,
                'status' => CustomPage::STATUS_ACTIVE,
                'layout' => CustomPage::LAYOUT_CONTAINER_DEFAULT,
                'breadcrumbs' => true,
                'column_right_left' => CustomPage::COLUMN_DEFAULT,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
