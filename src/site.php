<?php

/**
 * Site Configuration goes here
 */

$site['uri'] = split('/', $_SERVER['REQUEST_URI']);

$site['sitename'] = 'Michelle Baharier';
$site['name'] = 'Michelle Baharier';
$site['logo'] = false;

$site['background'] = '#4d0c26 url(/img/mb-wall-4d0c26.png)';
//$site['background'] = "";


$site['twitter_bootstrap'] = 1;
$site['responsive'] = false;

$site['img_path'] = '/img/';
$site['js_path'] = '/js/';
$site['css_path'] = '/css/';

$site['google_analytics'] = '';


$site['headline'] = 'Welcome.';

$site['color'] = array(
    '#9fee00', '#86b32d', '#679b00', '#b9f73e', '#c9f76f',
    '#cd0074', '#e6399b', '#e667af', '#992667', '#85004b',
    '#ef002a'
);

$site['google_webfonts'] = array(
    'Judson:400,700,400italic',
    'Caudex:400,700,400italic,700italic',
    'Istok+Web:400,700,400italic,700italic&subset=latin,latin-ext',
);

$site['carousel'] = array(
    array(
        'image' => '/img/artwork/blackandwhite/slide/s_dolls.png',
        'caption' => array(
            'heading' => "Slideshow",
            'body'    => "Nice, isn't it?"
        )
    ),
    array(
        'image' => '/img/artwork/blackandwhite/slide/s_bigbensnow.png',
        //'caption' => array()
    ),
    //'/img/ss-02.jpg',
    //'http://flickholdr.com/1130/289/interior_design',
    //'http://flickholdr.com/1130/289/artwork',
    //'http://flickholdr.com/1130/289/cooltan_arts',
);

$site['navlinks'] = array(
        'The Works'     => 'artwork',
        //'Workshop'      => 'workshop',
        'Projects'      => 'projects',
        'Blog'          => 'blog',
        'Articles'      => 'articles',
        //'Notes'         => 'notes',
        'About'         => 'about',
        'Contact'       => 'contact',
);

$site['sociallinks'] = array(
        'LinkedIn'      => 'http://linkedin.com/',
        'Twitter'       => 'http://twitter.com/',
);

$site['artwork'] = array(
    array(
        'name'   => 'dolls',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'doit',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'bigbensnow',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'ct2',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'glass',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'dolly',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'glass72',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'head72',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
    array(
        'name'   => 'libbirdsbrst',
        'kind'   => 'blackandwhite',
        'format' => 'png',
    ),
);

$site['portfolio'] = array(
    'Collages'    => array(
        'href'  => 'collages',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Visualisation LIMIT 0,30', 
    ),
    'Collages'          => array(
        'href'  => 'collages',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Collage LIMIT 0,30', 
    ),
    'Websites'          => array(
        'href'  => 'websites',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Website LIMIT 0,30', 
    ),
    'Facebook Ad Units' => array(
        'href'  => 'facebook-ads',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Facebook Ad LIMIT 0,30', 
    ),
    'Facebook Pages'    => array(
        'href'  => 'facebook-pages',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Facebook Pages LIMIT 0,30', 
    ),
    'Facebook Apps'    => array(
        'href'  => 'facebook-apps',
        'sql'   => 'SELECT * FROM portfolio WHERE type = Facebook Apps LIMIT 0,30', 
    ),

);


$portfolio = $site;

$portfolio['name'] = 'my portfolio';