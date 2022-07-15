<?php declare(strict_types=1);


namespace App\MyApp\Controller;

use Swift\Controller\AbstractController;
use Swift\HttpFoundation\JsonResponse;
use Swift\Router\Attributes\Route;
use Swift\Router\Types\RouteMethod;

/**
 * Class HelloWorld
 * @package MyApp\Controller
 */
class HelloWorld extends AbstractController {

    /**
     * Get started at baseUrl /hello-world/
     *
     * @return JsonResponse
     */
    #[Route(method: [RouteMethod::GET], route: '/hello-world/', name: 'myapp.helloworld')]
    public function helloWorld(): JsonResponse {
        return new JsonResponse(['message' => 'Hey legend! Let\'s get started at https://swiftapi.github.io/swift-docs/docs/']);
    }

}