prometheus
==========

Front-end foundation for WordPress projects including a page template to view all your styles on one go.

## Installation

### 1) Adding it to your theme

Add this repository to your theme by submoduling it in.

```
git submodule add git@github.com:noeltock/prometheus.git
```

### 2) LESS

This provides a base foundation for styling, including normalize, mixins, etc. Can be included at the top of your master LESS stylesheets:

```css
@import 'prometheus/prometheus.less' 
```

### 3) Tools

To pull in wp-less and wpthumb, you can include this line near the top of your `functions.php`

```php
require_once( 'prometheus/prometheus.php' );
```

## Other Information

### View your Theme Styles

To see the majority of selectors and DOM elements on a single page (instead of having to create dummy content every time), you can select the following page template:

```
Theme Styles
```

To view an example, check out the very simple [noeltock.com theme styles](http://www.noeltock.com/theme-styles/)

### WPThumb

I don't like default resizing or timthumb, so I use WPThumb in my themes, like this:

```php
$newimageurl = wpthumb( $imageurl, 'width=200&height=200&crop=1', false );
```

Full list of parameters and defaults:

```php
$arg_defaults = array(
    	'width' 				=> 0,
    	'height'				=> 0,
    	'crop'					=> false,
    	'crop_from_position' 	=> 'center,center',
    	'resize'				=> true,
    	'watermark_options' 	=> array(),
    	'cache'					=> true,
    	'default'				=> null,
    	'jpeg_quality' 			=> 80,
    	'resize_animations' 	=> true,
    	'return' 				=> 'url',
    	'background_fill'		=> null
);
```

### JavaScript

Includes various polyfill's/fixes for older browsers.