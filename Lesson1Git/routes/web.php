<!-- <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\Request_ControllerAct2_Controller;

Route::get('/', function () {
    return view('welcome');
});


// Route::group(['prefix'=>'MyGroup'],function(){
//     Route :: get('User1',function(){
//         echo "User1";
//     });
//     Route :: get('User2',function(){
//         echo "User2";
//     });
//     Route :: get('User3',function(){
//         echo "User3";
//     });
// });

// Route::get('hello', [UserController::class, 'Hello']);

//_______________ Return view
//Route::get('test', [TestController::class, 'Test']);

// Tính Tỏng 2 số a, b
// Route::get('sumcalculator', function() {
//     return view ('sum');
// });
// Route::post('sumcalculator',[SumController::class,'Sum']);


// Route::get('sum', [SumController::class, 'Sum']);
// Route::post('sum', [SumController::class, 'ResultSum']);


Route::get('signup', [SignUpController::class, 'index']);
Route::post('signup', [SignUpController::class, 'displayInfor']);

// Route::get('activity2', [Request_ControllerAct2_Controller::class, 'index']);
// Route::post('activity2', [Request_ControllerAct2_Controller::class, 'displayInfor']); 