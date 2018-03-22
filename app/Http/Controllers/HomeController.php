<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getTeam(){

        $team = [
            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ],

            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ],

            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ],

            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ],

            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ],

            [
            'name' => 'Ilja Leithold',
            'jobtitle'  => 'CEO',
            'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
            'image'  => 'ilja-leithold.jpg',
            'socialprofiles'  => [
                'whats2doo' => 'Blog',
                'linkedin'  => '#blog',
                'xing'  => '#blog',
                'mail'  => '#blog'
                ]
            ]
        ];
        return $team;
    }

    public function getAdvisors(){

        $team = [
            [
                'name' => 'Ilja Leithold',
                'jobtitle'  => 'CEO',
                'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
                'image'  => 'ilja-leithold.jpg',
                'socialprofiles'  => [
                    'whats2doo' => 'Blog',
                    'linkedin'  => '#blog',
                    'xing'  => '#blog',
                    'mail'  => '#blog'
                ]
            ],

            [
                'name' => 'Ilja Leithold',
                'jobtitle'  => 'CEO',
                'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
                'image'  => 'ilja-leithold.jpg',
                'socialprofiles'  => [
                    'whats2doo' => 'Blog',
                    'linkedin'  => '#blog',
                    'xing'  => '#blog',
                    'mail'  => '#blog'
                ]
            ],

            [
                'name' => 'Ilja Leithold',
                'jobtitle'  => 'CEO',
                'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
                'image'  => 'ilja-leithold.jpg',
                'socialprofiles'  => [
                    'whats2doo' => 'Blog',
                    'linkedin'  => '#blog',
                    'xing'  => '#blog',
                    'mail'  => '#blog'
                ]
            ],

            [
                'name' => 'Ilja Leithold',
                'jobtitle'  => 'CEO',
                'text'  => 'W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds.',
                'image'  => 'ilja-leithold.jpg',
                'socialprofiles'  => [
                    'whats2doo' => 'Blog',
                    'linkedin'  => '#blog',
                    'xing'  => '#blog',
                    'mail'  => '#blog'
                ]
            ]
        ];
        return $team;
    }

    public function home(Request $request)
    {
        return response()->view('pages.home', [
            'title' => 'Home',
            'menu'  => config('menu'),
            'team' => $this->getTeam(),
            'advisors' => $this->getAdvisors()
        ]);
    }
}
