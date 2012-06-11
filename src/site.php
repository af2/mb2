<?php

/**
 * Site Configuration goes here
 */

$site['uri'] = split('/', $_SERVER['REQUEST_URI']);

$site['sitename'] = 'Michelle Baharier';
$site['name'] = 'Michelle Baharier';

$site['title'] = ':: Michelle Baharier';

$site['domain'] =  'http://michellebaharier.co.uk'  ;


$site['logo'] = false; // Using text instead 

$site['background'] = '#4d0c26 url(/img/mb-wall-4d0c26.png)';
//$site['background'] = "";


$site['twitter_bootstrap'] = 1;
$site['responsive'] = false;

$site['img_path'] = '/img/';
$site['js_path'] = '/js/';
$site['css_path'] = '/css/';

$site['google_analytics'] = '';
$site['piwik']  = '';

$site['network_api'] = array(

    'google'    => '',
    'facebook'  => '',
    'twitter'   => '',

);


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
        'artwork'   => 'The Works',
        'projects'  => 'Projects',
        'blog'      => 'Blog',
        'articles'  => 'Articles',
        //'about'     => 'About',
        'about'     => array(
            '_index'    => 'About',
            'cv'        => 'CV',
            'more'      => 'More',
        ),
        'contact'   => 'Contact',
);

$site['sociallinks'] = array(
        'LinkedIn'      => 'http://linkedin.com/',
        'Twitter'       => 'http://twitter.com/',
);

$site['filter_by'] = array(

    0 => 'none',
    1 => 'kind',
    2 => 'gallery'

);

$site['artwork_galleries'] = array(
    'lennon' => array(
        'heading'       => "Lennon's On Sale Again",
        'description'   => "Lennon's On Sale Again",
    ),
    'teeth' => array(
        'heading'       => "Teeth",
        'description'   => "Teeth",
    ),
    'maybebaby' => array(
        'heading'       => "Maybebaby",
        'description'   => "Maybebaby",
    ),
    'sea' => array(
        'heading'       => "Sea",
        'description'   => "Sea",
    ),
    'pettycoats' => array(
        'heading'       => "Pettycoats",
        'description'   => "Pettycoats",
    ),
    'shoptilyoudrop' => array(
        'heading'       => "Shop 'til You Drop",
        'description'   => "Shop 'til You Drop",
    ),
    'berlin' => array(
        'heading'       => "Berlin",
        'description'   => "Berlin",
    ),
    'flowers' => array(
        'heading'       => "Flowers",
        'description'   => "Flowers",
    ),
    'coincidences' => array(
        'heading'       => "Coincidences",
        'description'   => "Coincidences",
    ),

);

$site['artwork_kinds'] = array(
    'blackandwhite' => array(
        'heading'       => 'Black and White Photography',
        'description'   => 'Here is some of my photography shot on a black and white SLR'
    ),
    'colour' => array(
        'heading'       => 'Colour Photography',
        'description'   => 'Here is some of my photography shot on a colour SLR'
    ),
    'collage'       => array(
        'heading'       => 'Collages',
        'description'   => 'Description goes here'
    ),
    'drawing'       => array(
        'heading'       => 'Drawings',
        'description'   => 'Description goes here'
    ),
    'walls'         => array(
        'heading'       => 'Walls',
    ),
    'perfomanceart' => array(
        'heading'       => 'Performance Art',
    ),
    'soundart'      => array(
        'heading'       => 'Sound Art',
    ),
    'installation'  => array(
        'heading'       => 'Installations',
    ),
    'sculpture'     => array(
        'heading'       => 'Sculptures',
    ),
    'memorabilia'   => array(
        'heading'       => 'Memorabilia',
    ), // check spelling

);

