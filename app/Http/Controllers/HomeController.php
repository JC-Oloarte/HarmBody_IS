<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the application dashboard.
     *
     * @param  int  $id_user
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id_user)
    {
        // Lógica de la página de inicio

        return view('home', compact('id_user'));
    }
}
