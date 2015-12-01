<?php

/**
 * JSFiddle Shortcode
 *
 * @link              https://github.com/wvega/jsfiddle-shortcode
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       JSFiddle Shortcode
 * Plugin URI:        http://wvega.com/492/jsfiddle-shortcode/
 * Description:       Allows to easily embed Fiddles using a small shortcode.
 * Version:           1.0.1
 * Author:            Willington Vega
 * Author URI:        http://wvega.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function jsfiddle_shortcode_handler($attrs, $content) {
    $accepted_tabs = array('result', 'js', 'css', 'html');

    extract(shortcode_atts(array(
        'url' => 'http://jsfiddle.net/wvega/UupFu/',
        'height' => '300px',
        'include' => implode( ',', $accepted_tabs ),
    ), $attrs));

    $include = array_intersect( explode( ',', $include ), $accepted_tabs );
    $url = trim( $url, '/' ) . '/embedded/' . implode( ',', $include );

    $html = '<iframe style="width: 100%; height: ' . $height . '" src="' . $url . '"></iframe>';

    return $html;
}

add_shortcode('jsfiddle', 'jsfiddle_shortcode_handler');