$site['artwork'] = array(
    /**
     *  Black and White Photography
     */
    array(
        'name'   => "dolls",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "doit",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "bigbensnow",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ct2",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "glass",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "dolly",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "glass72",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "head72",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "libbirdsbrst",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "lonsnow",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "spor",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "teeth1",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "teeth2",
        'kind'   => 'blackandwhite',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     *  Collages
     */
    array(
        'name'   => "dreamphoto",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ec2",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ec4",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ecg1",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "face23",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "wc2",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "rain",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "stop",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "traf",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "tree1",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "well",
        'kind'   => 'collage',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     *  Colour Photos
     */
    array(
        'name'   => "mar1",
        'kind'   => 'colour',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "wheel1",
        'kind'   => 'colour',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ty",
        'kind'   => 'colour',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "ts2",
        'kind'   => 'colour',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "thew",
        'kind'   => 'colour',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     *  Drawing
     */
    array(
        'name'   => "waaert",
        'kind'   => 'drawing',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "dance",
        'kind'   => 'drawing',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "sunset",
        'kind'   => 'drawing',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "sae",
        'kind'   => 'drawing',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "face",
        'kind'   => 'drawing',
        'gallery'=> "",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY : Lennon
     */
    array(
        'name'   => "bwinim",
        'kind'   => 'collage',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "shlom",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "myb",
        'kind'   => 'composition',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "mother",
        'kind'   => 'composition',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "last",
        'kind'   => 'collage',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "istel",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "isr",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "fse4",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa1",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa2",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa3",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa4",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa5",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "losa6",
        'kind'   => 'colour',
        'gallery'=> "lennon",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY : teeth
     */
    array(
        'name'   => "teeth11",
        'kind'   => 'composition',
        'gallery'=> "teeth",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "stack",
        'kind'   => 'blackandwhite',
        'gallery'=> "teeth",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY: Maybebaby 
     * instdio,attr12,law,maybebaby2,playgooodgood,syud,thone
     */
    array(
        'name'   => "instdio",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "attr12",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "law",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "mbbb1",
        'kind'   => "collage",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "mbbb2",
        'kind'   => "collage",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "mbbb3",
        'kind'   => "collage",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "mbbb4",
        'kind'   => "collage",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "playgooodgood",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "syud",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "thone",
        'kind'   => "",
        'gallery'=> "maybebaby",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY: Sea 
     */
    array(
        'name'   => "icewales",
        'kind'   => "colour",
        'gallery'=> "sea",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "wales23",
        'kind'   => "colour",
        'gallery'=> "sea",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "sun",
        'kind'   => "colour",
        'gallery'=> "sea",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "seawe",
        'kind'   => "colour",
        'gallery'=> "sea",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "sea1",
        'kind'   => "colour",
        'gallery'=> "sea",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY: pettycoats 
     */
    array(
        'name'   => "whpe",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "abor",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "pettycoat1",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "pettycoat2",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "pettycoat3",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "boxies",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "blpe",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "bab",
        'kind'   => "",
        'gallery'=> "pettycoats",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     * GALLERY: shoptilyoudrop 
     */
    array(
        'name'   => "baby",
        'kind'   => "",
        'gallery'=> "shoptilyoudrop",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "shoptiludrop",
        'kind'   => "",
        'gallery'=> "shoptilyoudrop",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "shop",
        'kind'   => "",
        'gallery'=> "shoptilyoudrop",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     *  GALLERY: me
     */
    array(
        'name'   => "me2",
        'kind'   => "colour",
        'gallery'=> "me",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "wewar3",
        'kind'   => "",
        'gallery'=> "me",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "play",
        'kind'   => "",
        'gallery'=> "me",
        'year'   => 1990,
        'format' => "png",
    ),
    array(
        'name'   => "me722",
        'kind'   => "",
        'gallery'=> "me",
        'year'   => 1990,
        'format' => "png",
    ),
    /**
     *  GALLERY: Berlin
     */
    array(
        'name'   => "jeruslem1",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "jeruslem5",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "jude3",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "kunts55",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "metrain454",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "moon",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "pic",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "pilions",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "rainbow22",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "richsag111",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "road11",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "rock57",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "sea34",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "seagallery91",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "seaofgalliey2",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "star3",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "stlousi",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "train",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "train4",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "trainstation12",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "tria3",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "trian2",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "trian5",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "win1",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "wingmirrior",
        'kind' => "composition",
        'gallery' => "berlin",
        'year' => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "a1synoge37",
        'kind'   => "composition",
        'gallery'=> "berlin",
        'year'   => 2000,
        'format' => "png",
    ),

    array(
            'name'   => "bercross",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlin11",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlin30",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlin34",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlin67",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlin122",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "berlinp",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "buildingelm11",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "coke",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "coloums44",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "domerock3",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "domerock33",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "drfeurd",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "drive",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "ds4",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),

    array(
            'name'   => "emlinton2",
            'kind'   => "composition",
            'gallery'=> "berlin",
            'year'   => 2000,
            'format' => "png",
        ),
    /**
     *  Gallery: Flowers
     */
    array(
        'name'   => "marrgold22",
        'kind'   => "colour",
        'gallery'=> "flowers",
        'year'   => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "mer672",
        'kind'   => "colour",
        'gallery'=> "flowers",
        'year'   => 2000,
        'format' => "png",
    ),
    /**
     *  Gallery: Coincidences
     */
    array(
        'name'   => "16",
        'kind'   => "colour",
        'gallery'=> "coincidences",
        'year'   => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "bricklane",
        'kind'   => "colour",
        'gallery'=> "coincidences",
        'year'   => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "buildingstwin",
        'kind'   => "colour",
        'gallery'=> "coincidences",
        'year'   => 2000,
        'format' => "png",
    ),
    array(
        'name'   => "stalke",
        'kind'   => "colour",
        'gallery'=> "coincidences",
        'year'   => 2000,
        'format' => "png",
    ),
);

$site['cv'] = array(
    
    //'section' = array(
        'qualifications'        => array(

            'title'     => "Education and Qualifications",
            'content'   => array(

                array(
                    'year'      => array(
                        'from'  =>1998,
                        'to'    =>1999,
                    ),
                    'school'    => "The London Institute",
                    'qualification' => array(
                        'level'     => "Diploma",
                        'subject'   => "Digital Media"
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1997,
                        'to'    =>1998,
                    ),
                    'school'    => "The London Institute",
                    'qualification' => array(
                        'level'     => "Certificate",
                        'subject'   => "Digital Origination"
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1993,
                        'to'    =>1993,
                    ),
                    'school'    => "Goldsmiths’ College",
                    'qualification' => array(
                        'level'     => "Certificate",
                        'subject'   => "Supervisory Management"
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1985,
                        'to'    =>1987,
                    ),
                    'school'    => "Slade School of Fine Art",
                    'qualification' => array(
                        'level'     => "P.G.Dip",
                        'subject'   => "Fine Art"
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1982,
                        'to'    =>1985,
                    ),
                    'school'    => "Exeter College of Art and Design",
                    'qualification' => array(
                        'level'     => "BA. Hons",
                        'grade'     => '2:1',
                        'subject'   => "",
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1984,
                        'to'    =>1984,
                    ),
                    'school'    => "Stadel Schule",
                    'qualification' => array(
                        'level'     => "Exchange",
                        'subject'   => "",
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1981,
                        'to'    =>1982,
                    ),
                    'school'    => "Watford College of Art and Design",
                    'qualification' => array(
                        'level'     => "Foundation",
                        'subject'   => "",
                    ),
                ),
                array(
                    'year'      => array(
                        'from'  =>1980,
                        'to'    =>1980,
                    ),
                    'school'    => "Hertfordshire County Council",
                    'qualification' => array(
                        'level'     => "Stage II",
                        'subject'   => "Youth and Community Work",
                    ),
                ),
            ),
        ),
        'featured-exhibitions'  => array(

            'title'     => "Solo and Featured Exhibitions",
            'content'   => array(
                array(
                    'year'=>2001,
                    'name'=>"Maybe baby",
                    'venue'=>"Carnegie Library"
                ),
                array(
                    'year'=>2001,
                    'name'=>"Imaginary Landscapes",
                    'venue'=>"Café Prov"
                ),
                array(
                    'year'=>1999,
                    'name'=>"Mural",
                    'venue'=>"The Royal Bethlem Hospital Library"
                ),
                array(
                    'year'=>1998,
                    'name'=>"Shop till you drop",
                    'venue'=>"Southwark Women's Centre"
                ),
            ),
        ),
        /*
        'commissions'           => array(

            'title'     => "Commissions",
            'content'   => array(
                //t
            ),
        ),
        'group-exhibitions'     => array(

            'title'     => "Selected Group Exhibitions",
            'content'   => array(
                //t
            ),
        ),
        'awards'                => array(

            'title'     => "Prizes and Awards",
            'content'   => array(
                //t
            ),
        ),
        'reviews'               => array(

            'title'     => "Selected Reviews",
            'content'   => array(
                //t
            ),
        ),
        'articles'              => array(

            'title'     => "Books / Articles / Written by myself (selected)",
            'content'   => array(
                //t
            ),
        ),
        'work-experience'       => array(

            'title'     => "Work Experience",
            'content'   => array(
                //t
            ),
        ),
        */
    //),
);

shuffle($site['artwork']);

$site['portfolio'] = array(
    'Collages'    => array(
        'href'  => 'collages',
        'sql'   => "SELECT  *
                    FROM portfolio 
                    WHERE type = Visualisation 
                    LIMIT 0,30"
                , 
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