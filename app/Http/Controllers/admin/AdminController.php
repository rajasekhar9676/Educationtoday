<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Show admin dashboard
    public function dashboard()
    {
        return view('admin_panel.admin_dashboard'); // Ensure this Blade file exists
    }
}
