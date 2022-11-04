<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{   
    //席番号入力ページ
    public function seating(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];

        $param = [':restaurant_name' => $restaurant_name];

        $select = DB::select('SELECT * FROM restaurant WHERE restaurant_name = :restaurant_name', $param);

        return view('restaurant.customer.seating', compact('restaurant_name','select'));
    }

    //席番号入力完了ページ
    public function seatingComplete(Request $request)
    {
        $request->validate([
            'seating_number' => 'required|numeric'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $seating_number = $request['seating_number'];
        $restaurant_id = $request['restaurant_id'];
        
        $params = [
            ':restaurant_id' => $restaurant_id,
            ':seating_number' => $seating_number,
            ':created_at' => date('Y-m-d H:i:s')
        ];

        DB::insert('INSERT INTO seating (restaurant_id, seating_number, created_at) VALUE (:restaurant_id, :seating_number, :created_at)',$params);

        return view('restaurant.customer.seatingComplete', compact('restaurant_name','seating_number','restaurant_id'));
    }

    //メニューページ
    public function menu(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $seating_number = $request['seating_number'];
        $restaurant_id = $request['restaurant_id'];

        $param1 = [
            ':restaurant_name' => $restaurant_name
        ];

        $select = DB::select('SELECT * FROM menu WHERE restaurant_name = :restaurant_name', $param1);

        $params = [
            ':seating_number' => $seating_number,
            ':created_at' => date('Y-m-d H:i:s')
        ];

        $seating_id = DB::select('SELECT id FROM seating WHERE seating_number = :seating_number && created_at <= :created_at ORDER BY created_at DESC LIMIT 1', $params);

        return view('restaurant.customer.menu', compact('restaurant_name', 'seating_number', 'select', 'restaurant_id', 'seating_id'));
    }

    //注文完了ページ
    public function orderComplete(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $seating_number = $request['seating_number'];
        $restaurant_id = $request['restaurant_id'];
        $seating_id = $request['seating_id'];
        $menu_id = $request['menu_id'];
        $menu_name = $request['menu_name'];

        $params1 = [
            ':restaurant_id' => $restaurant_id,
            ':seating_id' => $seating_id,
            ':menu_id' => $menu_id,
            ':created_at' => date('Y-m-d H:i:s')
        ];
        DB::insert('INSERT INTO seat_order_history SET restaurant_id = :restaurant_id, seating_id = :seating_id, menu_id = :menu_id, created_at = :created_at', $params1);
        
        $params2 = [
            ':restaurant_id' => $restaurant_id,
            ':seating_id' => $seating_id,
            ':menu_id' => $menu_id,
            ':prepared' => '未調理',
            ':provided' => '未提供',
            ':created_at' => date('Y-m-d H:i:s'),
            ':update_at' => date('Y-m-d H:i:s')
        ];
        DB::insert('INSERT INTO hall_order_status SET restaurant_id = :restaurant_id, seating_id = :seating_id, menu_id = :menu_id, prepared = :prepared, provided = :provided, created_at = :created_at, update_at = :update_at', $params2);
        DB::insert('INSERT INTO kitchen_order_status SET restaurant_id = :restaurant_id, seating_id = :seating_id, menu_id = :menu_id, prepared = :prepared, provided = :provided, created_at = :created_at, update_at = :update_at', $params2);

        $params3 = [
            ':restaurant_id' => $restaurant_id,
            ':seating_number' => $seating_number,
            ':menu_id' => $menu_id,
            ':prepared' => '未調理',
            ':provided' => '未提供',
            ':day' => date('Y-m-d'),
            ':created_at' => date('Y-m-d H:i:s'),
            ':update_at' => date('Y-m-d H:i:s')
        ];
        DB::insert('INSERT INTO order_history SET restaurant_id = :restaurant_id, seating_number = :seating_number, menu_id = :menu_id, prepared = :prepared, provided = :provided, day = :day, created_at = :created_at, update_at = :update_at', $params3);

        return view('restaurant.customer.orderComplete', compact('restaurant_name', 'seating_number', 'restaurant_id', 'menu_name'));
    }

    //注文履歴ページ
    public function orderHistory(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $seating_number = $request['seating_number'];
        $restaurant_id = $request['restaurant_id'];
        $seating_id = $request['seating_id'];

        $params = [
            ':restaurant_id' => $restaurant_id,
            ':seating_id' => $seating_id
        ];

        $select = DB::select('SELECT m.menu_name, COUNT(m.menu_name) AS quantity, m.price, SUM(m.price) AS sum FROM menu m JOIN seat_order_history s ON s.menu_id = m.id WHERE s.restaurant_id = :restaurant_id && s.seating_id = :seating_id GROUP BY m.id', $params);
        $sum = DB::select('SELECT SUM(m.price) AS sum FROM menu m JOIN seat_order_history s ON s.menu_id = m.id WHERE s.restaurant_id = :restaurant_id && s.seating_id = :seating_id GROUP BY s.seating_id', $params);

        return view('restaurant.customer.orderHistory', compact('restaurant_name', 'seating_number', 'restaurant_id', 'select', 'sum'));
    }
}