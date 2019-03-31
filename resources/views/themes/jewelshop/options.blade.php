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
    <li class="">
        <a data-toggle="tab" href="#shop" aria-expanded="false">Shop</a>
    </li>
</ul>
<div class="tab-content">
    <div id="home" class="tab-pane fade active in">
        {!! theme_field('text', 'home_title', 'Home Title', '', '{}', 'Add the SEO title for your home page',1) !!}

        {!! theme_field('image', 'home_parallax', 'Home Page Parallax') !!}
        {!! theme_field('image', 'home_parallax_image1', 'Home Page Parallax Left Image') !!}
        {!! theme_field('image', 'home_parallax_image2', 'Home Page Parallax Right Image') !!}

        {!! theme_field('image', 'home_slider1', 'First Home Page Slider') !!}
        {!! theme_field('text', 'home_slider1_header_big', 'Slider Big Header', '', '{}', 'Add the big header for first slider',1) !!}
        {!! theme_field('text', 'home_slider1_header_small', 'Slider Small Header', '', '{}', 'Add the small header for first slider',1) !!}

        {!! theme_field('image', 'home_slider2', 'Second Home Page Slider') !!}
        {!! theme_field('text', 'home_slider2_header_big', 'Slider Big Header', '', '{}', 'Add the big header for second slider',1) !!}
        {!! theme_field('text', 'home_slider2_header_small', 'Slider Small Header', '', '{}', 'Add the small header for second slider',1) !!}

        {!! theme_field('image', 'home_slider3', 'Third Home Page Slider') !!}
        {!! theme_field('text', 'home_slider3_header_big', 'Slider Big Header', '', '{}', 'Add the big header for third slider',1) !!}
        {!! theme_field('text', 'home_slider3_header_small', 'Slider Small Header', '', '{}', 'Add the small header for third slider',1) !!}
    </div>
    <div id="shop" class="tab-pane fade">
        {!! theme_field('text', 'shop_title', 'Shop Title', '', '{}', 'Add the SEO title for your Shop page',1) !!}
        {!! theme_field('image', 'shop_parallax', 'Shop Page Parallax') !!}
    </div>
</div>







{{--{!! theme_field('image', 'logo', 'Site Logo') !!}--}}
{{--{!! theme_field('rich_text_box', 'about', 'About', '', '{}') !!}--}}




