prometheus
==========

Front-end foundation for WordPress projects.

## LESS

This provides a base foundation for styling, including normalize, mixins, etc. Can be included at the top of your master LESS stylesheets:

```css
@import 'prometheus/less/prometheus.less' 
```

## WPThumb

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

## JavaScript

Includes various polyfill's/fixes for older browsers.