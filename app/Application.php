<?php

namespace App;

/**
 * Class Application
 *
 * @package App
 */
class Application
{
    /**
     * All registered routes.
     */
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * Load a routes file.
     *
     * @param $file
     * @return Application
     */
    public static function routes(string $file)
    {
        $router = new static;

        require $file;
        return $router;
    }

    /**
     * Register a GET route.
     *
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Register a POST route.
     *
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Load the requested URI's associated controller method.
     *
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws \Exception
     */
    public function run()
    {
        session_start();

        $uri = getUri();
        $requestType = getMethod();

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        } else {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType]['404'])
            );
        }
    }

    /**
     * Load and call the relevant controller action.
     *
     * @param $controller
     * @param $action
     * @return mixed
     * @throws \Exception
     */
    protected function callAction($controller, $action)
    {
        $controller = new $controller();

        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}
