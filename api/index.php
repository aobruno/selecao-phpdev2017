<?php

require 'vendor/autoload.php';

$settings['displayErrorDetails'] = true;
$settings['determineRouteBeforeAppMiddleware'] = true;

$app = new \Slim\App(["settings" => $settings]);

require 'config.php';
require '_genesis/genesis.php';
require 'endpoints/usuarios.php';
require 'endpoints/animais.php';

$app->run();