
<!-- saved from url=(0108)https://raw.github.com/gist/1740012/6d3ab4f0c35b257ac1319a3c6ee2b05e0901a34b/BasicAuthControllerProvider.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">&lt;?php
namespace Silex\Provider;

use Silex\Application;
use Silex\SilexEvents;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class BasicAuthControllerProvider implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        // init
        $app['login.username'] = (isset($app['login.username']))? $app['login.username']: "demo";
        $app['login.password'] = (isset($app['login.password']))? $app['login.password']: "123456";
        $app['login.redirect'] = (isset($app['login.redirect']))? $app['login.redirect']: "home";
        $app['login.basic_login_response'] = function() {
            $response = new Response();
            $response-&gt;headers-&gt;set('WWW-Authenticate', sprintf('Basic realm="%s"', 'Basic Login'));
            $response-&gt;setStatusCode(401, 'Please sign in.');
            return $response;            
        };
        // controllers
        $controllers = new ControllerCollection();
        // login
        $controllers-&gt;get('/', function (Request $request, Application $app) {
            $username = $request-&gt;server-&gt;get('PHP_AUTH_USER', false);
            $password = $request-&gt;server-&gt;get('PHP_AUTH_PW');

            if ($app['login.username'] === $username &amp;&amp; $app['login.password'] === $password) {
                $app['session']-&gt;set('isAuthenticated', true);
                return $app-&gt;redirect($app['url_generator']-&gt;generate($app['login.redirect']));
            }
            return $app['login.basic_login_response'];
        })-&gt;bind('login');

        // logout
        $controllers-&gt;get('/logout', function (Request $request, Application $app) {
            $app['session']-&gt;set('isAuthenticated', false);
            return $app['login.basic_login_response'];
        })-&gt;bind('logout');

        // add befre event
        $this-&gt;addCheckAuthEvent($app);
        return $controllers;
    }

    private function addCheckAuthEvent($app)
    {
        // check login
        $app['dispatcher']-&gt;addListener(SilexEvents::BEFORE, function (GetResponseEvent $event) use ($app){
            $request = $event-&gt;getRequest();
            if ($request-&gt;getRequestUri() === $app['url_generator']-&gt;generate('login')) {
                return;
            }
            $app['session']-&gt;get('isAuthenticated');
            if (!$app['session']-&gt;get('isAuthenticated')) {
                $ret = $app-&gt;redirect($app['url_generator']-&gt;generate('login'));
            } else {
                $ret = null;
            }
            if ($ret instanceof Response) {
                $event-&gt;setResponse($ret);
            }
        }, 0);
    }
}</pre></body></html>