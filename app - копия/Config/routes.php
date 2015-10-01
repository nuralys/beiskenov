<?php

	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
	Router::connect('/admin', array('controller' => 'services', 'action' => 'index', 'admin' => true));

	Router::connect('/', array('controller' => 'main', 'action' => 'index'));
	Router::connect('/services/*', array('controller' => 'services', 'action' => 'index'));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
