<?php
/*
* Plugin Name: Post Author Link
* Version: 0.1
* Requires at least: 3.8
* Author: Daron Spence
* Description: A small plugin that adds a link to the currently selected author on a post/page/etc author override meta box.
* Author URI: http://daronspence.com
* Inspired By: http://www.reddit.com/r/Wordpress/comments/2td82e/
* License: GPL2
* Text Domain: pal
*/

function pal_add_post_author_link(){ 
	GLOBAL $pagenow;
	GLOBAL $post_type;
	if( $pagenow == 'post.php' && post_type_supports($post_type, 'author') ): ?>
		<script type="text/javascript" id="pal-js">
			function palAuthorLink(){
				var $box = jQuery('#authordiv .inside');
				var $select = jQuery('#post_author_override');
				var $val = $select.val();
				
				$box.append(
					'<a href="user-edit.php?user_id=' + 
					$val + 
					'" style="padding-left: 10px;" id="pal-link"><?php _e("View/Edit Author Profile", "pal"); ?></a>'
				);

				var $link = jQuery('#pal-link');

				$select.change(function(){
					$link.attr('href', 'user-edit.php?user_id=' + $select.val() );
					$box.append('<span style="color: #00DD00; padding-left: 10px;"><?php _e("Link Updated", "pal"); ?></span>');
					jQuery('#authordiv .inside span').delay(1000).fadeOut();
					// console.log('New Author ID: ' + $select.val() );
				});
			}
			jQuery(document).ready( palAuthorLink );
		</script>
<?php endif; }
add_action('admin_head', 'pal_add_post_author_link');