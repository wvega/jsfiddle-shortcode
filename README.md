# JSFiddle Shortcode

Tested up to 5.5.0 and known to work on versions of WordPress as old as 3.4.0. If you happen to test it against older versions, please let me know how it goes.

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
