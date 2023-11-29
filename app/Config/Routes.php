<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//rutas de proveedor
$routes->get('/proveedor', 'Proveedor::index');
$routes->get('/proveedor/agregar', 'Proveedor::agregar');
$routes->get('/proveedor/consultar', 'Proveedor::consultar');
$routes->get('/proveedor/editar/(:int)', 'Proveedor::editar/$1');
$routes->get('/proveedor/delete/(:int)','Proveedor::delete/$1');
$routes->post('/proveedor/update', 'Proveedor::update');

//rutas de distribuidor
$routes->get('/distribuidor', 'Distribuidor::index');
$routes->get('/distribuidor/agregar', 'Distribuidor::agregar');
$routes->get('/distribuidor/consultar', 'Distribuidor::consultar');
$routes->get('/distribuidor/editar/(:int)', 'Distribuidor::editar/$1');
$routes->get('/distribuidor/delete/(:int)','Distribuidor::delete/$1');
$routes->post('/distribuidor/update', 'Distribuidor::update');

//rutas de categoria
$routes->get('/categoria', 'Categoria::index');
$routes->get('/categoria/agregar', 'Categoria::agregar');
$routes->get('/categoria/consultar', 'Categoria::consultar');
$routes->get('/categoria/editar/(:int)', 'Categoria::editar/$1');
$routes->get('/categoria/delete/(:int)','Categoria::delete/$1');
$routes->post('/categoria/update', 'Categoria::update');

// Rutas de producto
$routes->get('/producto', 'Producto::index');
$routes->get('/producto/agregar', 'Producto::agregar');
$routes->get('/producto/consultar', 'Producto::consultar');
$routes->get('/producto/editar/(:int)', 'Producto::editar/$1');
$routes->get('/producto/delete/(:int)', 'Producto::delete/$1');
$routes->post('/producto/update', 'Producto::update');
$routes->post('/producto/imagen', 'Producto::Imagen');

//rutas de inventario
$routes->get('/inventario/consultar', 'Inventario::consultar');
$routes->get('/inventario/editar/(:int)', 'Inventario::editar/$1');
$routes->post('/inventario/update', 'Inventario::update');



/// a partir de aqui son las rutas de usuario normal
///rutas de productos
$routes->get('/vistas', 'Vistas::index');
$routes->get('/vistas/productos', 'Vistas::productos');
$routes->get('/vistas/productosconsumohumano', 'Vistas::productosconsumohumano');
$routes->get('/vistas/productosmedicina', 'Vistas::productosmedicina');
$routes->get('/vistas/productoscosmetico', 'Vistas::productoscosmetico');

//rutas de compras
$routes->get('/vistas/detalles', 'Vistas::detalles');
$routes->get('/vistas/comprar', 'Vistas::comprar');
$routes->post('/vistas/comprar', 'Vistas::comprar');
$routes->get('/vistas/comprar/(:num)', 'Vistas::comprar/$1');
$routes->get('/vistas/compras', 'Vistas::compras');
$routes->get('vistas/delete/(:int)', 'Vistas::delete/$1');

//rutas para iniciar sesion
$routes->get('/sesion/login', 'Sesion::login');
$routes->get('/sesion/authenticate', 'Sesion::authenticate');
$routes->get('/sesion/logout', 'Sesion::logout');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}