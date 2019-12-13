<?php

namespace App\Http\Controllers;

use App\Category;
use App\Donation;
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
        //
    }

    /**
     * Show the Home page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'donations' => Donation::where('status', Donation::AVAILABLE_DONATION)->simplePaginate(9),
            'categories' => Category::all(),
        ];
        return view('welcome', $data);
    }

    public function donations()
    {
        $data = [
            'donations' => Donation::where('status', Donation::AVAILABLE_DONATION)->paginate(20),
            'categories' => Category::all(),
            'pageTitle' => 'Donations',
            'pageSubtitle' => 'Given by benevolent members of the <strong>Giveacad</strong> community',
        ];
        return view('donations', $data);
    }

    public function faq()
    {
        $data = [
            'pageTitle' => 'Frequently Asked Questions',
            'pageSubtitle' => 'Asked by members of the <strong>Giveacad</strong> community',
        ];
        return view('faq', $data);
    }
}
