<?php
 /**
 * This file contains the shortcodes for content pizazz
 *
 * @package		Content Pizazz WordPress Plugin
 * @copyright	Copyright (c) 2012, Kevin Archibald
 * @license		http://www.gnu.org/licenses/quick-guide-gplv3.html  GNU Public License
 * @author		Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/**
 *--------------column shortcodes --------------------------------------------- 
 * useage [cp_one_fourth]text[/cp_one_fourth]
 * options cp_one_fourth,cp_one_half,cp_three_fourth,cp_one_third,cp_two_third
 * -----------------------------------------------------------------------------
 *
 * @param array $atts needs to be there but is not used in these shortcodes
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */
 
add_shortcode('cp_one_fourth', 'content_pizazz_one_fourth_col'); 
function content_pizazz_one_fourth_col ($atts,$content = null) {
	return '<div class="cp_one_fourth">'.do_shortcode($content).'</div>';
}

add_shortcode('cp_one_fourth_last', 'content_pizazz_one_fourth_col_last');
function content_pizazz_one_fourth_col_last ($atts,$content = null) {
	return '<div class="cp_one_fourth">'.do_shortcode($content).'</div><div class="cp_clear"></div>';
}

add_shortcode('cp_one_third', 'content_pizazz_one_third_col');
function content_pizazz_one_third_col ($atts, $content = null) {
	return '<div class="cp_one_third">'.do_shortcode($content).'</div>';
}

add_shortcode('cp_one_third_last', 'content_pizazz_one_third_col_last');
function content_pizazz_one_third_col_last ($atts, $content = null) {
	return '<div class="cp_one_third">'.do_shortcode($content).'</div><div class="cp_clear"></div>';
}

add_shortcode('cp_two_third', 'content_pizazz_two_third_col');
function content_pizazz_two_third_col ($atts, $content = null) {
	return '<div class="cp_two_third">'.do_shortcode($content).'</div>';
}

add_shortcode('cp_two_third_last', 'content_pizazz_two_third_col_last');
function content_pizazz_two_third_col_last ($atts, $content = null) {
	return '<div class="cp_two_third">'.do_shortcode($content).'</div><div class="cp_clear"></div>';
}

add_shortcode('cp_one_half', 'content_pizazz_one_half_col');
function content_pizazz_one_half_col ($atts, $content = null) {
	return '<div class="cp_one_half">'.do_shortcode($content).'</div>';
}

add_shortcode('cp_one_half_last', 'content_pizazz_one_half_col_last');
function content_pizazz_one_half_col_last ($atts, $content = null) {
	return '<div class="cp_one_half">'.do_shortcode($content).'</div><div class="cp_clear"></div>';
}

add_shortcode('cp_three_fourth', 'content_pizazz_three_fourth_col');
function content_pizazz_three_fourth_col ($atts, $content = null) {
	return '<div class="cp_three_fourth">'.do_shortcode($content).'</div>';
}

add_shortcode('cp_three_fourth_last', 'content_pizazz_three_fourth_col_last');
function content_pizazz_three_fourth_col_last ($atts, $content = null) {
	return '<div class="cp_three_fourth">'.do_shortcode($content).'</div><div class="cp_clear"></div>';
}

/**
 *---------------css clear shortcode--------------------------------------------- 
 * useage [cp_clear] used to clear css floats
 * -----------------------------------------------------------------------------
 *
 * @param array $atts needs to be there but is not used in these shortcodes
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_clear', 'content_pizazz_clear');  
function content_pizazz_clear ($atts) {
	return '<div class="cp_clear"></div>';
}

/**
 * --------------list shortcodes ------------------------------------------- 
 * useage [cp_list style="dot"]<li>Item 1</li>[/cp_list] 
 * style options: dot,arrow_1,arrow_2,arrow_3,check_1,check_2,cog,happy
 * -------------------------------------------------------------------------
 *
 * @param array $atts default style
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */
 
