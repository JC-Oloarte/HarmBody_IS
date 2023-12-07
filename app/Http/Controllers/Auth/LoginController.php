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
    $usuarioId=0;
    $user_idd=3;
    // Obtener el nombre del usuario desde la tabla usuarios
    $usuarioPerm = Usuario::where('NomUsuario', $userName)->value('id_rol');
    $this->updateDotEnv('VIEW_ID', $usuarioPerm);
    
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

    public function updateDotEnv($key, $newValue, $delim='')
    {

    $path = base_path('.env');
    // get old value from current env
    $oldValue = env($key);

    // was there any change?
    if ($oldValue === $newValue) {
        return;
    }

    // rewrite file content with changed data
    if (file_exists($path)) {
        // replace current value with new value 
        file_put_contents(
            $path, str_replace(
                $key.'='.$delim.$oldValue.$delim, 
                $key.'='.$delim.$newValue.$delim, 
                file_get_contents($path)
            )
        );
    }
}
}
