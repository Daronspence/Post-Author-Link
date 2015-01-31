=== Post Author Link ===
Contributors: daronspence
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=daronspence%40gmail%2ecom&lc=US&item_name=WP%20Plugin%20Donation&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: post author, author link, cpt author, author, admin link, author override
Requires at least: 3.8
Tested up to: 4.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A small plugin that adds a link to the currently selected author on a post/page/etc author override meta box.

== Description ==

Post Author Link is a small plugin that adds a link to the post/page author override meta box. The link points towards the currently selected author's profile. Useful for quickly jumping to an authors profile to update/view user meta infirmation quickly.


    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

1. Upload `ppost-author-link` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to any post type that supports an author, and you will see the link next to the author dropdown. Note, you may have to show the author meta box if it has been hidden. Click "Screen Options" in the top right hand corner of a page or post and check the box for "Author"

== Frequently Asked Questions ==

= Does this automatically save the new author immeadiately? =

No, you must Publish / Update the post to save any changes.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 0.1 =
* Initial Commit