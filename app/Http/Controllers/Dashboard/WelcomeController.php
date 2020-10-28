<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        // $categories_count = Category::count();
        // $products_count = Product::count();
        // $clients_count = Client::count();
        // $users_count = User::whereRoleIs('admin')->count();
        // $suppliers_count = Supplier::count();

        // $sales_data = Order::select(
        //     DB::raw('YEAR(created_at) as year'),
        //     DB::raw('MONTH(created_at) as month'),
        //     DB::raw('SUM(total_price) as sum')
        // )->groupBy('month')->get();

        return view('dashboard.welcome');
    
    }//end of index
}
