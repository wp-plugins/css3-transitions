<?php
/**
 * Plugin Name: CSS3 Transitions
 * Plugin URI: http://celloexpressions.com/dev/css3-transitions
 * Description: Automatically adds CSS3 transitions to your website/blog and the WordPress admin. Links, etc. get animated transitions between their normal and hover states.
 * Version: 1.0
 * Author: Nick Halsey
 * Author URI: http://celloexpressions.com/
 * Tags: css3, transitions, eye candy, ui, effects, smooth, automatic, auto, animate, animations
 * License: GPL

=====================================================================================
Copyright (C) 2012 Nick Halsey

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WordPress; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
=====================================================================================
*/

add_action('wp_head', 'do_css3_transitions');
add_action('admin_head', 'do_css3_transitions');

function do_css3_transitions(){ ?>
	<style type="text/css">
	/* From CSS3 Transitions Plugin.
		target several selectors which are most likely to have 
		hover states defined in the theme (and/or the WP core)
	*/
		a, li {
			transition: all ease .3s;
			-webkit-transition: all ease .3s;
			-ms-transition: all ease .3s;
			-moz-transition: all ease .3s;
			-o-transition: all ease .3s;
		}
		img {
			transition: all ease .5s;
			-webkit-transition: all ease .5s;
			-ms-transition: all ease .5s;
			-moz-transition: all ease .5s;
			-o-transition: all ease .5s;
		}
		input, .button, .hndle {
			transition: all ease .4s;
			-webkit-transition: all ease .4s;
			-ms-transition: all ease .4s;
			-moz-transition: all ease .4s;
			-o-transition: all ease .4s;
		}
	</style>	
<?php }
// Yup, that's it!