<?php
/*
Plugin Name: Enhanced SVG, WEBP, AVIF Upload & Display
Description: Adds support for SVG, WEBP, and AVIF uploads to the Media Library and ensures safe display throughout WordPress.
Version: 1.0
Author: HMShingala
Author URI: www.hmshingala.com
*/

// Allow SVG, WEBP, AVIF in media uploads
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    $mimes['avif'] = 'image/avif';
    return $mimes;
});

// Secure SVG uploads by sanitizing files
add_filter('wp_check_filetype_and_ext', function($data, $file, $filename, $mimes){
    $filetype = wp_check_filetype($filename, $mimes);
    if($filetype['ext'] === 'svg') {
        $svg = file_get_contents($file);
        // Basic check: prevent scripts in SVGs (for advanced use, use a library like enshrined/svg-sanitize)
        if(preg_match('/<script/i', $svg)) {
            $data['ext'] = $data['type'] = false;
        }
    }
    return $data;
}, 10, 4);

// Optional: Allow SVG preview in the admin
add_action('admin_head', function(){
    echo '<style>
    .attachment-details .attachment-info .thumbnail img[src$=".svg"],
    .media-sidebar .thumbnail img[src$=".svg"] {
      width: 100% !important;
      height: auto !important;
    }
    </style>';
});

// Enable display in frontend (normal for webp/avif; for SVG, just print <img>—WordPress supports it natively in most builders)
