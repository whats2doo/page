<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $title = 'Gurke';

        return response()->view('pages.home', [
            'title' => 'Home',
        ]);
    }
}