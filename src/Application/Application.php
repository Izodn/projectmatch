<?php
namespace ProjectMatch\Application;

use Silex\Application as BaseApp;
use Silex\Provider\ServiceControllerServiceProvider;

use Igorw\Silex\ConfigServiceProvider;

use ProjectMatch\Provider;

class Application extends BaseApp
{
	function __construct()
	{
		parent::__construct();
		$appDir = __DIR__ . "/../..";

		$this->register(new ServiceControllerServiceProvider);
		$this->register(new Provider\Controller\Api);

		$this->register(new ConfigServiceProvider(
			$appDir . "/config/config.yml"
		));
	}
}
