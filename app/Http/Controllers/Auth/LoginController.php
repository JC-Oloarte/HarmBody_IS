<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**
     * Get the post login redirect path.
     *
     * @return string
     */
    public function redirectTo()
    {
        // Obtener el nombre del usuario desde la tabla users
    $userName = User::find(Auth::id())->name;

    // Obtener el nombre del usuario desde la tabla usuarios
    $usuarioPerm = Usuario::where('NomUsuario', $userName)->value('id_rol');
    Config::set('app.user_id', $usuarioPerm);
        // Redireccionar a la ruta home con el id_user como parámetro
        return route('home');
        //return route('home');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
