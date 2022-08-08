<?php declare( strict_types=1 );

/*
 * This file is part of the Swift Framework
 *
 * (c) Henri van 't Sant <hello@henrivantsant.dev>
 *
 * For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 */

require_once dirname( __DIR__ ) . '/vendor/autoload.php';

use Swift\Application\Application;

$app = Application::create();
$app->run();