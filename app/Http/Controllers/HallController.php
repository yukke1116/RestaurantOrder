<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HallController extends Controller
{   
    //トップページ（ホール）
    public function hallTop(Request $request)
    {
        $request->validate([
            'name_or_position' => 'exists:staff,name_or_position',
            'password' => 'required|exists:staff,password'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.hall.hallTop', compact('restaurant_name', 'name_or_position'));
    }

    //注文状況ページ（ホール）
    public function hallOrderStatus(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT h.id, m.menu_name, h.created_at, s.seating_number, h.prepared, h.provided FROM hall_order_status h JOIN seating s ON h.seating_id = s.id JOIN menu m ON h.menu_id = m.id ORDER BY h.id ASC');

        return view('restaurant.staff.hall.hallOrderStatus', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //注文状況更新ページ（ホール）
    public function updateHallOrderStatus(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $id = $request['id'];

        $params = [
            ':id' => $id,
            ':update_at' => date('Y-m-d H:i:s')
        ];

        $param = [':id' => $id];

        DB::update('UPDATE order_history SET provided = "提供済", update_at = :update_at WHERE id = :id', $params);
        DB::delete('DELETE FROM hall_order_status WHERE id = :id', $param);

        return view('restaurant.staff.hall.updateHallOrderStatus', compact('restaurant_name', 'name_or_position'));
    }

    //本日の注文履歴ページ（ホール）
    public function hallTodayOrderHistory(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $param = [':today' => date('Y-m-d')];

        $select = DB::select('SELECT m.menu_name, o.created_at, o.seating_number, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.day = :today', $param);

        return view('restaurant.staff.hall.hallTodayOrderHistory', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //席番号入力ページ（ホール）
    public function hallSeating(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.hall.hallSeating', compact('restaurant_name', 'name_or_position'));
    }

    //各席の注文履歴ページ（ホール）
    public function hallSeatOrderHistory(Request $request)
    {
        $request->validate([
            'seating_number' => 'required|numeric|exists:seating,seating_number'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $seating_number = $request['seating_number'];

        $param = [':seating_number' => $seating_number]; 

        $select = DB::select('SELECT m.menu_name, o.created_at, o.prepared, o.provided FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE o.seating_number = :seating_number', $param);

        return view('restaurant.staff.hall.hallSeatOrderHistory', compact('restaurant_name', 'name_or_position', 'seating_number', 'select'));
    }
}