<?php
namespace ProjectMatch\Controller;

use Silex\Application;

use Symfony\Component\HttpFoundation\JsonResponse;

class Api
{
	public function __construct()
	{
	}

	public function get(Application $app)
	{
		return new JsonResponse([
			"debug" => $app['debug']
		]);
	}
}
