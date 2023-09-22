<?php

namespace core;

use \core\RouterBase;

class Router extends RouterBase
{
    public $routes;

    public function get($endpoint, $trigger)
    {
        error_log("Registrando rota GET: $endpoint");
        $this->routes['get'][$endpoint] = $trigger;
    }

    public function post($endpoint, $trigger)
    {
        error_log("Registrando rota POST: $endpoint");
        $this->routes['post'][$endpoint] = $trigger;
    }

    public function put($endpoint, $trigger)
    {
        error_log("Registrando rota PUT: $endpoint");
        $this->routes['put'][$endpoint] = $trigger;
    }

    public function delete($endpoint, $trigger)
    {
        error_log("Registrando rota Delete: $endpoint");
        $this->routes['delete'][$endpoint] = $trigger;
    }
}
