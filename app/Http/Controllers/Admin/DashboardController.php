<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getChartData()
    {
        $lineChartData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            'data' => [65, 59, 80, 81, 56, 55],
        ];

        $barChartData = [
            'labels' => ['Category 1', 'Category 2', 'Category 3', 'Category 4'],
            'data' => [12, 19, 3, 5],
        ];

        $pieChartData = [
            'labels' => ['Red', 'Blue', 'Yellow'],
            'data' => [300, 50, 100],
        ];

        return response()->json([
            'line' => $lineChartData,
            'bar' => $barChartData,
            'pie' => $pieChartData,
        ]);
    }
}