add_shortcode('cp_list', 'content_pizazz_list_func');
function content_pizazz_list_func ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'dot',
    ), $atts));
	if ( $style != 'arrow_1' && $style != 'arrow_2' && $style != 'arrow_3' && $style != 'check_1' 
	      && $style != 'check_2' && $style != 'star' && $style != 'cog' && $style != 'happy' && $style != 'dot' ) $style = 'dot';
    $list_string = '<ul class="cp_'.$style.'">'.do_shortcode($content).'</ul>';
	$list_string = str_replace(array('<p>','</p>','<br/>','<br />'), '', $list_string);
    return $list_string;
}

add_shortcode('cp_list_1', 'content_pizazz_list_func_1'); 
function content_pizazz_list_func_1 ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'dot',
    ), $atts));
	if ( $style != 'arrow_1' && $style != 'arrow_2' && $style != 'arrow_3' && $style != 'check_1' 
	      && $style != 'check_2' && $style != 'star' && $style != 'cog' && $style != 'happy' && $style != 'dot' ) $style = 'dot';
    $list_string = '<ul class="cp_'.$style.'">'.do_shortcode($content).'</ul>';
	$list_string = str_replace(array('<p>','</p>','<br/>','<br />'), '', $list_string);
    return $list_string;
}

add_shortcode('cp_list_2', 'content_pizazz_list_func_2');
function content_pizazz_list_func_2 ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'dot',
    ), $atts));
	if ( $style != 'arrow_1' && $style != 'arrow_2' && $style != 'arrow_3' && $style != 'check_1' 
	      && $style != 'check_2' && $style != 'star' && $style != 'cog' && $style != 'happy' && $style != 'dot' ) $style = 'dot';
    $list_string = '<ul class="cp_'.$style.'">'.do_shortcode($content).'</ul>';
	$list_string = str_replace(array('<p>','</p>','<br/>','<br />'), '', $list_string);
    return $list_string;
}

add_shortcode('cp_list_3', 'content_pizazz_list_func_3');
function content_pizazz_list_func_3 ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'dot',
    ), $atts));
	if ( $style != 'arrow_1' && $style != 'arrow_2' && $style != 'arrow_3' && $style != 'check_1' 
	      && $style != 'check_2' && $style != 'star' && $style != 'cog' && $style != 'happy' && $style != 'dot' ) $style = 'dot';
    $list_string = '<ul class="cp_'.$style.'">'.do_shortcode($content).'</ul>';
	$list_string = str_replace(array('<p>','</p>','<br/>','<br />'), '', $list_string);
    return $list_string;
}

add_shortcode('cp_list_4', 'content_pizazz_list_func_4');
function content_pizazz_list_func_4 ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'dot',
    ), $atts));
	if ( $style != 'arrow_1' && $style != 'arrow_2' && $style != 'arrow_3' && $style != 'check_1' 
	      && $style != 'check_2' && $style != 'star' && $style != 'cog' && $style != 'happy' && $style != 'dot' ) $style = 'dot';
    $list_string = '<ul class="cp_'.$style.'">'.do_shortcode($content).'</ul>';
	$list_string = str_replace(array('<p>','</p>','<br/>','<br />'), '', $list_string);
    return $list_string;
}

