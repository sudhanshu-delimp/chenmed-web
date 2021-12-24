# PDF.js Viewer

* Contributors: FalconerWeb, twistermc
* Tags: pdf, pdf.js, viewer, reader, embed, mozilla, shortcode
* Requires at least: 4.0
* Tested up to: 5.6
* Stable tag: 1.5.9
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* Requires PHP: 7.2

Embed a beautiful PDF viewer into pages.

## Description

Incorporate [Mozilla's PDF.js](https://github.com/mozilla/pdf.js/) viewer into your pages and posts via a Gutenberg block or a simple shortcode. PDF.js is a javascript library for displaying pdf pages within browsers.

Features:

*   Gutenberg Block and Shortcode
*   Elegant speckled gray theme
*   Customizable buttons
*   Page navigation drawer
*   Advanced search functionality
*   Language support for all languages
*   Protected PDF password entry
*   Loading bar & displays partially loaded PDF (great for huge PDFs!)
*   Document outline
*   Advanced zoom settings
*   Classic Editor: Easy to use editor media button that generates the shortcode for you
*   Support for mobile devices

Shortcode Syntax:

`[pdfjs-viewer url=http://www.website.com/test.pdf viewer_width=600px viewer_height=700px fullscreen=true download=true print=true]`

*   `url` (required): direct url to pdf file
*   `viewer_width` (optional): width of the viewer (default: 100%)
*   `viewer_height` (optional): height of the viewer (default: 800px)
*   `fullscreen` (optional): true/false, displays fullscreen link above viewer (default: true)
*   `fullscreen_text` (optional): text, change the fullscreen link text (default: View Fullscreen)
    * Spaces not allowed. Use `%20` in place of spaces.
*   `fullscreen_target` (optional): true/false, open the fullscreen link in a new tab
*   `download` (optional): true/false, enables or disables download button (default: true)
*   `print` (optional): true/false, enables or disables print button (default: true)
*   `zoom` (optional): auto/page-actual/page-width/page-fit/50/75/100/200/300/400, PDF zoom level (default: auto)
*   `search_term` (optional): string, highlights matching text on PDF load. Only single words are working at this time.

Want to help develop the plugin? Found a bug? [Find us on GitHub](https://github.com/TwisterMc/PDF.js-Viewer-Shortcode).

## Invalid Block? Update it.

Older blocks will be marked as _invalid_ in Gutenberg as we add new features. You just need to "[Attempt Block Recovery](https://www.kadenceblocks.com/docs/how-to-recover-a-broken-block/)" and that should update it. 

## Installation

This plugin can be installed either directly from your WordPress admin panel by searching for **PDF.js Viewer**, or downloading from the Wordpress Plugin Repository and uploading and expanding the archive into your sites `wp-content/plugins` directory.

## Changelog

### 1.5.9
* Fixing the issue that made Edge unhappy. *fingers crossed*

### 1.5.8

* Starting to hook up options page to the shortcode.
* Fixing a potential code injection problem
* Fix for WordPress 2021 Theme

### 1.5.7

* Fix for those not running WordPress 5+ where a fatal error would show because a function I called didn't exist.

### 1.5.6

* New options page to set the default settings.
* Only showing the 'Add PDF' media button to posts using the classic editor as it only works in the classic editor.
* Added a filter to pass in a custom domain if URLs are proxied. `pdfjs_set_custom_domain`
* Added a filter if you want to edit the PDF URL. `pdfjs_set_custom_edits`
* Ability to hide Search via setting on options page.
* Ability to show Sidebar via setting on options page.
* Ability to highlight a search term on PDF load.

### v1.5.5

* High Five 🖐

### v1.5.4

* Reworking way we make the PDF url relative.

### v1.5.3

* Remove only the first instance of the domain name from the URL. Leave it if it's in a directory or file name.

### v1.5.2

* Making the PDF URL relative so that maybe Microsoft Defender won't complain.
* Allowing the viewer to be called directly.
* Hiding the Open button.
* Checking for `register_block_type` function before calling it to better support WordPress 4.x. Thanks @Now-Italy-Demo  @octoxan
* Made the PDF URL relative to hopefully fix Windows Defender security issues. 
* Adding option to open the fullscreen link in a new tab.

### v1.5.1

* Reverting the update to Mozilla PDF.JS library as it broke older browsers and some other setups.

### v1.5

* Updated Plugin Name
* Updated Plugin Icon
* Gutenberg Block
* Updating Mozilla PDF.JS library.
* Adding a class to the fullscreen link.
* Ability to customize fullscreen link text.
* Ability to customize default zoom level.
* Classes so you can style things easier.
* Shorter default height.

### v1.4.6

 * Renaming URL variables to prevent a possible Edge security message.

### v1.4.5

 * Fixes a version number issue that was introduced in the last version.

### v1.4.4

 * Brings back the ability to hide print and download.
 * Adds version numbers to URLs to hopefully break caches and prevent weirdness.

### v1.4.3

* Fixes an issue where PDFs wouldn't load on production sites due to a `setLanguage` error.

### v1.4.2

* Added title to iFrame for accessibility.
* Cleaning up code per WordPress standards.

### v1.4.1

* Updating the Readme

### v1.4

* Updating to PDF.JS version v2.3.200
* Updating the Readme
* Adding Gutenberg Callout

### v1.0 - 1.3

* The birth of the plugin and first few versions.
