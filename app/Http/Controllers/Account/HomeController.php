<?php

namespace App\Http\Controllers\Account;

use App\Category;
use App\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'Dashboard',
        ];
        return view('account.home', $data);
    }
}
