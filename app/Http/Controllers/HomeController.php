<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->view == 'welcome') {
            return view('welcome');
        }
        return view('index');

    }
}
