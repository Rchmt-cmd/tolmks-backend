<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BillboardApiController;
use App\Http\Controllers\API\CallCenterApiController;
use App\Http\Controllers\API\ContactUsApiController;
use App\Http\Controllers\API\CsrApiController;
use App\Http\Controllers\API\HomeApiController;
use App\Http\Controllers\API\MediaApiController;
use App\Http\Controllers\API\NearbyApiController;
use App\Http\Controllers\API\ProfileApiController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\SejarahApiController;
use App\Http\Controllers\API\TarifApiController;
use App\Http\Controllers\API\VisiMisiApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);
Route::post('registerfirebase', [ApiController::class, 'registerfirebase']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::get('get_user', [ApiController::class, 'get_user']);
});

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['auth:sanctum']], function() {
    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

});

// Profile
Route::get('/profile', [ProfileApiController::class, 'index'])->name('api.profile');
// Home
Route::get('/', [HomeApiController::class, 'index'])->name('api.home');
// Sejarah
Route::get('/sejarah', [SejarahApiController::class, 'index'])->name('api.sejarah');
// Visi-misi
Route::get('/visi-misi', [VisiMisiApiController::class, 'index'])->name('api.visi-misi');
// Csr
Route::get('/csr', [CsrApiController::class, 'index'])->name('api.csr');
// Struk
// Route::get('/struk')
// Tarif
Route::get('/tarif', [TarifApiController::class, 'index'])->name('api.tarif');
// Call-center
Route::get('/call-center', [CallCenterApiController::class, 'index'])->name('api.call-center');
// Nearby
Route::get('/nearby', [NearbyApiController::class, 'index'])->name('api.nearby');
// Media
Route::get('/media', [MediaApiController::class, 'index'])->name('api.media');
Route::get('/media/{id}', [MediaApiController::class, 'detail'])->name('api.media.detail');
// Billboard
Route::get('/billboard', [BillboardApiController::class, 'index'])->name('api.billboard');
// Contact-us
Route::get('/contact-us', [ContactUsApiController::class, 'index'])->name('api.contact-us');
// login
Route::post('/login', [AuthController::class, 'login'])->name('api.login');
// Register
Route::post('/register', [AuthController::class, 'register'])->name('api.register');
