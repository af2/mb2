<?php


require_once __DIR__.'/../src/app.php';

require_once __DIR__.'/../src/site.php';

use Symfony\Component\HttpFoundation\Response;


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
/*
    if (!isset($blogPosts[$id])) {
        $app->abort(404, "$kind does not exist.");
    }
*/  

    /**
     * Error handing for undefined array keys
     */
    foreach ($site['artwork_kinds'][$kind] as $key => $content) {
        if(in_array($key, array('heading','description'))){
            $app->abort(404, "$kind not fully defined.");
        }
    }
    

    $site['filter_artwork'] = $kind;

    return $app['twig']->render('artwork_view.html.twig', $site); 
});

$app->get('/artwork/gallery/{gallery}/', function($gallery) use($app, $site) {

    $site['filter_artwork'] = $gallery;
    //$site['filter_gallery'] = $gallery;

    return $app['twig']->render('artwork_view.html.twig', $site); 
});

$app->get('/artwork/{kind}/{artwork}/', function($kind, $artwork) use($app, $site) {

    $site['filter_artwork'] = $kind;
    $site['select_artwork'] = $artwork;

    return $app['twig']->render('artwork_item.html.twig', $site); 
});

$app->get('/artwork/gallery/{gallery}/{artwork}/', function($gallery, $artwork) use($app, $site) {

    $site['filter_artwork'] = $gallery;
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
if ($app['debug'] == false){

    $app->error(function (\Exception $e, $code) {
        switch ($code) {
            case 404:
                $message = "Bloody Hell! We can't that.";
                break;
            default:
                $message = 'We are sorry, but something went terribly wrong.';
        }

        return new Response($message, $code);
    });

}










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