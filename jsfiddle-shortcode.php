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
 * Plugin URI:        https://wvega.com/492/jsfiddle-shortcode/
 * Description:       Allows to easily embed Fiddles using a small shortcode.
 * Version:           1.1.1
 * Author:            Willington Vega
 * Author URI:        https://wvega.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

function jsfiddle_shortcode_handler($atts, $content) {
    $atts = jsfiddle_shortcode_attrs( $atts );

    if ( empty( $atts['url'] ) ) {
        return;
    }

    $url = jsfiddle_shortcode_embed_url( $atts );

    return '<iframe style="width: 100%; height: ' . $atts['height'] . '" src="' . $url . '" allowfullscreen="allowfullscreen" frameborder="0"></iframe>';
}
add_shortcode('jsfiddle', 'jsfiddle_shortcode_handler');

function jsfiddle_shortcode_attrs( $atts ) {
    $accepted_tabs = array('result', 'js', 'css', 'html');

    $atts = shortcode_atts( array(
        'url' => 'https://jsfiddle.net/wvega/UupFu/',
        'height' => '300px',
        'include' => implode( ',', $accepted_tabs ),
        'theme' => null,
        'font-color' => null,
        'code-background-color' => null,
        'menu-background-color' => null,
        'accent-color' => null,
    ), $atts );

    $atts['include'] = array_intersect( $accepted_tabs, explode( ',', $atts['include'] ) );

    return $atts;
}

function jsfiddle_shortcode_embed_url( $atts ) {
    if ( $atts['theme'] ) {
        $url = '<jsfiddle-url>/embedded/<tabs>/<theme>/';
    } else {
        $url = '<jsfiddle-url>/embedded/<tabs>/';
    }

    $url = str_replace( '<jsfiddle-url>', trim( $atts['url'], '/' ), $url );
    $url = str_replace( '<tabs>', implode( ',', $atts['include'] ), $url );
    $url = str_replace( '<theme>', $atts['theme'], $url );
    $url = add_query_arg( jsfiddle_shortcode_query_args( $atts ), $url );

    return $url;
}

function jsfiddle_shortcode_query_args( $atts ) {
    $query_args = array(
        'fontColor' => 'font-color',
        'menuColor' => 'menu-background-color',
        'bodyColor' => 'code-background-color',
        'accentColor' => 'accent-color',
    );

    foreach ( $query_args as $query_arg => $attr_name ) {
        if ( isset( $atts[ $attr_name ] ) && ! empty( $atts[ $attr_name ] ) ) {
            $query_args[ $query_arg ] = urlencode( $atts[ $attr_name ] );
        } else {
            unset( $query_args[ $query_arg ] );
        }
    }

    return $query_args;
}
