<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return response()->view('pages.home', [
            'title' => 'Home',
            'menu' => config('menu'),
            'team' => config('team'),
            'advisors' => config('advisors')
        ]);
    }
}