/**
 * ------------------ messagebox shortcode ------------------------------------------------------------------------------------------- 
 * useage : [messagebox color="#ffffff" border="#000000" font_color="#000000" align="left" shade="noshade"]Your Message[/messagebox] 
 * align : left(default),right,center
 * color : any hex color or web color, default is #ffffff or white
 * border : any hex color or web color, default is #000000 or black
 * shade : noshade(default), light,dark
 * font-color : any hex color or web color, default is #000000 or black
 * Message Text : Place your message here, keep the message on one line
 * -----------------------------------------------------------------------------------------------------------------------------------
 *
 * @param array $atts default styles
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_messagebox', 'content_pizazz_messagebox_func'); 
function content_pizazz_messagebox_func ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'color' => '#ffffff',
	    'border' => '#000000',
	    'font_color' => '#000000',
	    'shade' => 'noshade',
	    'align' => 'left',
    ), $atts));
	// Do a little validation
	$color = sanitize_text_field(trim($color));
	$border = sanitize_text_field(trim($border));
	$font_color = sanitize_text_field(trim($font_color));
	$shade = sanitize_text_field(trim($shade));
	if ( $shade != 'noshade' && $shade != 'dark' && $shade != 'light' ) $shade = 'noshade';
	$align = sanitize_text_field(trim($align));
	if ( $align != 'left' && $align != 'right' && $align != 'center' ) $align = 'left' ;
	// ok return html
	if($align == 'left') {
		return '<span class="cp_messagebox cp_mb_left cp_messagebox_mb'.$shade.'" style="background-color:'.$color.'; border: 2px solid '.$border.'; color:'.$font_color.'; ">'.do_shortcode($content).'</span><div class="cp_clear"></div>';	
	} elseif ($align == 'right'){
		return '<span class="cp_messagebox cp_mb_right cp_messagebox_mb'.$shade.'" style="background-color:'.$color.'; border: 2px solid '.$border.'; color:'.$font_color.'; ">'.do_shortcode($content).'</span><div class="cp_clear"></div>';	
	} elseif ($align == 'center') {
		return '<span class="cp_messagebox cp_mb_center cp_messagebox_mb'.$shade.'" style="background-color:'.$color.'; border: 2px solid '.$border.'; color:'.$font_color.'; ">'.do_shortcode($content).'</span><div class="cp_clear"></div>';
	} else {
		return '<span class="cp_messagebox cp_mb_left cp_messagebox_mb'.$shade.'" style="background-color:'.$color.'; border: 2px solid '.$border.'; color:'.$font_color.'; ">'.do_shortcode($content).'</span><div class="cp_clear"></div>';
	}   
}

/**
 * ------------------ button shortcode -------------------------------------------------------------------------------- 
 * useage : [button color="gray" font_color="#000000" align="left" link="http://www.yourlink.ext" newtab="false"]Button Text[/button]
 * color : gray(dfefault), blue, brown, dark, green, red, yellow
 * font-color : Any hex color number or web color, default is #000000
 * align : left(default), right, center
 * link : any internet url, default is "#"
 * newtab : true to open new tab, false to use the tab you are in
 * -------------------------------------------------------------------------------------------------------------------
 *
 * @param array $atts default styles
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_button', 'content_pizazz_button_func');
function content_pizazz_button_func ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'color' => 'gray',
	    'font_color' => '#000000',
	    'align' =>'left',
	    'link' => '#',
	    'title' => '',
	    'newtab'=> 'false',
    ), $atts));
	/* Do a little validation */
	$title = sanitize_text_field($title);
	if ($link != '#') $link = esc_url(trim($link));
	$color = trim($color);
	if ($color != 'gray' && $color != 'blue' && $color != 'dark' && $color != 'brown' && $color != 'red' && $color != 'yellow' && $color != 'green') $color = 'gray';
	$image_left = "'images/buttons/".$color."_l.png'";
	$image_right = "'images/buttons/".$color."_r.png'";
	$align=trim($align);
	if($align != 'left' && $align != 'right' && $align != 'center') $align = 'left';
	$newtab = trim( $newtab );
	$newtab == 'true' ? $target = '_blank': $target = '_self';
	/* Return html */
    if($align == 'left') {
		return '<div class="cp_button_left" ><a class="cp_button cp_button_'.$color.'" href="'.$link.'" title="'.$title.'" target="'.$target.'"><span style="color:'.$font_color.';">'.do_shortcode($content).'</span></a></div><div class="cp_clear"></div>';	
	} elseif ($align == 'right'){
		return '<div class="cp_button_right" > <a class="cp_button cp_button_'.$color.'" href="'.$link.'" title="'.$title.'" target="'.$target.'"><span style="color:'.$font_color.';">'.do_shortcode($content).'</span></a></div><div class="cp_clear"></div>';	
	} elseif ($align == 'center') {
		return '<div class="cp_button_center" > <a class="cp_button cp_button_'.$color.'" href="'.$link.'" title="'.$title.'" target="'.$target.'"><span style="color:'.$font_color.';">'.do_shortcode($content).'</span></a></div><div class="cp_clear"></div>';	
	} else {
		return '<div class="cp_button_left" ><a class="cp_button cp_button_'.$color.'" href="'.$link.'" title="'.$title.'" target="'.$target.'"><span style="color:'.$font_color.';">'.do_shortcode($content).'</span></a></div><div class="cp_clear"></div>';	
	}
}

