use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']); // ← This is the missing route

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('products', ProductController::class);
});
