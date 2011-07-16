# JSFiddle Shortcode

I tested the plugin with WordPress 3.2.1 but it's so simple that it should work with previous versions without problems. If you happen to test it against older versions, please let me know how it goes.

## Usage:

`[jsfiddle url="http://jsfiddle.net/wvega/UupFu/" height="300px" include="result,html,js,css"]`

* `height` and `include` are optional.
* `url` is the URL of the fiddle you want to embed, with or without trailing slash.
* `include` can be any combination of `result, html, js and css`, separated by commas; the tabs in the embedded fiddle will follow the order specified with the `include` attribute.

## Result:

`<iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/wvega/UupFu/embedded/result,html,js,css"></iframe>`

<iframe style="width: 100%; height: 300px" src="http://jsfiddle.net/wvega/UupFu/3/embedded/result,html,js,css"></iframe>