/**
 * ------------------ 3D (css3) button shortcode ----------------------------------------------------------------------- 
 * useage : [cp_button color="gray" font_color="#000000" align="left" link="http://www.yourlink.ext" newtab="false"]Button Text[/cp_button]
 * title: This text will appear when you hover over the button
 * align: left(default), right, center, in-line
 * size: small(default), medium, large
 * background-color: any hex color (default #cccccc) or web color (ex: red)
 * font-color: any hex color (default #000000) or web color (ex: red)
 * link: any url of the form http://www.yourlink.ext/
 * newtab : true to open new tab, false to use the tab you are in
 * -------------------------------------------------------------------------------------------------------------------
 *
 * @param array $atts default styles
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_3d_button', 'content_pizazz_3d_button_func');
function content_pizazz_3d_button_func ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'background_color' => '#cccccc',
	    'font_color' => '#000000',
	    'align' =>'left',
	    'link' => '#',
	    'size' => 'small',
	    'title' => '',
	    'newtab' => 'false',
    ), $atts));
	/* Do a little validation */
	$title = sanitize_text_field($title);
	if ($link != '#') $link = esc_url(trim($link));
	$background_color = trim($background_color);
	$font_color=trim($font_color);
	$css_style = 'background-color:'.$background_color.';'.
				' color:'.$font_color.';';
	if ($link != '#') $link = esc_url(trim($link));
	$size = trim($size);
	if($size != 'small' && $size != 'medium' && $size != 'large') $size = 'small';
	$align=trim($align);
	if($align != 'left' && $align != 'right' && $align != 'center' && $align != 'in-line') $align = 'left';
	$newtab = trim( $newtab );
	$newtab == 'true' ? $target = '_blank': $target = '_self';
	/* Return html */
    if($align == 'left') {
		return '<a class="cp_3d_button cp_3d_button_left cp_css_button_'.$size.'" title="'.$title.'" style="'.$css_style.'" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a><div class="cp_clear"></div>';	
	} elseif ($align == 'right'){
		return '<a class="cp_3d_button cp_3d_button_right cp_css_button_'.$size.'" title="'.$title.'" style="'.$css_style.'" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a><div class="cp_clear"></div>';	
	} elseif ($align == 'center') {
		return '<a class="cp_3d_button cp_3d_button_center cp_css_button_'.$size.'" title="'.$title.'" style="'.$css_style.'" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a><div class="cp_clear"></div>';	
	} elseif ($align == 'in-line') {
		return '<a class="cp_3d_button cp_css_button_'.$size.'" title="'.$title.'" style="'.$css_style.'" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a>';
	} else {
		return '<a class="cp_3d_button cp_3d_button_left cp_css_button_'.$size.'" title="'.$title.'" style="'.$css_style.'" href="'.$link.'" target="'.$target.'">'.do_shortcode($content).'</a><div class="cp_clear"></div>';	
	}
}

