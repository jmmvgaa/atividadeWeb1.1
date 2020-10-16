<?php

namespace App;

use UNIS\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function initRoutes()
	{
	    $taskRoutes['home'] = [
	       'route' => '/',
	       'controller' => 'index',
	       'action' => 'index'
	    ];

	    $taskRoutes['index'] = [
	       'route' => '/index',
	       'controller' => 'index',
	       'action' => 'index'
	    ];

	    $taskRoutes['add'] = [
	       'route' => '/add',
	       'controller' => 'index',
	       'action' => 'add'	
	    ];

	    $taskRoutes['delete'] = [
	       'route' => '/delete',
	       'controller' => 'index',
	       'action' => 'delete'	
	    ];

	    $this->setRoutes($taskRoutes);
	}

	public static function getDb()
	{
		$db = new \PDO(
			"mysql:host=localhost;dbname=tasks", 
			"root", 
			"",
		);
		
		return $db;
	}
}