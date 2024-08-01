<?php
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



// Route to get all products
Route::get('/products', function () {
    return 'product';
});


Route::post('/products', function (Request $request) {
    return product::create([
        'name' => 'Product One',
       'slug' => 'product-one',
       'description' => 'This is product one',
        'price' => '99.99',
    ]);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
