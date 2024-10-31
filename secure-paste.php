<?php
/*
Plugin Name: Secure Paste
Plugin URI: #
Description: Secure your post by removing unnecessary HTML tags from post, page and custom post type content before inserting it to your WordPress database. It also prevents users to paste or write disallowed HTML tags in post content.
Version: 1.6
Author: Nikunj Soni
Author URI: #
License: GPL2


THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

if ( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed this file directly
} 

function secure_paste($data) {
	
	// These are the tags which are allowed to insert in post, you can add or remove any if you know how to do it
	
	$secure_paste_tags = array(
		'p' => array(),
		'h1' => array(),
		'h2' => array(),
		'h3' => array(),
		'h4' => array(),
		'h5' => array(),
		'h6' => array(),
		'ol' => array(),
		'ul' => array(),
		'li' => array(),
		'abbr' => array(
			'title' => true,
		),
		'acronym' => array(
			'title' => true,
		),
		'a' => array(
			'href' => true,
			'title' => true,
		),
		'img' => array(
			'src' => array(),
			'alt' => array(),
			'class' => array(),
			'width' => array(),
			'height' => array()
		),
		'del' => array(
			'datetime' => true,
		),
		'ins' => array(),
		'blockquote' => array(),
		'cite' => array(),
		'code' => array(),
		'em' => array(),
		'b' => array(),
		'i' => array(),
		'u' => array(),
		'q' => array(),
		'strike' => array(),
		'strong' => array(),
		'br' => array(),
		'hr' => array()
	);
	
	// allowed protocols
	$protocols = array( 'http', 'https' );

	// cleaning HTML tags...
	$data['post_content'] = wp_kses($data['post_content'], $secure_paste_tags, $protocols);
	
	return $data; // return data to WordPress
}
add_filter( 'wp_insert_post_data' , 'secure_paste');
?>