use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('api')->group(function () {
    Route::get('/product', function () {
        return 'product';
    });

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
});
