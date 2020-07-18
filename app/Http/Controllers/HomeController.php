<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Staff;
use App\Homepage;
use App\Store;
// use App\User;
// use App\Users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => 'index', 'scan']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Index';
        return view('pages.index')->with('title', $title);
    }

    public function admin()
    {
        $title = 'Welcome back';
        $user = Users::find($id);
        if($user->isAdmin == 1)
        {
            return view('/admin');
        }else{
            return view('/');
        }
        // return view('pages.index');
    }

}
