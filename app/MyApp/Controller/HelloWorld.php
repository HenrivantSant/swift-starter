<?php declare(strict_types=1);


namespace MyApp\Controller;

use Swift\Controller\AbstractController;
use Swift\HttpFoundation\JsonResponse;
use Swift\Router\Attributes\Route;
use Swift\Router\Types\RouteMethodEnum;

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
    #[Route(method: [RouteMethodEnum::GET], route: '/hello-world/', name: 'myapp.helloworld')]
    public function helloWorld(): JsonResponse {
        return new JsonResponse(['message' => 'Hey legend! Let\'s get started at https://henrivantsant.github.io/swift-docs/']);
    }

}