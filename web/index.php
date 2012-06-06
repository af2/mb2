<?php


require_once __DIR__.'/../src/app.php';

require_once __DIR__.'/../src/site.php';


//$app->before(function() use ($conn){
    $app['connection'] = new PDO('mysql:dbname='.DBNAME, DBUSER, DBPASS);
//});

    $app['twig']->addFunction('filefound', new Twig_Function_Function('file_exists'));

$app->get('/', function() use($app, $site) { 
    return $app['twig']->render('boot.html.twig', $site); 
});

$app->get('/artwork/', function() use($app, $site) { 
    return $app['twig']->render('artwork.html.twig', $site); 
});

$app->get('/artwork/{kind}/', function($kind) use($app, $site) {

    $site['filter_artwork'] = $kind;

    return $app['twig']->render('artwork_view.html.twig', $site); 
});

$app->get('/artwork/{kind}/{artwork}/', function($kind, $artwork) use($app, $site) {

    $site['filter_artwork'] = $kind;
    $site['select_artwork'] = $artwork;

    return $app['twig']->render('artwork_item.html.twig', $site); 
});

$app->get('/contact/', function() use($app, $site) { 
    return $app['twig']->render('contact.html.twig', $site); 
});

$app->get('/about/', function() use($app, $site) { 
    return $app['twig']->render('foundation.html.twig', $site); 
});
/**
 *
 */



$app->get('/colors', function() use($app) { 

    $colors = array();

    $sql = 'SELECT * FROM colors ORDER BY id';
    foreach ($app['connection']->query($sql) as $row) {
        $colors[] = $row['color'];
    }
    //return 'This is blog post number '.$app->escape($id); 
    return implode('<br />', $colors);
}); 



$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello '.$app->escape($name); 
}); 




$app->get('/test', function () use ($app) {
    return  $app->escape('This page is sample page');
})->bind('test');




$app->after(function() use ($app){
    $app['connection'] = null;
});

$app->run(); 