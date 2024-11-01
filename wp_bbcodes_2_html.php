<?php
/*
Plugin Name: WP BBCodes to HTML Parser
Plugin URI: http://www.xblurb.com/wp-bbcodes-to-html-parser
Description: Wordpress plugin to automatically convert BBCodes to HTML tags from your post contents.
Version: 1.5
Author: Muhammad Alyas
Author URI: http://www.xblurb.com/wp-bbcodes-to-html-parser
*/

/*
Copyright Muhammad Alyas 2010

Licensed under the terms of the GPL version 2, see:
http://www.gnu.org/licenses/gpl.txt

Provided without warranty, inluding any implied warrant of merchantability or fitness for purpose.
*/

function wp_bbcodes_2_html($data){

$bbcodes = array("[list]", "[*]", "[/list]", 
                "[img]", "[/img]", 
                "[b]", "[/b]",
				"[center]", "[/center]", 
                "[u]", "[/u]", 
                "[i]", "[/i]",
                '[color="', "[/color]",
                "[size=\"", "[/size]",
                '[url="', "[/url]",
                "[mail=\"", "[/mail]",
                "[code]", "[/code]",
                "[quote]", "[/quote]",
                '"]');
$htmltags = array("<ul>", "<li>", "</ul>", 
                "<img src=\"", "\">", 
                "<b>", "</b>",
				"<center>", "</center>",
                "<u>", "</u>", 
                "<i>", "</i>",
                "<span style=\"color:", "</span>",
                "<span style=\"font-size:", "</span>",
                '<a href="', "</a>",
                "<a href=\"mailto:", "</a>",
                "<code>", "</code>",
                "<blockquote>", "</blockquote>",
                '">');
  return $data = str_ireplace($bbcodes, $htmltags, $data);
}

add_filter('the_content', 'wp_bbcodes_2_html'); 

?>