/**
 * ------------------ special text shortcode ----------------------------------------- 
 * useage : [cp_special_text color="red" size="large"]Special Text[/cp_special_text]
 * color: red(default), white, black, yellow, green, blue, gray
 * size: small, normal(default), medium, large
 * -----------------------------------------------------------------------------------
 *
 * @param array $atts default styles
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_special_text', 'content_pizazz_special_text_functon');
function content_pizazz_special_text_functon( $atts, $content = null ) {
     extract(shortcode_atts(array(
         'color' => 'red',
         'size' => 'normal',
     ),$atts));
	 //data validation
	 $size = sanitize_text_field(trim($size));
	 if ( $size != 'small' && $size != 'medium'  && $size != 'large' && $size != 'normal' ) $size = 'normal';
	 $color=sanitize_text_field(trim($color));
	 if ( $color != 'white' && $color != 'black' && $color != 'red' && $color != 'yellow' && $color != 'green' && $color != 'blue' && $color != 'gray' ) $color = 'red';
	//return html
   	return '<span class="cp_st_'.$color.' cp_st_'.$size.'">'. $content . '</span>';
}

/**
 * ------------------ quote shortcode --------------------------------------------------- 
 * useage : [cp_quote style="quote_left_dark"]Your Quote[/cp_quote]
 * style options : quote_left_dark, quote_right_dark, quote_left_light, quote_left_light
 *                quote_normal_dark, quote_normal_light
 * -------------------------------------------------------------------------------------
 *
 * @param array $atts default styles
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */

add_shortcode('cp_quote', 'content_pizazz_quote_func');
function content_pizazz_quote_func ( $atts, $content = null ) {
    extract(shortcode_atts(array(
	    'style' => 'quote_left_dark',
    ), $atts));
    return '<div class="cp_'.$style.'">'.do_shortcode($content).'</div>';
}

/**
 * ------------------ drop caps shortcode --------------------------------
 *
 * @param array $atts not used here but must be present
 * @param string $content is the string of text between the shortcode tags
 * @return html formated string
 */
/*  */

add_shortcode('cp_dropcaps', 'content_pizazz_drop_caps_func');
function content_pizazz_drop_caps_func ( $atts, $content = null ) {
	return '<div class="cp_dropcaps">'.do_shortcode($content).'</div>';	
}

/**
 *---------------css divide shortcode--------------------------------------------- 
 * useage [cp_divide color="#919191" height="1" width="100"] 
 * -----------------------------------------------------------------------------
 *
 * @param string $color is the color of the line
 * @param string height is the height in pixels (1-5px)
 * @param string width is the percentage width of the line
 * @return html formated string
 */

add_shortcode('cp_divide', 'content_pizazz_divide');  
function content_pizazz_divide ($atts, $content = null ) {
	extract(shortcode_atts(array(
         'color' => '#919191',
         'height' => '1',
         'width' => '100',
     ),$atts));
	 /* Do a little validation */
	 $color = sanitize_text_field( $color );
	 $height = intval( $height );
	 $width = intval( $width );
	 if( $height < 1 || $height > 5 ) $height = 1;
	 if( $width < 50 || $width > 100 ) $width = 80;
	 
	return '<div style="clear:both;"></div><div class="cp_divide" style="border-top:'.$height.'px solid '.$color.'; width:'.$width.'%;"></div>';
}

/**
 *---------------toggle shortcode--------------------------------------------- 
 * useage [cp_toggle title="Click to Open"]Content[/cp_toggle]
 * -----------------------------------------------------------------------------
 *
 * @param string $color is the color of the tollge line
 * @param string title is the title of the toggle line
 * 
 * @return html formated string
 */
add_shortcode('cp_toggle', 'content_pizazz_toggle_shortcode');
function content_pizazz_toggle_shortcode( $atts, $content = null ) {
	extract( shortcode_atts(
	 	array(
		 'title' => 'Toggle Window'
		 ),
	$atts ) );
 
	$title = sanitize_text_field($title);
 
 	return '<div style="clear:both;"></div><h4 class="cp_trigger"><a href="#">'. $title .'</a></h4><div class="cp_toggle_container">' . do_shortcode($content) . '</div>';
}
	
?>