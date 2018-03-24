<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function formatMembers($team):array
    {
        for($i=0;$i<count($team);$i++){
            if(!empty($team[$i]['socialprofiles'])){
                foreach($team[$i]['socialprofiles'] as $profile=>$data){
                    if($profile == 'linkedin'){
                        $team[$i]['socialprofiles']['linkedin']['icon'] = 'logo-linkedin';
                    }elseif($profile == 'mail'){
                        $team[$i]['socialprofiles']['mail']['icon'] = 'ios-mail';
                    }elseif($profile == 'whats2doo'){
                        $team[$i]['socialprofiles']['whats2doo']['icon'] = '';
                    }elseif($profile == 'xing'){
                        $team[$i]['socialprofiles']['xing']['icon'] = '';
                    }
                }
            }

        }
        return $team;
    }

    public function home(Request $request)
    {
        return response()->view('pages.home', [
            'title' => 'Home',
            'menu' => config('menu'),
            'team' => $this->formatMembers(config('team')),
            'advisors' => $this->formatMembers(config('advisors'))
        ]);
    }
}
