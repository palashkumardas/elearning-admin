<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // show dashboard page
    public function showDashboardPage(){
        return view('index');
    }
}
