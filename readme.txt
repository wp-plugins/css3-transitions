=== CSS3 Transitions ===
Contributors: celloexpressions
Tags: css3, transitions, eye candy, ui, effects, smooth, automatic, auto, animate, animations
Requires at least: 3.0
Tested up to: 3.5
Stable tag: 1.0
Description: Automatically adds CSS3 transitions to your website/blog and the WordPress admin. Links, etc. get animated transitions between their normal and hover states.
License: GPLv2

== Description ==
This plugin automatically adds CSS3 transitions to your website/blog and the WordPress admin. Links, etc. get animated transitions between their normal and hover states. CSS3 Transitions are supported by the most recent version of every major browser (Chrome, Internet Explorer 10, Firefox, Opera, Safari); browsers without support will continue to render everything as they had before. This plugin adds the transitions (eye candy) to all `<a>` (link), `<li>` (list item, usually used in navigation menus), `<img>` (image), and `<input>` (form field and button) tags that have a hover or focus state defined (for example, if links change color when the mouse hovers over them). Other "buttons" and WordPress-specific selectors are also targeted. Transitions are between .3 and .5 seconds in duration, so they shouldn't cross the line between nice and distracting; however, depending on the colors used in your theme, the transitions may not be noticeable.

Please feel free to offer any feature suggestions you might have and I WILL consider them for future releases.

== Installation ==
1. Take the easy route and install through the WordPress plugin adder :) OR
1. Download the .zip file and upload the unzipped folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. CSS3 transitions should automatically be added to your site and WordPress, as long as your theme has the `<?php wp_head() ?>` action hook

== Frequently Asked Questions ==
= The Transitions Aren't Working... =
First, make sure you know what the transitions look like (and you need to be using a mouse, not touch). Then, make sure that you are using a supported browser (Chrome, Internet Explorer 10+, Firefox 4+, Opera 11+, Safari 4+). Next, make sure that your theme's links have a different color or other effects when you mouse over them. This is the change that will be animated. Then, make sure that your theme's `header.php` file contains the `<?php wp_head() ?>` action hook. If none of that works, it's likely that your theme doesn't support transitions or has explicitly blocked them. However, you should still get the effects in the WordPress admin area if your browser supports them.

= Where's the settings page? =
For simplicity's sake, no settings page is included. While there are a few potential options, I don't feel that they would be worth the extra bloat of a settings page. If you would like to make adjustments (such as changing the animation duration), you may do so by editing the plugin's php file. 

== Changelog ==
= 1.0 =
* First publically available version of the plugin.
* Tested with WordPress 3.4 and 3.5. Should be compatible with most versions of WordPress.

== Upgrade Notice ==
= 1.0 =
* First public version of plugin