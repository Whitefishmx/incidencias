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
	$routes->add ( '/', 'SimuladorController::index' /**@uses \App\Controllers\SimuladorController::index * */ );
	$routes->add ( 'biosinsa', 'SimuladorController::biosinsa' /**@uses \App\Controllers\SimuladorController::biosinsa * */ );
	$routes->add ( 'displayForm/(:num)', 'SimuladorController::displayForm/$1' /**@uses \App\Controllers\SimuladorController::displayForm * */ );
	//====================================||   POST  ||====================================
	$routes->add ( 'toSignIn', 'SigninController::signIn' /**@uses \App\Controllers\SigninController::signIn * */ );
	$routes->add ( 'saveForm', 'SimuladorController::saveFormData' /**@uses \App\Controllers\SimuladorController::saveFormData	 * * */ );
	//====================================||   PUT   ||====================================
	//====================================||  PATCH  ||====================================
	//====================================|| DELETE  ||====================================
	//====================================||   END   ||====================================
