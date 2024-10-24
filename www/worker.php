<?php declare(strict_types = 1);

use App\Bootstrap;
use Nette\Application\Application;
use Nette\Http\RequestFactory;

// Prevent worker script termination when a client connection is interrupted
ignore_user_abort(true);

require __DIR__ . '/../vendor/autoload.php';

// Create container, but not initialize it yet.
// Initialization will be done inside the loop, because of nette/http and sessions.
$container = Bootstrap::boot()->createContainer(initialize: false);

// Handler outside the loop for better performance (doing less work)
$handler = static function () use ($container) {
	// Called when a request is received,
	// superglobals, php://input and the like are reset
	$container->removeService('http.request');
	$container->addService('http.request', $container->getByType(RequestFactory::class)->fromGlobals());

	// Initialize container
	$container->initialize();

	// Run Nette app
	$container->getByType(Application::class)->run();
};

$maxRequests = (int) ($_SERVER['MAX_REQUESTS'] ?? 0);
for ($nbRequests = 0; !$maxRequests || $nbRequests < $maxRequests; ++$nbRequests) {
	$keepRunning = \frankenphp_handle_request($handler);

	// Do something after sending the HTTP response
	// $myApp->terminate();

	// Call the garbage collector to reduce the chances of it being triggered in the middle of a page generation
	gc_collect_cycles();

	// If we are not supposed to keep running, break the loop
	if (!$keepRunning) {
		break;
	}
}

// Cleanup
// $container->shutdown();
