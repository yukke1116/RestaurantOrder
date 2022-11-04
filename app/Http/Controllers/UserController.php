<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //ユーザ管理ページ（管理者）
    public function userManagement(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $param = [
            ':restaurant_name' => $restaurant_name
        ];

        $select = DB::select('SELECT * FROM staff WHERE restaurant_name = :restaurant_name', $param);

        return view('restaurant.staff.manager.user.userManagement', compact('restaurant_name','name_or_position', 'select'));
    }

    //ユーザ追加ページ（管理者）
    public function addUser(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.user.addUser', compact('restaurant_name','name_or_position'));
    }

    //ユーザ追加完了ページ（管理者）
    public function addCompleteUser(Request $request)
    {
        $request->validate([
            'staff_name_or_position' => 'required',
            'password' => 'required'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $staff_name_or_position = $request['staff_name_or_position'];
        $password = $request['password'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':name_or_position' => $staff_name_or_position,
            ':password' => $password,
            ':created_at' => date('Y-m-d H:i:s'),
            ':update_at' => date('Y-m-d H:i:s')
        ];

        DB::insert('INSERT INTO staff (restaurant_name, name_or_position, password, created_at, update_at) VALUE (:restaurant_name, :name_or_position, :password, :created_at, :update_at)', $params);

        return view('restaurant.staff.manager.user.addCompleteUser', compact('restaurant_name','name_or_position'));
    }

    //ユーザ編集ページ（管理者）
    public function editUser(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $staff_name_or_position = $request['staff_name_or_position'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':name_or_position' => $staff_name_or_position
        ];

        $select = DB::select('SELECT * FROM staff WHERE restaurant_name = :restaurant_name && name_or_position = :name_or_position', $params);

        return view('restaurant.staff.manager.user.editUser', compact('restaurant_name','name_or_position', 'select'));
    }

    //ユーザ編集完了ページ（管理者）
    public function editCompleteUser(Request $request)
    {
        $request->validate([
            'staff_name_or_position' => 'required',
            'password' => 'required'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $staff_name_or_position = $request['staff_name_or_position'];
        $password = $request['password'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':name_or_position' => $name_or_position,
            ':staff_name_or_position' => $staff_name_or_position,
            ':password' => $password,
            ':update_at' => date('Y-m-d H:i:s')
        ];

        DB::update('UPDATE staff SET restaurant_name = :restaurant_name, name_or_position = :staff_name_or_position, password = :password, update_at = :update_at WHERE name_or_position = :name_or_position', $params);
        DB::update('UPDATE manager SET restaurant_name = :restaurant_name, name = :staff_name_or_position, password = :password, update_at = :update_at WHERE name = :name_or_position', $params);

        return view('restaurant.staff.manager.user.editCompleteUser', compact('restaurant_name','name_or_position'));
    }

    //ユーザ削除ページ（管理者）
    public function deleteUser(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $staff_name_or_position = $request['staff_name_or_position'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':name_or_position' => $staff_name_or_position
        ];

        DB::delete('DELETE FROM staff WHERE restaurant_name = :restaurant_name && name_or_position = :name_or_position', $params);
        DB::delete('DELETE FROM manager WHERE restaurant_name = :restaurant_name && name = :name_or_position', $params);

        return view('restaurant.staff.manager.user.deleteUser', compact('restaurant_name','name_or_position'));
    }
}