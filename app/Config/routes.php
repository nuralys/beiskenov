<?php

	Router::connectNamed(array('lang'));
	Router::connect('/admin/users/:action', array('controller' => 'users','admin' => true));
	Router::connect('/admin/blog', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/blog/:action/*', array('controller' => 'blogs','admin' => true));
	Router::connect('/admin/service/:action/*', array('controller' => 'services', 'admin' => true));
	Router::connect('/admin', array('controller' => 'services', 'action' => 'index', 'admin' => true));

	Router::connect('/', array('controller' => 'main', 'action' => 'index'));
	Router::connect('/services/*', array('controller' => 'services', 'action' => 'index'));
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/blog', array('controller' => 'blogs', 'action' => 'index'));
	Router::connect('/blog/*', array('controller' => 'blogs', 'action' => 'view'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
