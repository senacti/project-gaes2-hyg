<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\ventaController;
use App\Http\Controllers\compraController;
use App\Http\Controllers\GastosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/catalogo', function () {
    return view('Catalogo');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
// Route::get('/DashboardAdmin', function () {
//     return view('DashboardAdmin');
// });
// Route::get('/DashBoardCliente', function () {
//     return view('DashBoardCliente');
// });
// Route::get('/DashboardEmpleado', function () {
//     return view('DashboardEmpleado');
// });
Route::get('/Catalogo', function () {
    return view('Catalogo');
});
Route::get('/error404', function () {
    return view('E404');
});
Route::get('/error500', function () {
    return view('E500');
});
Route::get('/', function () {
    return view('inicio');
});
Route::get('/InicioCliente', function () {
    return view('InicioCliente');
});
Route::get('/InicioFuncionarios', function () {
    return view('InicioFuncionarios');
});
// Route::get('/Inventario', function () {
//     return view('Inventario');
// });
Route::get('/Nosotros', function () {
    return view('Nosotros');
});
Route::get('/Pconstrucción', function () {
    return view('Pconstrucción');
});
Route::get('/Pedidos', function () {
    return view('Pedidos');
});
Route::get('/regInfProveedores', function () {
    return view('regInfProveedores');
});
Route::get('/RegistrarCompra', function () {
    return view('compras.index');
});
Route::get('/registroCliente', function () {
    return view('registroCliente');
});
// Route::get('/RegVenta', function () {
//     return view('RegVenta');
// });
Route::get('/resgistroEmpleado', function () {
    return view('resgistroEmpleado');
});
Route::get('/loginF', function () {
    return view('loginF');
});
Route::get('/ventas', function () {
    return view('ventas.index');
});
Route::get('/compras', function () {
    return view('compras.index');
});
Route::get('/gastos', function () {
    return view('gastos.index');
});



Auth::routes();

Route::get('inventario/pdf', [InventarioController::class, 'pdf'])->name('inventario.pdf');
Route::get('ventas/pdf', [VentaController::class, 'pdf'])->name('ventas.pdf');
Route::get('compras/pdf', [CompraController::class, 'pdf'])->name('compras.pdf');
Route::get('gastos/pdf', [GastosController::class, 'pdf'])->name('gastos.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('RInventario', inventarioController::class);
Route::resource('ventas', ventaController::class);
Route::resource('compras', CompraController::class);
Route::resource('gastos', GastosController::class);
