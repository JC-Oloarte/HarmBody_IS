<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
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
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the application dashboard.
     *
     * @param  int  $id_user
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Lógica de la página de inicio
        return view('home');
    }
}
