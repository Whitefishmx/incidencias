<?php
	
	namespace CodeIgniter\Commands\Utilities\Routes;
	
	use CodeIgniter\Router\RouteCollection;
	
	/**
	 * @var RouteCollection $routes
	 */
	$routes->setDefaultNamespace ( 'App\Controllers' );
	$routes->setTranslateURIDashes ( FALSE );
	$routes->setDefaultController ( 'Home' );
	$routes->setDefaultMethod ( 'index' );
	$routes->setAutoRoute ( FALSE );
	//====================================||  Rutas  ||====================================
	//====================================|| Webhook ||====================================
	//====================================|| Session ||====================================
	$routes->add ( 'signout', 'SessionController::signOut' /**@uses \App\Controllers\SessionController::signOut * */ );
	$routes->add ( 'forgot', 'ProfileController::forgot' /**@uses \App\Controllers\ProfileController::forgot * */ );
	$routes->add ( 'signin', 'SigninController::index' /**@uses \App\Controllers\SigninController::index * */ );
	//====================================||   GET   ||====================================
	$routes->add ( '/', 'CondusefController::index' /**@uses \App\Controllers\CondusefController::index * */ );
	$routes->add ( 'reune', 'CondusefController::index' /**@uses \App\Controllers\CondusefController::index * */ );
	$routes->add ( 'redeco', 'CondusefController::redeco' /**@uses \App\Controllers\CondusefController::redeco * */ );
	//====================================||   POST  ||====================================
	$routes->add ( 'toSignIn', 'SigninController::signIn' /**@uses \App\Controllers\SigninController::signIn * */ );
	//====================================||   PUT   ||====================================
	//====================================||  PATCH  ||====================================
	//====================================|| DELETE  ||====================================
	//====================================||   END   ||====================================
