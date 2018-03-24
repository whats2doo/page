<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function home()
    {
        return response()->view('pages.home', [
            'title'    => 'Home',
            'menu'     => config('menu'),
            'team'     => config('team'),
            'advisors' => config('advisors')
        ]);
    }
}
