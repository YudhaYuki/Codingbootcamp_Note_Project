<?php

include '../bootstrap/bootstrap.php';

var_dump (PUBLIC_DIR);



// $route = \codingbootcamp\tinymvc\request::get('route', 404);

// use \codingbootcamp\tinymvc\request as request;

$route = request('route', 404);

echo $route;

/**
 * have a look at the request and return the name
 * of the controller and name of the action that
 * should handle this request
*/
function getControllerActionFromRequest()
{
    // Declare $routes as an empty array
    $routes = [];

    // replace $route with the variable $route defined in the web.php
    include ROUTES_DIR . '/web.php';

    // get the current route from the request or 'homepage' if it is not there
    $current_route = request('route', 'homepage');
 
   
    // if there is an item in $routes with $current_route for index
    if (isset($routes[$current_route]))
    {
        return $routes[$current_route];
    }
    else
    {
        // return the error 404 controller and action
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }
}

function runControllerMethod($controller_name, $action_name)
{
    // include the index controller (just for testing)
    include APP_DIR . '/controllers/' . $controller_name . '.php';
    
    // Create the controller object
    $controller_class =  '\\app\\controllers\\' . $controller_name;
    $controller = new $controller_class();
    
    // call the index action of the controller object
    echo $controller->$action_name();
}

// we get the array with the name of the controller and its action from request
$controller_action = getControllerActionFromRequest();

// we run the right controller and it's action
runControllerMethod($controller_action['controller'], $controller_action['action']);