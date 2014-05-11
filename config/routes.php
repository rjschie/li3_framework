<?php

/**
 * The routes file is where you define your URL structure, which is an important part of the
 * [information architecture](http://en.wikipedia.org/wiki/Information_architecture) of your
 * application. Here, you can use _routes_ to match up URL pattern strings to a set of parameters,
 * usually including a controller and action to dispatch matching requests to. For more information,
 * see the `Router` and `Route` classes.
 *
 * @see lithium\net\http\Router
 * @see lithium\net\http\Route
 */
use lithium\net\http\Router;
use lithium\core\Environment;
//use lithium\security\Auth;

//$userAuth = Auth::check( 'default' );

/**
 * With globalization enabled a localized route is configured by connecting a
 * continuation route. Once the route has been connected, all the other
 * application routes become localized and may now carry a locale.
 *
 * Requests to routes like `/en/posts/edit/1138` or `/fr/posts/edit/1138` will
 * carry a locale, while `/posts/edit/1138` keeps on working as it did before.
 */
if ($locales = Environment::get('locales')) {
	$template = '/{:locale:' . join('|', array_keys($locales)) . '}/{:args}';
	Router::connect($template, array(), array('continue' => true));
}

/**
 * Home Route
 */
//if ($userAuth) {
	Router::connect( '/', 'Home::index' );
//} else {
//	Router::connect( '/', 'Sessions::add' );
//}

/**
 * Session Routes
 */
//Router::connect('/login', 'Sessions::add');
//Router::connect('/logout', 'Sessions::remove');


/**
 * Testing Routes
 */
if (!Environment::is('production')) {
	Router::connect('/test/{:args}', array('controller' => 'lithium\test\Controller'));
	Router::connect('/test', array('controller' => 'lithium\test\Controller'));
}

/**
 * Database object routes
 */
Router::connect('/{:controller}/{:action}/{:id:\d+}.{:type}', array('id' => null));
Router::connect('/{:controller}/{:action}/{:id:\d+}');
/* If CouchDB or MongoDB */
// Router::connect('/{:controller}/{:action}/{:id:[0-9a-f]{24}}.{:type}', array('id' => null));
// Router::connect('/{:controller}/{:action}/{:id:[0-9a-f]{24}}');

/**
 * Catch-all
 */
Router::connect('/{:controller}/{:action}/{:args}');

?>