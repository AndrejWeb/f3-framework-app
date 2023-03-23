<?php
/**
 * AAWeb.tech
 * https://aaweb.tech
 */

require '../vendor/autoload.php';
$db = require '../app/config/db.php';

$f3 = \Base::instance();

// config
$f3->config('../app/config/config.ini');
// db
$f3->set('db', $db);

// simplest route
$f3->route('GET /basic', function () {
    echo 'Basic route';
});

// parameter route
$f3->route('GET /company/@count', function ($f3, $params) {
    echo 'There are ' . $params['count'] . ' employees in the company';
    echo "<br />";
    echo 'There are ' . $f3->get('PARAMS.count') . ' employees in the company';
});

$f3->route('GET /', function ($f3) {
    // reroute to route '@home'
    $f3->reroute('@home');
});

// cache
// uncomment to turn on caching
//$f3->set('CACHE', true);

// named routes @home, @about and @contact
$f3->route('GET @home: /home', 'pages\Site->home');
//$f3->route('GET @home: /home', 'App\Pages\Site->home');   // will not work
$f3->route('GET @about: /about', 'pages\Site->about');
$f3->route('GET @contact: /contact', 'pages\Site->contact');

// multiple methods, you can test POST request via Postman for example
$f3->route('GET|POST /api', function () {
    echo 'Route api. Allowed methods: GET and POST.';
});

// database
$f3->route('GET /customers', 'pages\Site->customers');

// ajax
$f3->route('POST /send [ajax]', 'pages\Site->send');

// cached route, the cache expires in 30 seconds
// to test this works enable caching above, run the route /cached, try to change the content 'Cached route' to 'Cached route 1234' within 30 seconds and you will see it won't show up until the cache has expired.
$f3->route('GET /cached', function ($f3) {
    echo 'Cached route';
}, 30);

// variables
$f3->route('GET /variables', function ($f3) {
    if ($f3->exists('var')) {
        echo $f3->get('var');
    } else {
        $f3->set('var', 'Variable value');
        echo $f3->get('var');
    }

    echo "<br />";

    $f3->mset(
        array(
            'foo'=>'bar',
            'baz'=>123
        )
    );

    echo $f3->get('foo');
    echo "<br />";
    echo $f3->get('baz');

    echo "<br />";
    $f3->set('a', 'fire');
    $f3->concat('a', 'cracker');
    echo $f3->get('a'); // returns the string 'firecracker'
    echo "<br />";
    $f3->copy('a', 'b');
    echo $f3->get('b'); // returns the same string: 'firecracker'
});

// map
$f3->map('/cart/@item', 'pages\Item');

// custom errors
$f3->set(
    'ONERROR',
    function ($f3) {
        switch($f3->get('ERROR.code')) {
            case 404:
                echo \View::instance()->render('404.php');
                break;
        }
    }
);

$f3->run();
