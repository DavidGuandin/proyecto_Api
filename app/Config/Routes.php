<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//gestionar la parte de API

//localhost/tienda/api.(eso es al agrupamiento)

//a mi gtrupo de donde va a tomar los controladores  
                         //los controladores de este grupo  e rutas tiene que ser :todos, nombre de espacio , controllers , API    
                                            //decircque que  ejecute  una funcion onde le pase las rutas , el objeto de rutas 
$routes->group('api', ['namespace'=>'App\Controllers\API'],function($routes){

    $routes->get('clientes', 'Clientes::index');

});
