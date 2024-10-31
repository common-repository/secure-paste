=== Secure Paste ===
Contributors: Nikunj Soni
Tags: safe, safe post, security, paste, editor, post, page, post content, strip tags, TinyMCE, wysiwyg, html, design, wordpress
License: GPLv2
Requires at least: 3.7
Tested up to: 6.1.1
Stable tag: 1.6

Secure your post by removing unnecessary HTML tags from post, page and custom post type content before inserting it to your WordPress database. It also prevents users to paste or write disallowed HTML tags in post content.

== Description ==

WordPress itself does a job of filtering dangerous code inside your content.
But your users can break your site design without compromising your security by inserting unnecessary HTML tags in post, page or in custom post type.

This plugin removes unnecessary HTML tags from post, page and custom post type content before inserting it to your WordPress database.
It also prevents users to paste or write disallowed HTML tags in post content.

If your website users creates content for you and if they copy the content from some other webpages, then in that situation this plugin will be helpful to you to disallowed unnecessary HTML tags.

* This plugin will only allow the below HTML tags :

<code>

p, h1, h2, h3, h4, h5, h6, ol, ul, li, ins, blockquote,
cite, code, em, b, i, u, q, strike, strong, br, hr,
abbr (allowed attributes: title),
acronym (allowed attributes: title),
a (allowed attributes: href, title),
img	(allowed attributes: src, alt, class, width, height),
del (allowed attributes: datetime)

</code>


Usage :

1. Download and extract this plugin to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress and enjoy !

== Installation ==

1. Download and extract this plugin to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress and enjoy !

== Amazing Features ==

* Easy to use
* File is easy customizable ( you can add your tag in secure-paste.php file )

== Changelog ==

= 1.6 =
* Tested and compatible with WordPress 6.1.1

= 1.5 =
* Tested and compatible with WordPress 5.8

= 1.4 =
* Tested and compatible with WordPress 5.2.3

= 1.3 =
* Renamed to Secure Paste & Tested on WordPress 4.9.6

= 1.2 =
* Renamed to WP Safe Post

= 1.1 =
* Tested on WordPress 4.7

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.6 =
* Tested and compatible with WordPress 6.1.1

= 1.5 =
* Tested and compatible with WordPress 5.8

= 1.4 =
* Tested and compatible with WordPress 5.2.3

= 1.3 =
* Renamed to Secure Paste & Tested on WordPress 4.9.6

= 1.2 =
* Renamed to WP Safe Post

= 1.1 =
* Tested on WordPress 4.7

= 1.0 =
* Initial release