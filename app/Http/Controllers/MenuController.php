<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //メニュー管理ページ（管理者）
    public function menuManagement(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $param = [
            ':restaurant_name' => $restaurant_name
        ];

        $select = DB::select('SELECT * FROM menu WHERE restaurant_name = :restaurant_name', $param);

        return view('restaurant.staff.manager.menu.menuManagement', compact('restaurant_name','name_or_position','select'));
    }

    //メニュー追加ページ（管理者）
    public function addMenu(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.menu.addMenu', compact('restaurant_name','name_or_position'));
    }

    //メニュー追加完了ページ（管理者）
    public function addCompleteMenu(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'menu_name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $dir = 'image';
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/'. $dir, $file_name);
        $image = $request['image'];
        $image = 'storage/'. $dir. '/'. $file_name;
        $menu_name = $request['menu_name'];
        $price = $request['price'];
        $detail = $request['detail'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':image' => $image,
            ':menu_name' => $menu_name,
            ':price' => $price,
            ':detail' => $detail,
            ':created_at' => date('Y-m-d H:i:s'),
            ':update_at' => date('Y-m-d H:i:s')
        ];

        DB::insert('INSERT INTO menu (restaurant_name, image, menu_name, price, detail, created_at, update_at) VALUE (:restaurant_name, :image, :menu_name, :price, :detail, :created_at, :update_at)', $params);

        return view('restaurant.staff.manager.menu.addCompleteMenu', compact('restaurant_name','name_or_position'));
    }

    //メニュー編集ページ（管理者）
    public function editMenu(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $id = $request['id'];

        $param = [
            ':id' => $id
        ];

        $select = DB::select('SELECT * FROM menu WHERE id = :id', $param);

        return view('restaurant.staff.manager.menu.editMenu', compact('restaurant_name','name_or_position','select'));
    }

    //メニュー編集完了ページ（管理者）
    public function editCompleteMenu(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'menu_name' => 'required',
            'price' => 'required|numeric',
            'detail' => 'required'
        ]);
        
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $id = $request['id'];
        $dir = 'image';
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/'. $dir, $file_name);
        $image = $request['image'];
        $image = 'storage/'. $dir. '/'. $file_name;
        $menu_name = $request['menu_name'];
        $price = $request['price'];
        $detail = $request['detail'];

        $params = [
            ':id' => $id,
            ':image' => $image,
            ':menu_name' => $menu_name,
            ':price' => $price,
            ':detail' => $detail,
            ':update_at' => date('Y-m-d H:i:s')
        ];

        DB::update('UPDATE menu SET image = :image, menu_name = :menu_name, price = :price, detail = :detail, update_at = :update_at WHERE id = :id', $params);

        return view('restaurant.staff.manager.menu.editCompleteMenu', compact('restaurant_name','name_or_position'));
    }

    //メニュー削除ページ（管理者）
    public function deleteMenu(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $id = $request['id'];

        $param = [
            ':id' => $id
        ];

        DB::delete('DELETE FROM menu WHERE id = :id', $param);

        return view('restaurant.staff.manager.menu.deleteMenu', compact('restaurant_name','name_or_position'));
    }
}