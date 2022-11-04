<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    //売上管理ページ（管理者）
    public function salesManagement(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.sales.salesManagement', compact('restaurant_name', 'name_or_position'));
    }

    //売上ページ（管理者）
    public function sales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.sales.sales.sales', compact('restaurant_name', 'name_or_position'));
    }

    //売上月選択ページ（管理者）
    public function selectMonthSales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT DATE_FORMAT(day, "%Y-%m") AS month FROM order_history WHERE prepared = "調理済" && provided = "提供済" GROUP BY DATE_FORMAT(day, "%Y-%m")');

        return view('restaurant.staff.manager.sales.sales.selectMonthSales', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //１日ごとの売上ページ（管理者）
    public function perDaySales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $month = $request['month'];

        $param = [':month' => $month];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m-%d") AS time, SUM(m.price) AS sum FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y-%m") = :month GROUP BY DATE_FORMAT(o.day, "%Y-%m-%d")', $param);

        return view('restaurant.staff.manager.sales.sales.perDaySales', compact('restaurant_name', 'name_or_position', 'select', 'month'));
    }

    //１日ごとの売上ページ（管理者）PDFファイル
    public function pdfPerDaySales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $month = $request['month'];

        $param = [':month' => $month];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m-%d") AS time, SUM(m.price) AS sum FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y-%m") = :month GROUP BY DATE_FORMAT(o.day, "%Y-%m-%d")', $param);

        $pdf = \PDF::loadView('restaurant.staff.manager.sales.sales.pdfPerDaySales', compact('restaurant_name', 'name_or_position', 'select'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }

    //売上年選択ページ（管理者）
    public function selectYearSales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT DATE_FORMAT(day, "%Y") AS year FROM order_history WHERE prepared = "調理済" && provided = "提供済" GROUP BY DATE_FORMAT(day, "%Y")');

        return view('restaurant.staff.manager.sales.sales.selectYearSales', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //１か月ごとの売上ページ（管理者）
    public function perMonthSales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $year = $request['year'];

        $param = [':year' => $year];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m") AS time, SUM(m.price) AS sum FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y") = :year GROUP BY DATE_FORMAT(o.day, "%Y-%m")', $param);

        return view('restaurant.staff.manager.sales.sales.perMonthSales', compact('restaurant_name', 'name_or_position', 'select', 'year'));
    }

    //１か月ごとの売上ページ（管理者）PDFファイル
    public function pdfPerMonthSales(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $year = $request['year'];

        $param = [':year' => $year];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m") AS time, SUM(m.price) AS sum FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y") = :year GROUP BY DATE_FORMAT(o.day, "%Y-%m")', $param);

        $pdf = \PDF::loadView('restaurant.staff.manager.sales.sales.pdfPerMonthSales', compact('restaurant_name', 'name_or_position', 'select'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }

    //売れ数ページ（管理者）
    public function salesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        return view('restaurant.staff.manager.sales.salesFigures.salesFigures', compact('restaurant_name', 'name_or_position'));
    }

    //売れ数月選択ページ（管理者）
    public function selectMonthSalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT DATE_FORMAT(day, "%Y-%m") AS month FROM order_history WHERE prepared = "調理済" && provided = "提供済" GROUP BY DATE_FORMAT(day, "%Y-%m")');

        return view('restaurant.staff.manager.sales.salesFigures.selectMonthSalesFigures', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //１日ごとの売れ数ページ（管理者）
    public function perDaySalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $month = $request['month'];

        $param = [':month' => $month];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m-%d") AS time, COUNT(m.menu_name) AS quantity FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y-%m") = :month GROUP BY DATE_FORMAT(o.day, "%Y-%m-%d")', $param);

        return view('restaurant.staff.manager.sales.salesFigures.perDaySalesFigures', compact('restaurant_name', 'name_or_position', 'select' ,'month'));
    }

    //１日ごとの売れ数ページ（管理者）PDFファイル
    public function pdfPerDaySalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $month = $request['month'];

        $param = [':month' => $month];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m-%d") AS time, COUNT(m.menu_name) AS quantity FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y-%m") = :month GROUP BY DATE_FORMAT(o.day, "%Y-%m-%d")', $param);

        $pdf = \PDF::loadView('restaurant.staff.manager.sales.salesFigures.pdfPerDaySalesFigures', compact('restaurant_name', 'name_or_position', 'select'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }

    //売れ数年選択ページ（管理者）
    public function selectYearSalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];

        $select = DB::select('SELECT DATE_FORMAT(day, "%Y") AS year FROM order_history WHERE prepared = "調理済" && provided = "提供済" GROUP BY DATE_FORMAT(day, "%Y")');

        return view('restaurant.staff.manager.sales.salesFigures.selectYearSalesFigures', compact('restaurant_name', 'name_or_position', 'select'));
    }

    //１か月ごとの売れ数ページ（管理者）
    public function perMonthSalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $year = $request['year'];

        $param = [':year' => $year];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m") AS time, COUNT(m.menu_name) AS quantity FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y") = :year GROUP BY DATE_FORMAT(o.day, "%Y-%m")', $param);

        return view('restaurant.staff.manager.sales.salesFigures.perMonthSalesFigures', compact('restaurant_name', 'name_or_position', 'select', 'year'));
    }

    //１か月ごとの売れ数ページ（管理者）
    public function pdfPerMonthSalesFigures(Request $request)
    {
        $restaurant_name = $request['restaurant_name'];
        $name_or_position = $request['name_or_position'];
        $year = $request['year'];

        $param = [':year' => $year];

        $select = DB::select('SELECT DATE_FORMAT(o.day, "%Y-%m") AS time, COUNT(m.menu_name) AS quantity FROM order_history o JOIN menu m ON o.menu_id = m.id WHERE prepared = "調理済" && provided = "提供済" && DATE_FORMAT(o.day, "%Y") = :year GROUP BY DATE_FORMAT(o.day, "%Y-%m")', $param);

        $pdf = \PDF::loadView('restaurant.staff.manager.sales.salesFigures.pdfPerMonthSalesFigures', compact('restaurant_name', 'name_or_position', 'select'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }
}