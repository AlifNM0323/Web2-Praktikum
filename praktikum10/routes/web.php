<?php



use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/dashboard/ad', function () {
//     return view('front.oke');
// });

Route::get('/',[TampilanController::class,'index'])->name('public.index');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // bikin rote baru gup
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    });

    Route::get('/home', [FrontendController::class, 'index1']);
    Route::get('/about', [FrontendController::class, 'index2']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/after_register', function () {
        return view('after_register');
    });
});


Route::get('/', [TampilanController::class, 'index']);
