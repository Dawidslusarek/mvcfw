<?php

namespace app\core;
//nie musimy używać use Router, ponieważ są w tym samym namespace
class Application
{
    public static string $ROOT_DIR;
    public Router $router; // typed properties - $router jest typu Router
    public Request $request;
    public Response $response;
    public static Application $app;
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
