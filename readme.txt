=== JSFiddle Shortcode ===
Contributors: wvega
Donate link: https://wvega.com/
Tags: jsfiddle
Requires at least: 3.4.0
Tested up to: 6.6.2
Stable tag: 1.1.3
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Allows to easily embed Fiddles using a small shortcode.

== Description ==

## Usage:

`[jsfiddle url="https://jsfiddle.net/wvega/UupFu/" height="300px" include="result,html,js,css" font-color="39464E" menu-background-color="FFFFFF" code-background-color="f3f5f6" accent-color="1C90F3"]`

* All attributes are optional.
* `url` is the URL of the fiddle you want to embed, with or without trailing slash.
* `include` can be any combination of `result, html, js and css`, separated by commas; the tabs in the embedded fiddle will follow the order specified with the `include` attribute.
* `font-color` is the color used for the name of the tabs.
* `menu-background-color` is the color used for the background of the tabs.
* `code-background-color` is the color used for the background of the area where the code and results are shown.
* `accent-color` is the color of the indicator shown below the active tab.

## Result:

`<iframe style="width: 100%; height: 300px" src="https://jsfiddle.net/wvega/UupFu/embedded/result,html,js,css/?fontColor=39464E&menuColor=FFFFFF&bodyColor=f3f5f6&accentColor=1C90F3"></iframe>`

<iframe style="width: 100%; height: 300px" src="https://jsfiddle.net/wvega/UupFu/embedded/result,html,js,css/?fontColor=39464E&menuColor=FFFFFF&bodyColor=f3f5f6&accentColor=1C90F3"></iframe>

== Installation ==

1. Extract the plugin files to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use `[jsfiddle]` in your post content.

== Frequently Asked Questions ==

== Screenshots ==

1. A JSFiddle embedded in a post using the plugin.

== Changelog ==

= 1.1.3 =

- Add missing License and License URI headers in readme.txt

= 1.1.2 =

- Tested up to WordPress 6.6.2
- Force HTTPS scheme for provided fiddle URLs to match the site's scheme
- Improve sanitization of shortcode attributes and escape the value of the resulting HTML attributes

= 1.1.1 =

- Tested up to WodPress 5.2.
- Use HTTPS URLs in plugin headers, default value for url attribute and Donate link.

= 1.1.0 =

- Add support for font-color, menu-background-color, code-background-color and accent-color attributes.

= 1.0.1 =

- Tested up to WordPress 4.4-beta1.

= 1.0.0 =

- Fix PHP Deprecated notice.

= 0.1 =

- First release.

== Upgrade Notice ==
