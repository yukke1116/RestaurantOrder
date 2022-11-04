<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{   
    //ログインページ
    public function login(Request $request)
    {
        $select = DB::select('SELECT * FROM restaurant');
        
        return view('restaurant.login&out.login', compact('select'));
    }

    //新規登録ページ
    public function signup()
    {
        return view('restaurant.signup.signup');
    }

    //登録完了ページ
    public function signupComplete(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|unique:restaurant,restaurant_name',
            'password' => 'required|confirmed:password'
        ]);

        $restaurant_name = $request['restaurant_name'];
        $password = $request['password'];

        $params = [
            ':restaurant_name' => $restaurant_name,
            ':password' => $password,
            ':created_at' => date('Y-m-d H:i:s')
        ];

        DB::insert('INSERT INTO restaurant (restaurant_name, password, created_at) VALUE (:restaurant_name, :password, :created_at)', $params);

        return view('restaurant.signup.signupComplete');
    }

    //ログアウトページ
    public function logout()
    {
        return view('restaurant.login&out.logout');
    }

    //トップページ
    public function top(Request $request)
    {
        $request->validate([
            'restaurant_name' => 'required|exists:restaurant,restaurant_name',
            'password' => 'required|exists:restaurant,password'
        ]);
        
        $restaurant_name = $request['restaurant_name'];

        return view('restaurant.top', compact('restaurant_name'));
    }

    //従業員ログインページ
    public function staffLogin(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];

        return view('restaurant.staff.staffLogin', compact('restaurant_name'));
    }

}