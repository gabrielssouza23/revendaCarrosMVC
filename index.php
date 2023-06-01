<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/veiculos","Web:vehicles");
$route->get("/venda","Web:vehicleBuy");
//$route->get("/faq","Web:faq");
// $route->get("/contato", "web:contact");
// $route->get("/perfil", "web:profile");

$route->group("/app");
$route->get("/", "App:home");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
