<?php
 /**
 * This file contains functions used in Content Pizazz admin panel
 *
 * @package		Content Pizazz WordPress Plugin
 * @copyright	Copyright (c) 2012, Kevin Archibald
 * @license		http://www.gnu.org/licenses/quick-guide-gplv3.html  GNU Public License
 * @author		Kevin Archibald <www.kevinsspace.ca/contact/>
 */

 /**
  * add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
  *  $page_title-(string) (required) The text to be displayed in the title tags of the page when the menu is selected 
  *  $menu_title-(string) (required) The text to be used for the menu
  *  $capability-(string) (required) The capability required for this menu to be displayed to the user
  *  $menu_slug-(string) (required) The slug name to refer to this menu by (should be unique for this menu). 
  *  $function-(callback) (optional) The function to be called to output the content for this page. 
  */ 

function kacp_content_pizazz_options_page() {
	add_plugins_page('Content Pizazz','Content Pizazz','manage_options','kacp_content_pizazz_options_menu_slug','kacp_content_pizazz_options_page_setup' );
}
add_action( 'admin_menu', 'kacp_content_pizazz_options_page' );

function kacp_content_pizazz_options_page_setup(){
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<h2>Content Pizazz Options/Help Page</h2>
	
		<div class="kacp_paypal">
			<p>Show your appreciation and make a donation!</p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
			">
			<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_SM.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
		<p>Author Site : <a href="http://www.kevinsspace.ca" target="_blank" >www.kevinsspace.ca</a><br/>
		   Plugin Site : <a href="http://www.kevinsspace.ca/content-pizazz/" target="_blank" >www.kevinsspace.ca/content-pizazz/</a></p>
		   
		<h4>Welcome to Content-Pizazz!</h4>
		<p>I wrote this plugin initially to supplement the blogBox theme. It will add a few features that can add a little pizazz 
			to your posts and pages. <br/>I hope you like it. If you do remember to make a donation. Either way I'd like to hear what you think about it, so go 
			to my site and put in a comment. <br/>You can also do a review at the plugin site in WordPress.org.</p>
		   
		<form action="options.php" method="post" >
			<?php 
				settings_fields('kacp_content_pizazz_options');
				do_settings_sections('kacp_content_pizazz_options_menu_slug');
				submit_button();
			 ?>
		</form>
		
		<h3>Content Pizazz Shortcode Reference</h3>
		
		<p>You don't have to remember all the shortcodes below because the toolbars above will help. 
			<br/>There will be a few options you may have to come back here for but the buttons should get you most of the way there.</p>
		
		<h4>Column Shortcodes</h4>
		
		<p>Column shortcodes allow you to split the content area into columns. <br/>
			Note that the columns are responsive and will change as the width of the window/media change.</p>
		
		<p>[cp_one_fourth]text[/cp_one_fourth]</p>
		<p>[cp_one_half]text[/cp_one_half]</p>
		<p>[cp_three_fourth]text[/cp_three_fourth]</p>
		<p>[cp_one_third]text[/cp_one_third]</p>
		<p>[cp_two_third]text[/cp_two_third]</p>
		
		
		<p>For the last column in your content area use these shortcodes, they will add a float clear <br/>
			to help you with columns that are not the same height.</p>
		<p>[cp_one_fourth_last]text[/cp_one_fourth_last]</p>
		<p>[cp_one_half_last]text[/cp_one_half_last]</p>
		<p>[cp_three_fourth_last]text[/cp_three_fourth_last]</p>
		<p>[cp_one_third_last]text[/cp_one_third_last]</p>
		<p>[cp_two_third_last]text[/cp_two_third_last]</p>
		
		<h4>Clear Float Shortcode</h4>
		
		<p>[cp_clear] - Use this shortcode to clear floats and have your next element display on the left side.</p>
		
		<h4>List Shortcode</h4>

		<p>[cp_list style="dot"]&lt;li&gt;List Item 1&lt;/li&gt;&lt;li&gt;List Item 2&lt;/li&gt;...etc [/cp_list]<br/>
			styles : star, happy, cog, check_1, check_2, arrow_1, arrow_2, arrow_3</p>
		<p>For nested lists use:</p>
		<p>[cp_list_1 style="your style"] or [cp_list_2 style="your style"] or [cp_list_3 style="your style"] or [cp_list_4 style="your style"]<br/>
			As is list convention, place the nested shortcode before the closing list tag you want to nest.</p>

		<h4>Drop Caps Shortcode</h4>

		<p>[cp_dropcaps]letter[/cp_dropcaps]</p>

		<h4>Messagebox Shortcode</h4>

		<p>[cp_messagebox align="left" color="#ffffff" shade="light" border="#000000" font_color="#000000"]Message Text[/cp_messagebox]</p>

		<p>You can omit any of the elements and the default will be used:</p>
		<ul>
			<li>align : left(default),right,center</li>
			<li>color : any hex color or web color, default is #ffffff or white, must have the #</li>
			<li>border : any hex color or web color, default is #000000 or black</li>
			<li>shade : noshade(default), light,dark</li>
			<li>font-color : any hex color or web color, default is #000000 or black</li>
			<li>Message Text : Place your message here</li>
		</ul>
		
		<h4>3d Button Shortcodes</h4>

		<p>[cp_3d_button title="Your Title" align="left" size="small" background_color="#cccccc" font_color="#000000" link="http://www.yourlink.ext/" newtab="false"]Your Text[/cp_3d_button]</p>

		<p>You can omit any of the elements and the default will be used:</p>
		<ul>
			<li>title: This text will appear when you hover over the button</li>
			<li>align: left(default), right, center, in-line</li>
			<li>size: small(default), medium, large</li>
			<li>background-color: any hex color (default #cccccc) or web color (ex: red)</li>
			<li>font-color: any hex color (default #000000) or web color (ex: red)</li>
			<li>link: any url of the form http://www.yourlink.ext/</li>
			<li>newtab: false to stay in originating page, true to open the link in a new tab</li>
		</ul>

		<h4>Gradient Buttons</h4>

		<p>[cp_button link="http://your.link.ex" title="Your Title" color="gray" font_color="#000000" align="left" newtab="false"]Your Text[/cp_button]</p>
		
		<p>You can omit any of the elements and the default will be used:</p>
		<ul>
			<li>link : any internet url, default is “#”</li>
			<li>title: This text will appear when you hover over the button</li>
			<li>color : gray(dfefault), blue, brown, dark, green, red, yellow</li>
			<li>font-color : Any hex color number or web color, default is #000000</li>
			<li>align : left(default), right, center</li>
			<li>newtab: false to stay in originating page, true to open the link in a new tab</li>
		</ul>
		
		<h4>Special Text Shortcode</h4>
		
		<p>[cp_special_text color="red" size="large"]Special Text[/cp_special_text]</p>
		
		<p>You can omit any of the elements and the default will be used:</p>
		<ul>
			<li>color : red(default), white, black, yellow, green, blue, gray</li>
			<li>size: normal(default), small, medium, large</li>
		</ul>
		
		<h4>Quote Shortcode</h4>
		
		<p>[cp_quote style="quote_left_dark"]Your Quote[/cp_quote]</p>
		
		<p>Styles :</p>
		<ul>
			<li>quote_left_dark - dark quote, left side of content area</li>
			<li>quote_left_light - light quote, left side of content area</li>
			<li>quote_right_dark - dark quote, right side of content area</li>
			<li>quote_right_light - light quote, right side of content area</li>
			<li>quote_normal_dark - dark quote, accross the content area</li>
			<li>quote_normal_light - light quote, accross the content area</li>
		</ul>
		
		<h4>Divide Line Shortcode</h4>
		
		<p>[cp_divide color="#919191" height="1" width="100"] </p>
		
		<ul>
			<li>color - any hex color</li>
			<li>height - thickness of the line in pixels 1-5px allowed</li>
			<li>width - width of line in percent of containing element, leave the % out</li>
		</ul>
		
		<h4>Toggle Shortcode</h4>
		
		<p>[cp_toggle title="Click to Open"]Content[/cp_toggle]</p>
		
		<p>The title is what will display as the toggle message. Any html content between the tags will initially be 
			hidden and will become visible whem the link is clicked.</p>
	</div>
	<?php 
}

add_action('admin_init','kacp_content_pizazz_register_settings');
function kacp_content_pizazz_register_settings() {
	/**
	 *  register_setting( $option_group, $option_name, $sanitize_callback );
	 *  $option_group-(string) (required) A settings group name. Must exist prior to the register_setting call. 
     *                This must match the group name in settings_fields()
	 *   $option_name-(string) (required) The name of an option to sanitize and save.
	 *   $sanitize_callback-(string) (optional) A callback function that sanitizes the option's value.
	 */
	register_setting(
		'kacp_content_pizazz_options',
		'kacp_content_pizazz_options',
		'kacp_content_pizazz_validate_options'
	);
	/**
	 *  add_settings_section( $id, $title, $callback, $page );
	 *  $id-(string) (required) String for use in the 'id' attribute of tags.
	 *  $title-(string) (required) Title of the section.
	 *  $callback-(string) (required) Function that fills the section with the desired content. The function should echo its output. 
	 *  $page-(string) (required) The menu page on which to display this section. Should match $menu_slug from Function Reference/add theme page
	 */
	add_settings_section(
		'kacp_content_pizazz_id',
		'Content Pizazz Settings',
		'kacp_content_pizazz_section_text',
		'kacp_content_pizazz_options_menu_slug'
	);
	/**
	 * add_settings_field( $id, $title, $callback, $page, $section, $args );
	 *  $id-(string) (required) String for use in the 'id' attribute of tags. 
	 *  $title-(string) (required) Title of the field
	 *  $callback-(string) (required) Function that fills the field with the desired inputs as part of the 
	 *            larger form. Passed a single argument, the $args array. Name and id of the input should match 
	 *            the $id given to this function. The function should echo its output. 
	 *  $page-(string) (required) The menu page on which to display this field. Should match $menu_slug from Function Reference/add theme page
	 *  $section-(string) (optional) The section of the settings page in which to show the box (default or a section you added with add_settings_section, 
	 *           look at the page in the source to see what the existing ones are.) 
	 *  $args-(array) (optional) Additional arguments that are passed to the $callback function. The 'label_for' key can be used to give the field a label different from $title. 
	 */
	add_settings_field(
		'kacp_use_text_toolbar',
		'Include Shortcodes in Text Editor toolbar?',
		'kacp_content_pizazz_text_setting_input',
		'kacp_content_pizazz_options_menu_slug',
		'kacp_content_pizazz_id'
	);
	
	add_settings_field(
		'kacp_use_visual_toolbar',
		'Include Shortcodes in Visual Editor toolbar?',
		'kacp_content_pizazz_visual_setting_input',
		'kacp_content_pizazz_options_menu_slug',
		'kacp_content_pizazz_id'
	);
}
 
// Draw the section header
function kacp_content_pizazz_section_text() {
	//echo '<p>Enter your settings here.</p>';
}

// Display and fill the form field
function kacp_content_pizazz_text_setting_input() {
	// get option 'text_string' value from the database
	$kacp_options = get_option( 'kacp_content_pizazz_options' );
	$use_text_toolbar = $kacp_options['kacp_use_text_toolbar'];
	?>
		<input type="checkbox" id="checkbox" name="kacp_content_pizazz_options[kacp_use_text_toolbar]" value="$use_text_toolbar" <?php if($use_text_toolbar=="1") echo "checked=checked"; ?> />
	<?php
}

// Display and fill the form field
function kacp_content_pizazz_visual_setting_input() {
	// get option 'text_string' value from the database
	$kacp_options = get_option( 'kacp_content_pizazz_options' );
	$use_visual_toolbar = $kacp_options['kacp_use_visual_toolbar'];
	?>
		<input type="checkbox" id="checkbox" name="kacp_content_pizazz_options[kacp_use_visual_toolbar]" value="$kacp_use_visual_toolbar" <?php if($use_visual_toolbar=="1") echo "checked=checked"; ?> />
	<?php
}

// Validate user input (we want text only)
function kacp_content_pizazz_validate_options( $input ) {
	$valid = array();
	$valid['kacp_use_text_toolbar'] = ( ( isset( $input['kacp_use_text_toolbar'] ) && true == $input['kacp_use_text_toolbar'] ) ? true : false );
	$valid['kacp_use_visual_toolbar'] = ( ( isset( $input['kacp_use_visual_toolbar'] ) && true == $input['kacp_use_visual_toolbar'] ) ? true : false );

	return $valid;
}

 
?>