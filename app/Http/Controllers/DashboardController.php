<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // ✅ TARUH DI SINI (di dalam class)
    public function index()
    {
        return view('pages.dashboard');
    }
}