<?php
/*
* Plugin Name: Post Author Link
* Version: 0.1
* Requires at least: 3.8
* Author: Daron Spence
* Description: Adds a link to the post author when editing any post type that supports it.
* Author URI: http://daronspence.com
* Inspired by: http://www.reddit.com/r/Wordpress/comments/2td82e/
* License: GPL2
*/

function pal_add_post_author_link(){ 
	GLOBAL $pagenow;
	GLOBAL $post_type;
	if( $pagenow == 'post.php' && post_type_supports($post_type, 'author') ): ?>
	<script type="text/javascript" id="author-link-js">
		function authorLink(){
			var $box = jQuery('#authordiv .inside');
			var $select = jQuery('#post_author_override');
			var $val = $select.val();
			
			$box.append(
				'<a href="user-edit.php?user_id=' + 
				$val + 
				'" style="padding-left: 10px;" id="al-link"><?php _e("View/Edit Author Profile"); ?></a>'
			);

			var $link = jQuery('#al-link');

			$select.change(function(){
				$link.attr('href', 'user-edit.php?user_id=' + $select.val() );
				$box.append('<span style="color: #00DD00; padding-left: 10px;"><?php _e("Link Updated"); ?></span>');
				jQuery('#authordiv .inside span').delay(1000).fadeOut();
				// console.log('New Author ID: ' + $select.val() );
			});
		}
		jQuery(document).ready( authorLink );
	</script>
<?php endif; }
add_action('admin_head', 'pal_add_post_author_link');