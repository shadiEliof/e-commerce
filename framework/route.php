<?php
function route() {

    $uri = $_SERVER['REQUEST_URI'];
    $queryString = $_SERVER['QUERY_STRING'];

    if (strlen($queryString) > 0) {
        $qvars = explode('&', $queryString);
        foreach ($qvars as $qvar) {
            list($key, $value) = explode('=', $qvar);
            $_GET[$key] = $value;
        }

        $uri = str_replace('?' . $queryString, '', $uri);
    }

    global $config;
    $route = $config['route'];

    $uri = urldecode($uri);
    foreach ($route as $alias => $target) {
        $alias = '^' . $alias;
        $alias = str_replace('/', '\/', $alias);
        $alias = str_replace('*', '(.*)', $alias);

        if (preg_match('/' . $alias . '/', $uri)) {
            $uri = preg_replace('/' . $alias . '/', $target, $uri);
        }
    }




    $parts = explode("/", $uri);
    $controllerName = $parts[1];
    $methodName = $parts[2];
    $args = array_slice($parts, 3);


    $controllerClassname = "${controllerName}_controller";
    $controllerInstance = new $controllerClassname();

    if (!is_callable([$controllerInstance, $methodName])) {
        err403();
    }

    call_user_func([$controllerInstance, $methodName], ...$args);

}