<?php declare(strict_types=1);

require_once '../vendor/autoload.php';

require_once '../vendor/henrivantsant/swift/src/Application/Application.php';

use Swift\Application\Application;

$app = new Application();
$app->run();