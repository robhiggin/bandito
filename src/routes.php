<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

/*
   Main routing for controllers. Modelling WebAPI2 in .Net
*/
$app->group('/api', function() use ($app){
    $app->get("/band[/{params:.*}]", "Bandito\\Controllers\\BandController:get");
    $app->post("/band[/{params:.*}]", "Bandito\\Controllers\\BandController:post");
    $app->get("/member[/{params:.*}]", "Bandito\\Controllers\\MemberController:get");
    $app->post("/member[/{params:.*}]", "Bandito\\Controllers\\MemberController:post");
});


