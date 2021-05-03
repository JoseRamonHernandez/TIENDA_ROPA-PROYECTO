<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('usuarios.home');
});
Route::get('/home.php', function () {
    return view('usuarios.home');
});
Route::get('/productos.php', function () {
    return view('usuarios.productos');
});
Route::get('/registroProductos.php', function () {
    return view('usuarios.registroProductos');
});
Route::get('/almacenProductos.php', function () {
    return view('usuarios.almacenProductos');
});
Route::get('/productosBusqueda.php', function () {
    return view('usuarios.productosBusqueda');
});
Route::get('/adquirirPage.php', function () {
    return view('usuarios.adquirirPage');
});
Route::get('/loginPage.php', function () {
    return view('usuarios.loginPage');
});
Route::get('/registroClientes.php', function () {
    return view('usuarios.registroClientes');
});
Route::get('/compraPage.php', function () {
    return view('usuarios.compraPage');
});
Route::get('/almacenRegistroClientes.php', function () {
    return view('usuarios.almacenRegistroClientes');
});
Route::get('/productosBusqueda2.php', function () {
    return view('usuarios.productosBusqueda2');
});
Route::get('/compraProducto.php', function () {
    return view('usuarios.compraProducto');
});
Route::get('/registroVenta.php', function () {
    return view('usuarios.registroVenta');
});
Route::get('/validacionLogin.php', function () {
    return view('usuarios.validacionLogin');
});
Route::get('/adindex.php', function () {
    return view('usuarios.adindex');
});
Route::get('/muestraUsuarios.php', function () {
    return view('usuarios.muestraUsuarios');
});
Route::get('/usuariosBusqueda.php', function () {
    return view('usuarios.usuariosBusqueda');
});
Route::get('/editUsuario.php', function () {
    return view('usuarios.editUsuario');
});
Route::get('/editUsuario2.php', function () {
    return view('usuarios.editUsuario2');
});
Route::get('/editUsuario3.php', function () {
    return view('usuarios.editUsuario3');
});
Route::get('/deleteUsuario.php', function () {
    return view('usuarios.deleteUsuario');
});
Route::get('/deleteUsuario2.php', function () {
    return view('usuarios.deleteUsuario2');
});
Route::get('/registrarUsuario.php', function () {
    return view('usuarios.registrarUsuario');
});
Route::get('/almacenUsuario.php', function () {
    return view('usuarios.almacenUsuario');
});
Route::get('/muestraProductos.php', function () {
    return view('usuarios.muestraProductos');
});
Route::get('/productosBusqueda3.php', function () {
    return view('usuarios.productosBusqueda3');
});
Route::get('/editProducto.php', function () {
    return view('usuarios.editProducto');
});
Route::get('/editProducto2.php', function () {
    return view('usuarios.editProducto2');
});
Route::get('/editProducto3.php', function () {
    return view('usuarios.editProducto3');
});
Route::get('/deleteProducto.php', function () {
    return view('usuarios.deleteProducto');
});
Route::get('/deleteProducto2.php', function () {
    return view('usuarios.deleteProducto2');
});
Route::get('/mostrarVentas.php', function () {
    return view('usuarios.mostrarVentas');
});
Route::get('/mostrarDatosCliente.php', function () {
    return view('usuarios.mostrarDatosCliente');
});
Route::get('/clientesBusqueda.php', function () {
    return view('usuarios.clientesBusqueda');
});
Route::get('/muestraProovedores.php', function () {
    return view('usuarios.muestraProovedores');
});
Route::get('/proovedorBusqueda.php', function () {
    return view('usuarios.proovedorBusqueda');
});
Route::get('/registroProovedor.php', function () {
    return view('usuarios.registroProovedor');
});
Route::get('/almacenProovedor.php', function () {
    return view('usuarios.almacenProovedor');
});
Route::get('/editProovedor.php', function () {
    return view('usuarios.editProovedor');
});
Route::get('/editProovedor2.php', function () {
    return view('usuarios.editProovedor2');
});
Route::get('/editProovedor3.php', function () {
    return view('usuarios.editProovedor3');
});
Route::get('/deleteProovedor.php', function () {
    return view('usuarios.deleteProovedor');
});
Route::get('/deleteProovedor2.php', function () {
    return view('usuarios.deleteProovedor2');
});
Route::get('/registroPedido.php', function () {
    return view('usuarios.registroPedido');
});
Route::get('/almacenPedido.php', function () {
    return view('usuarios.almacenPedido');
});
Route::get('/mostrarPedidos.php', function () {
    return view('usuarios.mostrarPedidos');
});


/*
Route::get('/login.php', function () {
    return view('usuarios.login');
});
Route::get('/login2.php', function () {
    return view('usuarios.login2');
});*/
