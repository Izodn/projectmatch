<?php
namespace ProjectMatch\Provider\Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

use ProjectMatch\Controller;

class Api implements ControllerProviderInterface, ServiceProviderInterface
{
	public function register(Container $app)
	{
		$app['controller.api'] = function () {
			return new Controller\Api();
		};

		$app->mount('/api', $this);
	}

	public function connect(Application $app)
	{
		$controllers = $app['controllers_factory'];
		$controllers->get('/', 'controller.api:get');
		return $controllers;
	}
}
