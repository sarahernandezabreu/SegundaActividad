<?php
require_once __DIR__.'/vendor/autoload.php';

use Guzzlehttp\Client;
use Symfony\Component\Httpfoundation\Response;


$app = new Silex\Application();

$app->get('/clima', function() use($app, $api_key) {
    $client= new Client;
    $url= "http://api.openweathermap.org/data/2.5/weather?id=da981d3630593273f4388d031e79eea1&units=metric";
    $response = $cliente->get($url);
    $body = $response->getBody();
{
    return new Response ($body,200,array("Content-Type"->"application/json()") );
});

$app->run();