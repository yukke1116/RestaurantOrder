<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KitchenController extends Controller
{   
    //トップページ（キッチン）
    public function kitchenTop(Request $request)
    {
        $request->validate([
            'name_or_position' => 'exists:staff,name_or_position',
            'password' => 'required|exists:staff,password'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.kitchen.kitchenTop', compact('restaurant_name', 'name_or_position'));
    }

    //注文状況ページ（キッチン）
    public function kitchenOrderStatus(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT k.id, m.menu_name, k.created_at, s.seating_number, k.prepared FROM kitchen_order_status k JOIN seating s ON k.seating_id = s.id JOIN menu m ON k.menu_id = m.id ORDER BY k.id ASC');

        return view('restaurant.staff.kitchen.kitchenOrderStatus', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //注文状況更新ページ（キッチン）
    public function updateKitchenOrderStatus(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $id = $request['id'];

        $params = [
            ':id' => $id,
            ':update_at' => date('Y-m-d H:i:s')
        ];

        $param = [':id' => $id];

        DB::update('UPDATE hall_order_status SET prepared = "調理済", update_at = :update_at WHERE id = :id', $params);
        DB::update('UPDATE order_history SET prepared = "調理済", update_at = :update_at WHERE id = :id', $params);
        DB::delete('DELETE FROM kitchen_order_status WHERE id = :id', $param);

        return view('restaurant.staff.kitchen.updateKitchenOrderStatus', compact('restaurant_name', 'name_or_position'));
    }

    //本日の注文履歴ページ（キッチン）
    public function kitchenTodayOrderHistory(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $param = [':today' => date('Y-m-d')];

        $select = DB::select('SELECT m.menu_name, o.created_at, o.seating_number, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.day = :today', $param);

        return view('restaurant.staff.kitchen.kitchenTodayOrderHistory', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //席番号入力ページ（キッチン）
    public function kitchenSeating(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.kitchen.kitchenSeating', compact('restaurant_name', 'name_or_position'));
    }

    //各席の注文履歴ページ（キッチン）
    public function kitchenSeatOrderHistory(Request $request)
    {
        $request->validate([
            'seating_number' => 'required|numeric|exists:seating,seating_number'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $seating_number = $request['seating_number'];

        $param = [':seating_number' => $seating_number]; 

        $select = DB::select('SELECT m.menu_name, o.created_at, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.seating_number = :seating_number', $param);

        return view('restaurant.staff.kitchen.kitchenSeatOrderHistory', compact('restaurant_name', 'name_or_position', 'seating_number', 'select'));
    }
}