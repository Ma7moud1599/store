<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth'])->only('index');
    }

    // Actions
    public function index()
    {
        $title = 'Store';

        $user = Auth::user();

        // Return response: view, josn, redirect, file

        return view('dashboard.index', [
            'user' => 'Mohammed',
            'title' => $title,
        ]);
    }
}
