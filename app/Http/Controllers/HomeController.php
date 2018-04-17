<?php

namespace App\Http\Controllers;

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
            'title'           => 'Home',
            'menu'            => config('menu'),
            'menuFooter'      => config('menu-footer'),
            'team'            => config('team'),
            'advisors'        => config('advisors'),
            'tokenAllocation' => config('token-allocation'),
            'ico'             => config('ico')
        ]);
    }
}
