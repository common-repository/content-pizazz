<?php
 /**
 * This file contains functions used in Content Pizazz
 *
 * @package		Content Pizazz WordPress Plugin
 * @copyright	Copyright (c) 2012, Kevin Archibald
 * @license		http://www.gnu.org/licenses/quick-guide-gplv3.html  GNU Public License
 * @author		Kevin Archibald <www.kevinsspace.ca/contact/>
 */
 
// add more buttons to the html editor
	$kacp_options = get_option( 'kacp_content_pizazz_options' );
	$use_text_toolbar = $kacp_options['kacp_use_text_toolbar'];
	if( isset( $use_text_toolbar ) && $use_text_toolbar == "1" ) {
		function kacp_content_pizazz_add_quicktags() {
			if( wp_script_is('quicktags') ) { ?>
			    <script type="text/javascript">
			    	QTags.addButton( 'kacp_shortcodes', 'CP On/Off', kacp_shortcodes_callback );
			    	function kacp_shortcodes_callback() {
			    		jQuery('#qt_content_kacp_1_4').toggle();
			    		jQuery('#qt_content_kacp_1_4_L').toggle();
			 			jQuery('#qt_content_kacp_1_3').toggle();
			 			jQuery('#qt_content_kacp_1_3_L').toggle();
			 			jQuery('#qt_content_kacp_2_3').toggle();
			 			jQuery('#qt_content_kacp_2_3_L').toggle();
			 			jQuery('#qt_content_kacp_1_2').toggle();
			 			jQuery('#qt_content_kacp_1_2_L').toggle();
			 			jQuery('#qt_content_kacp_3_4').toggle();
			 			jQuery('#qt_content_kacp_3_4_L').toggle();
			 			jQuery('#qt_content_kacp_li').toggle();
			 			jQuery('#qt_content_kacp_li_1').toggle();
			 			jQuery('#qt_content_kacp_li_2').toggle();
			 			jQuery('#qt_content_kacp_li_3').toggle();
			 			jQuery('#qt_content_kacp_li_4').toggle();
			    		jQuery('#qt_content_kacp_dc').toggle();
			    		jQuery('#qt_content_kacp_msg').toggle();
			    		jQuery('#qt_content_kacp_3d_button').toggle();
			    		jQuery('#qt_content_kacp_grad').toggle();
			    		jQuery('#qt_content_kacp_clear').toggle();
			    		jQuery('#qt_content_kacp_special').toggle();
			    		jQuery('#qt_content_kacp_quote').toggle();
			    		jQuery('#qt_content_kacp_toggle').toggle();
			    		jQuery('#qt_content_kacp_divide').toggle();
			    	}
			    	QTags.addButton( 'kacp_1_4', 'cp-1/4', '[cp_one_fourth]text [/cp_one_fourth]' );
			    	QTags.addButton( 'kacp_1_4_L', 'cp-1/4-L', '[cp_one_fourth_last]text[/cp_one_fourth_last]' );
			    	QTags.addButton( 'kacp_1_3', 'cp-1/3', '[cp_one_third]text[/cp_one_third]' );
			    	QTags.addButton( 'kacp_1_3_L', 'cp-1/3-L', '[cp_one_third_last]text[/cp_one_third_last]' );
			    	QTags.addButton( 'kacp_2_3', 'cp-2/3', '[cp_two_third]text[/cp_two_third]' );
			    	QTags.addButton( 'kacp_2_3_L', 'cp-2/3-L', '[cp_two_third_last]text[/cp_two_third_last]' );
			    	QTags.addButton( 'kacp_1_2', 'cp-1/2', '[cp_one_half]text [/cp_one_half]' );
			    	QTags.addButton( 'kacp_1_2_L', 'cp-1/2-L', '[cp_one_half_last]text[/cp_one_half_last]' );
			    	QTags.addButton( 'kacp_3_4', 'cp-3/4', '[cp_three_fourth]text [/cp_three_fourth]' );
			    	QTags.addButton( 'kacp_3_4_L', 'cp-3/4-L', '[cp_three_fourth_last]text[/cp_three_fourth_last]' );
			    	QTags.addButton( 'kacp_li', 'cp-li', '[cp_list style="dot"]<li></li>[/cp_list]' );
			    	QTags.addButton( 'kacp_li_1', 'cp-li-1', '[cp_list_1 style="check_1"]<li></li>[/cp_list_1]' );
			    	QTags.addButton( 'kacp_li_2', 'cp-li-2', '[cp_list_2 style="arrow_1"]<li></li>[/cp_list_2]' );
			    	QTags.addButton( 'kacp_li_3', 'cp-li-3', '[cp_list_3 style="check_2"]<li></li>[/cp_list_3]' );
			    	QTags.addButton( 'kacp_li_4', 'cp-li-4', '[cp_list_4 style="arrow_2"]<li></li>[/cp_list_4]' );
			    	QTags.addButton( 'kacp_dc', 'cp-drop', '[cp_dropcaps]letter[/cp_dropcaps]' );
			    	QTags.addButton( 'kacp_msg', 'cp-msg', '[cp_messagebox align="left" color="#ffffff" shade="noshade" border="#000000" font_color="#000000"]Message Text[/cp_messagebox]' );
			    	QTags.addButton( 'kacp_3d_button', 'cp-3d-btn', '[cp_3d_button title="Your Title" align="left" size="small" background_color="#cccccc" font_color="#000000" link="#" newtab="false"]Your Text[/cp_3d_button]' );
			    	QTags.addButton( 'kacp_grad', 'cp-grad-btn', '[cp_button link="#" title="Your Title" color="gray" font_color="#000000" align="left" newtab="false"]Your Text[/cp_button]' );
			    	QTags.addButton( 'kacp_clear', 'cp-clear', '[cp_clear]' );
			    	QTags.addButton( 'kacp_special', 'cp-sp-text', '[cp_special_text color="red" size="normal"]Special Text[/cp_special_text]' );
			    	QTags.addButton( 'kacp_quote', 'cp-quote', '[cp_quote style="quote_left_dark"]left-right-normal,light-dark[/cp_quote]' );
			    	QTags.addButton( 'kacp_toggle', 'cp-toggle', '[cp_toggle title="Toggle Window"]Window Content[/cp_toggle]' );
			    	QTags.addButton( 'kacp_divide', 'cp-divide', '[cp_divide color="#919191" height="1" width="100"]' );
			    </script>
		<?php }
	}
	add_action( 'admin_print_footer_scripts', 'kacp_content_pizazz_add_quicktags',100 );
	}
	
	$use_visual_toolbar = $kacp_options['kacp_use_visual_toolbar'];
	if( isset($use_visual_toolbar) && $use_visual_toolbar == "1" ) {
		/**
		 * TinyMCE shortcodes
		 */
		
		// add shortcode buttons to the tinyMCE editor row 3
		add_action( 'init', 'kacp_content_pizazz_addbuttons' );
		function kacp_content_pizazz_addbuttons() {
		   // Only do this stuff when the current user has permissions and we are in Rich Editor mode
		   if ( ( current_user_can('edit_posts') || current_user_can('edit_pages') ) && get_user_option('rich_editing') ) {
		     add_filter("mce_external_plugins", "add_kacp_content_pizazz_tinymce_plugin");
		     add_filter('mce_buttons_3', 'register_kacp_content_pizazz_buttons');
		   }
		}
		
		//setup array for tinyMCE editor interface
		function add_kacp_content_pizazz_tinymce_plugin($plugin_array) {
		  	$plugin_array['content_pizazz_tinymce_plugin'] = plugins_url().'/content-pizazz/tinymce/kacp_tinymce_plugin.js';
		   	return $plugin_array;
		}
		
		//setup array of shortcode buttons to add
		function register_kacp_content_pizazz_buttons($buttons) {
		   array_push($buttons, 'cpka_1_4', 'cpka_1_4_L', 'cpka_1_3', 'cpka_1_3_L', 'cpka_1_2', 'cpka_1_2_L', 'cpka_2_3', 'cpka_2_3_L','cpka_3_4', 'cpka_3_4_L',
		   'cpka_grad_button', 'cpka_3D_button', 'cpka_message', 'cpka_quote', 'cpka_li', 'cpka_li_1', 'cpka_li_2', 'cpka_li_3',' cpka_li_4', 'cpka_dropcap',
		   'cpka_special_text', 'cpka_clear', 'cpka_toggle', 'cpka_divide');
		   return $buttons;
		}
	}

?>