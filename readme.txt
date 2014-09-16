=== JSFiddle Shortcode ===
Contributors: wvega
Donate link: http://wvega.com/
Tags: jsfiddle
Requires at least: 3.2.1
Tested up to: 4.0
Stable tag: 1.0.0

Allows to easily embed Fiddles using a small shortcode.

== Description ==

## Usage:

`[jsfiddle url="http://jsfiddle.net/wvega/UupFu/" height="300px" include="result,html,js,css"]`

* `height` and `include` are optional.
* `url` is the URL of the fiddle you want to embed, with or without trailing slash.
* `include` can be any combination of `result, html, js and css`, separated by commas; the tabs in the embedded fiddle will follow the order specified with the `include` attribute.

## Result:

`<iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/wvega/UupFu/embedded/result,html,js,css"></iframe>`

<iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/wvega/UupFu/embedded/result,html,js,css"></iframe>

== Installation ==

1. Extract the plugin files to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use `[jsfiddle]` in your post content.

== Frequently Asked Questions ==

== Screenshots ==

1. A JSFiddle embedded in a post using the plugin.

== Changelog ==

= 1.0.0 =
Fix PHP Deprecated notice.

= 0.1 =
First release.

== Upgrade Notice ==
