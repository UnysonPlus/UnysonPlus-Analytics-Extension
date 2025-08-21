<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'Analytics', 'fw' );
$manifest['slug']        = 'unysonplus-analytics'; // unique identifier
$manifest['description'] = __( 
    'Adds Google Analytics tracking support, enabling visitor and page view tracking within your WordPress site.', 
    'fw' 
);

$manifest['version']     = '1.0.2';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Repo Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-Analytics-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-Analytics-Extension';
$manifest['github_branch'] = 'master'; // optional, can use 'stable'

// Author Info 
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Extra Meta
$manifest['license']        = 'GPL-2.0-or-later';
$manifest['text_domain']    = 'fw'; 
$manifest['requires_php']   = '7.4'; 
$manifest['requires_wp']    = '5.8';
