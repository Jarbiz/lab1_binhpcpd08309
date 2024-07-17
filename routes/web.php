<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

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

// Define the student data array
$students = [
    ["id" => 1, "name" => "Nguyen Van A", "class_code" => "CS101"],
    ["id" => 2, "name" => "Tran Thi B", "class_code" => "CS102"],
    ["id" => 3, "name" => "Le Van C", "class_code" => "CS101"],
    ["id" => 4, "name" => "Pham Thi D", "class_code" => "CS103"]
];

// Route to display the student list
Route::get('/students', function () use ($students) {
    return view('students', ['students' => $students]);
});

Route::get('/', [HomeController::class,'index']) ->name('Home');

?>
