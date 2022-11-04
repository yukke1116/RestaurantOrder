<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{   
    //管理者登録ページ
    public function managerSignup()
    {
        return view('restaurant.signup.managerSignup');
    }

    //管理者登録完了ページ
    public function managerSignupComplete(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|unique:restaurant,restaurant_name',
            'name' => 'required',
            'password' => 'required|confirmed:password'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name = $request['name'];
        $password = $request['password'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':name' => $name,
            ':password' => $password,
            ':created_at' => date('Y-m-d H:i:s'),
            ':update_at' => date('Y-m-d H:i:s')
        ];

        DB::insert('INSERT INTO manager (restaurant_name, name, password, created_at, update_at) VALUE (:restaurant_name, :name, :password, :created_at, :update_at)', $params);
        DB::insert('INSERT INTO staff (restaurant_name, name_or_position, password, created_at, update_at) VALUE (:restaurant_name, :name, :password, :created_at, :update_at)', $params);

        return view('restaurant.signup.managerSignupComplete', compact('name'));
    }

    //トップページ（管理者）
    public function managerTop(Request $request)
    {
        $request->validate([
            'name_or_position' => 'required|exists:staff,name_or_position',
            'password' => 'required|exists:staff,password'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.managerTop', compact('restaurant_name', 'name_or_position'));
    }

    //本日の注文履歴ページ（管理者）
    public function managerTodayOrderHistory(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $param = [':today' => date('Y-m-d')];

        $select = DB::select('SELECT m.menu_name, o.created_at, o.seating_number, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.day = :today', $param);

        return view('restaurant.staff.manager.managerTodayOrderHistory', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //席番号ページ（管理者）
    public function managerSeating(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.managerSeating', compact('restaurant_name', 'name_or_position'));
    }

    //各席の注文履歴ページ（管理者）
    public function managerSeatOrderHistory(Request $request)
    {
        $request->validate([
            'seating_number' => 'required|numeric|exists:seating,seating_number'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $seating_number = $request['seating_number'];

        $param = [':seating_number' => $seating_number]; 

        $select = DB::select('SELECT m.menu_name, o.created_at, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.seating_number = :seating_number', $param);

        return view('restaurant.staff.manager.managerSeatOrderHistory', compact('restaurant_name', 'name_or_position', 'seating_number', 'select'));
    }

}