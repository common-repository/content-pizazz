(function() {
	//alert('loaded');
    tinymce.create('tinymce.plugins.kacp_content_pizazz', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {
        	
        	//source: http://thethemefoundry.com/blog/toggle-an-extra-row-of-buttons-with-wordpress/
        	ed.onInit.add(function( ed ) {
		        if ( getUserSetting( 'hidetb', '0' ) == '0' ) {
		            jQuery( '#content_toolbar3' ).hide();
		       }

		        jQuery( '#wp-content-editor-container #content_wp_adv' ).click(function() {
		            if ( jQuery( '#content_toolbar2' ).is( ':visible' ) ) {
		                jQuery( '#content_toolbar3' ).show();
		            } else {
		                jQuery( '#content_toolbar3' ).hide();
		            }
		        });
		    });
		                 
        	ed.addButton('cpka_1_4', {
                title : '1/4 Column',
                cmd : 'cpka_1_4',
                image : url + '/1_4.png'
            });
            
            ed.addButton('cpka_1_4_L', {
                title : '1/4 Column-Last',
                cmd : 'cpka_1_4_L',
                image : url + '/1_4_L.png'
            });
            
            ed.addButton('cpka_1_3', {
                title : '1/3 Column',
                cmd : 'cpka_1_3',
                image : url + '/1_3.png'
            });
            
            ed.addButton('cpka_1_3_L', {
                title : '1/3 Column-Last',
                cmd : 'cpka_1_3_L',
                image : url + '/1_3_L.png'
            });
            
            ed.addButton('cpka_1_2', {
                title : '1/2 Column',
                cmd : 'cpka_1_2',
                image : url + '/1_2.png'
            });
            
            ed.addButton('cpka_1_2_L', {
                title : '1/2 Column-Last',
                cmd : 'cpka_1_2_L',
                image : url + '/1_2_L.png'
            });
            
            ed.addButton('cpka_2_3', {
                title : '2/3 Column',
                cmd : 'cpka_2_3',
                image : url + '/2_3.png'
            });
            
            ed.addButton('cpka_2_3_L', {
                title : '2/3 Column-Last',
                cmd : 'cpka_2_3_L',
                image : url + '/2_3_L.png'
            });
            
            ed.addButton('cpka_3_4', {
                title : '3/4 Column',
                cmd : 'cpka_3_4',
                image : url + '/3_4.png'
            });
            
            ed.addButton('cpka_3_4_L', {
                title : '3/4 Column-Last',
                cmd : 'cpka_3_4_L',
                image : url + '/3_4_L.png'
            });
            
 			ed.addButton('cpka_grad_button', {
                title : 'Gradient Button',
                cmd : 'cpka_grad_button',
                image : url + '/grad_button.png'
            });
            
            ed.addButton('cpka_3D_button', {
                title : '3D Button',
                cmd : 'cpka_3D_button',
                image : url + '/3D_button.png'
            });
            
            ed.addButton('cpka_message', {
                title : 'Message Box',
                cmd : 'cpka_message',
                image : url + '/message.png'
            });
            
            ed.addButton('cpka_quote', {
                title : 'Quote',
                cmd : 'cpka_quote',
                image : url + '/quote.png'
            });
            
            ed.addButton('cpka_li', {
                title : 'List',
                cmd : 'cpka_li',
                image : url + '/li.png'
            });
            
            ed.addButton('cpka_li_1', {
                title : 'List 1',
                cmd : 'cpka_li_1',
                image : url + '/li_1.png'
            });
            
            ed.addButton('cpka_li_2', {
                title : 'List 2',
                cmd : 'cpka_li_2',
                image : url + '/li_2.png'
            });
            
            ed.addButton('cpka_li_3', {
                title : 'List 3',
                cmd : 'cpka_li_3',
                image : url + '/li_3.png'
            });
            
            ed.addButton('cpka_li_4', {
                title : 'List 4',
                cmd : 'cpka_li_4',
                image : url + '/li_4.png'
            });
            
            ed.addButton('cpka_dropcap', {
                title : 'DropCap',
                cmd : 'cpka_dropcap',
                image : url + '/dropcap.png'
            });
            
            ed.addButton('cpka_special_text', {
                title : 'Special Text',
                cmd : 'cpka_special_text',
                image : url + '/special_text.png'
            });
            
            ed.addButton('cpka_clear', {
                title : 'Clear Floats',
                cmd : 'cpka_clear',
                image : url + '/clear.png'
            });
            
             ed.addButton('cpka_divide', {
                title : 'Divide Line',
                cmd : 'cpka_divide',
                image : url + '/divide.png'
            });
            
            ed.addButton('cpka_toggle', {
                title : 'hide/show html',
                cmd : 'cpka_toggle',
                image : url + '/toggle.png'
            });
            
			ed.addCommand('cpka_1_4', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_fourth]' + selected_text + '[/cp_one_fourth]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_1_4_L', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_fourth_last]' + selected_text + '[/cp_one_fourth_last]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_1_3', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_third]' + selected_text + '[/cp_one_third]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_1_3_L', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_third_last]' + selected_text + '[/cp_one_third_last]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_1_2', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_half]' + selected_text + '[/cp_one_half]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_1_2_L', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_one_half_last]' + selected_text + '[/cp_one_half_last]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_2_3', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_two_third]' + selected_text + '[/cp_two_third]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_2_3_L', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_two_third_last]' + selected_text + '[/cp_two_third_last]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_3_4', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_three_fourth]' + selected_text + '[/cp_three_fourth]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_3_4_L', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_three_fourth_last]' + selected_text + '[/cp_three_fourth_last]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_grad_button', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_button link="#" title="Your Title" color="gray" font_color="#000000" align="left" newtab="false"]' + selected_text + '[/cp_button]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_3D_button', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_3d_button title="Your Title" align="left" size="small" background_color="#cccccc" font_color="#000000" link="#" newtab="false"]' + selected_text + '[/cp_3d_button]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_message', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_messagebox align="left" color="#ffffff" shade="noshade" border="#000000" font_color="#000000"]' + selected_text + '[/cp_messagebox]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_quote', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_quote style="quote_left_dark"]' + selected_text + '[/cp_quote]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_li', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_list style="dot"]' + selected_text + '[/cp_list]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_li_1', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_list_1 style="check_1"]' + selected_text + '[/cp_list_1]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_li_2', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_list_2 style="arrow_1"]' + selected_text + '[/cp_list_2]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_li_3', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_list_3 style="check_2"]' + selected_text + '[/cp_list_3]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_li_4', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_list_4 style="arrow_2"]' + selected_text + '[/cp_list_4]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_dropcap', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_dropcaps]' + selected_text + '[/cp_dropcaps]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_special_text', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_special_text color="red" size="normal"]' + selected_text + '[/cp_special_text]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_clear', function() {
                var return_text = '';
                return_text = '[cp_clear]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
            ed.addCommand('cpka_divide', function() {
            	var return_text = '';
                return_text = '[cp_divide color="#919191" height="1" width="100"]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            
             ed.addCommand('cpka_toggle', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[cp_toggle title="Toggle Window"]' + selected_text + '[/cp_toggle]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
        },
 
        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },
 
        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                longname : 'Content Pizazz Buttons',
                author : 'Kevin',
                authorurl : 'http://kevinsspace.ca',
                infourl : 'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/example',
                version : "0.1"
            };
        }
    });
 
    // Register plugin
    tinymce.PluginManager.add( 'content_pizazz_tinymce_plugin', tinymce.plugins.kacp_content_pizazz );
})();