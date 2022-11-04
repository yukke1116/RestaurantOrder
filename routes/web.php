<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\kitchenController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SalesController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//ログインページ
Route::get('/', [RestaurantController::class, 'login']);
Route::get('/login', [RestaurantController::class, 'login']);

//新規登録ページ
Route::get('/signup', [RestaurantController::class, 'signup']);

//登録完了ページ
Route::post('/signupComplete', [RestaurantController::class, 'signupComplete']);

//管理者登録ページ
Route::get('/managerSignup', [ManagerController::class, 'managerSignup']);

//管理者登録完了ページ
Route::post('/managerSignupComplete', [ManagerController::class, 'managerSignupComplete']);

//ログアウトページ
Route::get('/logout', [RestaurantController::class, 'logout']);

//トップページ
Route::post('/top', [RestaurantController::class, 'top']);

//席番号入力ページ
Route::get('/seating', [CustomerController::class, 'seating']);

//席番号入力完了ページ
Route::post('/seatingComplete', [CustomerController::class, 'seatingComplete']);

//メニューページ
Route::post('/menu', [CustomerController::class, 'menu']);

//注文完了ページ
Route::post('/orderComplete', [CustomerController::class, 'orderComplete']);

//注文履歴ページ
Route::post('/orderHistory', [CustomerController::class, 'orderHistory']);

//従業員ログインページ
Route::get('/staffLogin', [RestaurantController::class, 'staffLogin']);

//トップページ（ホール）
Route::post('/hallTop', [HallController::class, 'hallTop']);

//注文状況ページ（ホール）
Route::post('/hallOrderStatus', [HallController::class, 'hallOrderStatus']);

//注文状況更新ページ（ホール）
Route::post('/updateHallOrderStatus', [HallController::class, 'updateHallOrderStatus']);

//本日の注文履歴ページ（ホール）
Route::post('/hallTodayOrderHistory', [HallController::class, 'hallTodayOrderHistory']);

//席番号入力ページ（ホール）
Route::get('/hallSeating', [HallController::class, 'hallSeating']);

//各席の注文履歴ページ（ホール）
Route::post('/hallSeatOrderHistory', [HallController::class, 'hallSeatOrderHistory']);

//トップページ（キッチン）
Route::post('/kitchenTop', [KitchenController::class, 'kitchenTop']);

//注文状況ページ（キッチン）
Route::post('/kitchenOrderStatus', [KitchenController::class, 'kitchenOrderStatus']);

//注文状況更新ページ（キッチン）
Route::post('/updateKitchenOrderStatus', [KitchenController::class, 'updateKitchenOrderStatus']);

//本日の注文履歴ページ（キッチン）
Route::post('/kitchenTodayOrderHistory', [KitchenController::class, 'kitchenTodayOrderHistory']);

//席番号入力ページ（キッチン）
Route::get('/kitchenSeating', [KitchenController::class, 'kitchenSeating']);

//各席の注文履歴ページ（キッチン）
Route::post('/kitchenSeatOrderHistory', [KitchenController::class, 'kitchenSeatOrderHistory']);

//トップページ（管理者）
Route::post('/managerTop', [ManagerController::class, 'managerTop']);

//ユーザ管理ページ（管理者）
Route::post('/userManagement', [UserController::class, 'userManagement']);

//ユーザ追加ページ（管理者）
Route::get('/addUser', [UserController::class, 'addUser']);

//ユーザ追加完了ページ（管理者）
Route::post('/addCompleteUser', [UserController::class, 'addCompleteUser']);

//ユーザ編集ページ（管理者）
Route::get('/editUser', [UserController::class, 'editUser']);

//ユーザ編集完了ページ（管理者）
Route::post('/editCompleteUser', [UserController::class, 'editCompleteUser']);

//ユーザ削除ページ（管理者）
Route::post('/deleteUser', [UserController::class, 'deleteUser']);

//メニュー管理ページ（管理者）
Route::post('/menuManagement', [MenuController::class, 'menuManagement']);

//メニュー追加ページ（管理者）
Route::get('/addMenu', [MenuController::class, 'addMenu']);

//メニュー追加完了ページ（管理者）
Route::post('/addCompleteMenu', [MenuController::class, 'addCompleteMenu']);

//メニュー編集ページ（管理者）
Route::get('/editMenu', [MenuController::class, 'editMenu']);

//メニュー編集完了ページ（管理者）
Route::post('/editCompleteMenu', [MenuController::class, 'editCompleteMenu']);

//メニュー削除ページ（管理者）
Route::post('/deleteMenu', [MenuController::class, 'deleteMenu']);

//本日の注文履歴ページ（管理者）
Route::post('/managerTodayOrderHistory', [ManagerController::class, 'managerTodayOrderHistory']);

//席番号ページ（管理者）
Route::get('/managerSeating', [ManagerController::class, 'managerSeating']);

//各席の注文履歴ページ（管理者）
Route::post('/managerSeatOrderHistory', [ManagerController::class, 'managerSeatOrderHistory']);

//売上管理ページ（管理者）
Route::post('/salesManagement', [SalesController::class, 'salesManagement']);

//売上ページ（管理者）
Route::post('/sales', [SalesController::class, 'sales']);

//売上月選択ページ（管理者）
Route::post('/selectMonthSales', [SalesController::class, 'selectMonthSales']);

//１日ごとの売上ページ（管理者）
Route::post('/perDaySales', [SalesController::class, 'perDaySales']);

//１日ごとの売上ページ（管理者）PDFファイル
Route::post('/pdfPerDaySales/pdf', [SalesController::class, 'pdfPerDaySales']);

//売上年選択ページ（管理者）
Route::post('/selectYearSales', [SalesController::class, 'selectYearSales']);

//１か月ごとの売上ページ（管理者）
Route::post('/perMonthSales', [SalesController::class, 'perMonthSales']);

//１か月ごとの売上ページ（管理者）PDFファイル
Route::post('/pdfPerMonthSales/pdf', [SalesController::class, 'pdfPerMonthSales']);

//売れ数ページ（管理者）
Route::post('/salesFigures', [SalesController::class, 'salesFigures']);

//売れ数月選択ページ（管理者）
Route::post('/selectMonthSalesFigures', [SalesController::class, 'selectMonthSalesFigures']);

//１日ごとの売れ数ページ（管理者）
Route::post('/perDaySalesFigures', [SalesController::class, 'perDaySalesFigures']);

//１日ごとの売れ数ページ（管理者）PDFファイル
Route::post('/pdfPerDaySalesFigures/pdf', [SalesController::class, 'pdfPerDaySalesFigures']);

//売れ数年 選択ページ（管理者）
Route::post('/selectYearSalesFigures', [SalesController::class, 'selectYearSalesFigures']);

//１か月ごとの売れ数ページ（管理者）
Route::post('/perMonthSalesFigures', [SalesController::class, 'perMonthSalesFigures']);

//１か月ごとの売れ数ページ（管理者）PDFファイル
Route::post('/pdfPerMonthSalesFigures/pdf', [SalesController::class, 'pdfPerMonthSalesFigures']);