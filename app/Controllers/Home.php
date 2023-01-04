<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        // if (session('user_session')) {
        //     return redirect()->back();
        // }

        if (session('user_session')) {
            return view('home');
        }

        // $data = [
        //     'pass' => sha1('dosen@123_')
        // ];
        return view('welcome_message');
    }
}
