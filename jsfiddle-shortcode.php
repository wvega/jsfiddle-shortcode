<?php
/*
Plugin Name: JSFiddle Shortcode
Plugin URI: http://wvega.com/492/jsfiddle-shortcode/
Description: Allows to easily embed Fiddles using a small shortcode.
Version: 0.1
Author: Willington Vega
Author URI: http://wvega.com/

Copyright 2011 Willington Vega

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function jsfiddle_shortcode_handler($attrs, $content) {
    $tabs = array('result', 'js', 'css', 'html');

    extract(shortcode_atts(array(
        'url' => 'http://jsfiddle.net/wvega/UupFu/',
        'height' => '300px',
        'include' => join(',', $tabs)
    ), $attrs));
    
    $include = array_intersect(split(',', $include), $tabs);
    $url = trim($url, '/') . '/embedded/' . join(',', $include);

    $html = '<iframe style="width: 100%; height: ' . $height . '" src="' . $url . '"></iframe>';

    return $html;
}

add_shortcode('jsfiddle', 'jsfiddle_shortcode_handler');
