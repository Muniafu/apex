protected $routeMiddleware = [
    // Other middleware here...
    'custom-auth' => \App\Http\Middleware\AuthMiddleware::class, // Register your custom middleware
];
