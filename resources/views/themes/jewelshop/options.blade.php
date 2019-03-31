<?php

/**
 * Voyager Themes - Sample Theme
 * Created by Tony Lea and the DevDojo
 *
 * Use the theme_field() function to display fields in
 * your theme. Take a look at the function DEFINITION
 * EXAMPLE, EXPLANATION, and TYPES OF FIELDS below:
 *
 * 	DEFINITION:
 *
 * 		theme_field(
 * 			$type,
 * 		 	$key,
 * 		 	$title = '',
 * 		  	$content = '',
 * 		   	$details = '',
 * 		    $placeholder = '',
 * 		    $required = 1)
 *
 * 	EXAMPLE of a textbox asking for headline:
 *
 * 		{!! theme_field(
 * 				'text',
 * 			 	'headline',
 * 			  	'My Aweseome Headline',
 * 			   	'{}',
 * 			    'Add your Headline here',
 * 			    0)
 * 	    !!}
 *
 * 		Only the first 2 are arguments are required
 *
 * 		{!! theme_field('test', 'headline') !!}
 *
 * 	EXPLANATION:
 * 		$type
 * 			This is the type of field you want to display, you can
 * 		 	take a look at all the fields from the TYPES OF FIELDS
 * 		  	section below.
 * 	    $key
 * 		   	This is the key you want to create to reference the
 * 		    field in your theme.
 * 		 $title
 * 		 	This is the title or the label above the field
 * 	     $content
 * 		    The current contents or value of the field, if the field
 * 		    has already been created in the db, the value in the
 * 		    database will be used instead
 * 	     $details
 * 		    The details of the field in JSON. You can find more
 * 		    info about the details from the following URL:
 * 		    https://voyager.readme.io/docs/additional-field-options
 * 	     $placeholder
 * 		    The placeholder value of the field
 * 	     $required
 * 		    Whether or not this field is required
 *
 * 	TYPES OF FIELDS
 * 		checkbox, color, date, file, image, multiple_images,
 * 		number, password, radio_btn, rich_text_box, code_editor,
 * 		markdown_editor, select_dropdown, select_multiple, text,
 * 		text_area, timestamp, hidden, coordinates
 */

?>
<style>
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #fff;
         background-color: #ffffff;
        border-color: transparent transparent #ffffff;
    }
</style>

{{--{!! theme_field('text', 'home_title', 'Home Title', 'gg', '{}', 'Add the SEO title for your homepage',0) !!}--}}
<ul class="nav nav-tabs">
    <li class="active">
        <a data-toggle="tab" href="#home" aria-expanded="true">Home</a>
    </li>
    <li>
        <a data-toggle="tab" href="#shop" aria-expanded="false">Shop</a>
    </li>
    <li>
        <a data-toggle="tab" href="#cart" aria-expanded="false">Product Cart</a>
    </li>
    <li>
        <a data-toggle="tab" href="#checkout" aria-expanded="false">Checkout</a>
    </li>
    <li>
        <a data-toggle="tab" href="#blog" aria-expanded="false">Blog</a>
    </li>
    <li>
        <a data-toggle="tab" href="#contact" aria-expanded="false">Contact</a>
    </li>
    <li>
        <a data-toggle="tab" href="#register" aria-expanded="false">Register</a>
    </li>
    <li>
        <a data-toggle="tab" href="#login" aria-expanded="false">Login</a>
    </li>
    <li>
        <a data-toggle="tab" href="#resend" aria-expanded="false">Resent Verify</a>
    </li>
    <li>
        <a data-toggle="tab" href="#reset" aria-expanded="false">Reset Password</a>
    </li>
    <li>
        <a data-toggle="tab" href="#search" aria-expanded="false">Search</a>
    </li>
    <li>
        <a data-toggle="tab" href="#profile" aria-expanded="false">Profile</a>
    </li>
    <li>
        <a data-toggle="tab" href="#order" aria-expanded="false">Order</a>
    </li>
</ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade active in">
        {!! theme_field('text', 'home_title', 'Home Title', '', '{}', 'Add the SEO title for your home page') !!}

        {!! theme_field('image', 'home_parallax', 'Home Page Parallax') !!}
        {!! theme_field('image', 'home_parallax_image1', 'Home Page Parallax Left Image') !!}
        {!! theme_field('image', 'home_parallax_image2', 'Home Page Parallax Right Image') !!}

        {!! theme_field('image', 'home_slider1', 'First Home Page Slider') !!}
        {!! theme_field('text', 'home_slider1_header_big', 'Slider Big Header', '', '{}', 'Add the big header for first slider') !!}
        {!! theme_field('text', 'home_slider1_header_small', 'Slider Small Header', '', '{}', 'Add the small header for first slider') !!}

        {!! theme_field('image', 'home_slider2', 'Second Home Page Slider') !!}
        {!! theme_field('text', 'home_slider2_header_big', 'Slider Big Header', '', '{}', 'Add the big header for second slider') !!}
        {!! theme_field('text', 'home_slider2_header_small', 'Slider Small Header', '', '{}', 'Add the small header for second slider') !!}

        {!! theme_field('image', 'home_slider3', 'Third Home Page Slider') !!}
        {!! theme_field('text', 'home_slider3_header_big', 'Slider Big Header', '', '{}', 'Add the big header for third slider') !!}
        {!! theme_field('text', 'home_slider3_header_small', 'Slider Small Header', '', '{}', 'Add the small header for third slider') !!}
    </div>
    <div id="shop" class="tab-pane fade">
        {!! theme_field('text', 'shop_title', 'Shop Title', '', '{}', 'Add the SEO title for your Shop page') !!}
        {!! theme_field('image', 'shop_parallax', 'Shop Page Parallax') !!}
        {!! theme_field('image', 'shop_details_parallax', 'Shop Details Page Parallax') !!}
    </div>
    <div id="cart" class="tab-pane fade">
        {!! theme_field('text', 'cart_title', 'Cart Title', '', '{}', 'Add the SEO title for your Cart page') !!}
        {!! theme_field('image', 'cart_parallax', 'Cart Page Parallax') !!}
    </div>
    <div id="checkout" class="tab-pane fade">
        {!! theme_field('text', 'checkout_title', 'Checkout Title', '', '{}', 'Add the SEO title for your Checkout page') !!}
        {!! theme_field('image', 'checkout_parallax', 'Checkout Page Parallax') !!}
    </div>
    <div id="blog" class="tab-pane fade">
        {!! theme_field('text', 'blog_title', 'Blog Title', '', '{}', 'Add the SEO title for your Blog page') !!}
        {!! theme_field('image', 'blog_parallax', 'Blog Page Parallax') !!}
        {!! theme_field('image', 'blog_details_parallax', 'Blog Details Page Parallax') !!}
    </div>
    <div id="contact" class="tab-pane fade">
        {!! theme_field('text', 'contact_title', 'Contact Title', '', '{}', 'Add the SEO title for your Contact page') !!}
        {!! theme_field('image', 'contact_parallax', 'Contact Page Parallax') !!}
    </div>
    <div id="register" class="tab-pane fade">
        {!! theme_field('text', 'register_title', 'Register Title', '', '{}', 'Add the SEO title for your Register page') !!}
        {!! theme_field('image', 'register_parallax', 'Register Page Parallax') !!}
    </div>
    <div id="login" class="tab-pane fade">
        {!! theme_field('text', 'login_title', 'Login Title', '', '{}', 'Add the SEO title for your Login page') !!}
        {!! theme_field('image', 'login_parallax', 'Login Page Parallax') !!}
    </div>
    <div id="resend" class="tab-pane fade">
        {!! theme_field('text', 'resend_title', 'Resend Title', '', '{}', 'Add the SEO title for your Resend page') !!}
        {!! theme_field('image', 'resend_parallax', 'Resend Page Parallax') !!}
    </div>
    <div id="reset" class="tab-pane fade">
        {!! theme_field('text', 'reset_title', 'Reset Title', '', '{}', 'Add the SEO title for your Reset page') !!}
        {!! theme_field('image', 'reset_parallax', 'Reset Page Parallax') !!}
    </div>
    <div id="search" class="tab-pane fade">
        {!! theme_field('text', 'search_title', 'Search Title', '', '{}', 'Add the SEO title for your Search page') !!}
        {!! theme_field('image', 'search_parallax', 'Search Page Parallax') !!}
    </div>
    <div id="profile" class="tab-pane fade">
        {!! theme_field('text', 'profile_title', 'Profile Title', '', '{}', 'Add the SEO title for your Profile page') !!}
        {!! theme_field('image', 'profile_parallax', 'Profile Page Parallax') !!}
    </div>
    <div id="order" class="tab-pane fade">
        {!! theme_field('text', 'order_title', 'Order Title', '', '{}', 'Add the SEO title for your Order page') !!}
        {!! theme_field('image', 'order_parallax', 'Order Page Parallax') !!}
    </div>
</div>







{{--{!! theme_field('image', 'logo', 'Site Logo') !!}--}}
{{--{!! theme_field('rich_text_box', 'about', 'About', '', '{}') !!}--}}




