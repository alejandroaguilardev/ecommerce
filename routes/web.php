<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MayoristaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminCategoriasController;
use App\Http\Controllers\AdminSubcategoriasController;
 
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
//Contenido
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::resource('nosotros', AboutController::class)->parameters(['nosotros'=>'string'])->names('about');
Route::resource('contactanos', ContactController::class)->names('contact');
Route::resource('mayorista', MayoristaController::class);



//Productos
Route::get('todos-los-productos', [ProductController::class, 'index'])->name('product.index');
Route::get('todos-los-productos/altamoda', [ProductController::class, 'altamoda'])->name('product.altamoda');
Route::get('todos-los-productos/reyblue', [ProductController::class, 'reyblue'])->name('product.reyblue');
Route::get('todos-los-productos/{category}/{product?}', [ProductController::class, 'show'])->name('product.show');

//cart Checkout
Route::resource('carrito', CartController::class)->parameters(['carrito'=>'cart'])->names('cart');

//sesion
Route::resource('login', LoginController::class)->names('login');
Route::resource('registro', RegisterController::class)->names('registro');

//Sesion Iniciada
Route::resource('perfil', ProfileController::class)->middleware(['loginClient'])->names('perfil');
Route::resource('checkout', CheckoutController::class)->middleware(['loginClient'])->names('checkout');
Route::post('checkout/provincias/{id}', [CheckoutController::class, 'provinces'])->middleware('loginClient');
Route::post('checkout/distritos/{id}', [CheckoutController::class, 'districts'])->middleware('loginClient');


//ADMIN
Route::get('administrador', [AdminController::class, 'adminLogin'])->middleware('LoginAdminTrue')->name('adminLogin');
Route::post('administrador', [AdminController::class, 'adminLoguiarse'])->name('adminLoguiarse');
Route::get('administrador/home', [AdminController::class, 'adminHome'])->middleware('loginAdmin')->name('adminHome');
Route::get('administrador/logout', [AdminController::class, 'destroy'])->middleware('loginAdmin')->name('adminLogout');

Route::get('administrador/paginas/inicio', [AdminController::class, 'adminBanner'])->middleware('loginAdmin')->name('adminBanner');
Route::post('administrador/paginas/inicio', [AdminController::class, 'adminBannerPost'])->middleware('loginAdmin')->name('adminBannerPost');
Route::get('administrador/paginas/nosotros', [AdminController::class, 'adminAbout'])->middleware('loginAdmin')->name('adminAbout');
Route::post('administrador/paginas/nosotros', [AdminController::class, 'adminAboutPost'])->middleware('loginAdmin')->name('adminAboutPost');
Route::get('administrador/redes', [AdminController::class, 'adminRed'])->middleware('loginAdmin')->name('adminRed');
Route::post('administrador/redes', [AdminController::class, 'adminRedPost'])->middleware('loginAdmin')->name('adminRedPost');
Route::get('administrador/pedidos', [AdminController::class, 'adminPedidos'])->middleware('loginAdmin')->name('adminPedidos');
Route::put('administrador/pedidos/{id}', [AdminController::class, 'adminPedidosPost'])->middleware('loginAdmin')->name('adminPedidosPost');

Route::resource('administrador/contact', AdminContactController::class)->middleware('loginAdmin')->names('adminContacto');
Route::resource('administrador/productos', AdminProductController::class)->middleware('loginAdmin')->names('adminProducts');
Route::resource('administrador/categorias', AdminCategoriasController::class)->middleware('loginAdmin')->names('adminCategorias');
Route::resource('administrador/subcategorias', AdminSubcategoriasController::class)->middleware('loginAdmin')->names('adminSubCategorias');

