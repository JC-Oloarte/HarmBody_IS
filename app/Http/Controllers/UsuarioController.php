<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RolCat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

/**
 * Class UsuarioController
 * @package App\Http\Controllers
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::select('usuarios.*', 'rol_cat.Nombre')
                            ->join('rol_cat','rol_cat.id_rol', '=', 'usuarios.id_rol')->paginate(10);
        return view('usuario.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new Usuario();
        $roles = RolCat::all();
        return view('usuario.create', compact('usuario','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

     /*
    public function store(Request $request)
    {
        //request()->validate(Usuario::$rules);

        //$usuario = Usuario::create($request->all());

         // Validar las reglas del modelo Usuario
        request()->validate(Usuario::$rules);
         // Crear un usuario en el modelo Usuario
        $usuario = Usuario::create($request->all());
        // Crear un usuario en el modelo User con información común
        $user = User::create([
            'name' => $request->input('NomUsuario'),
            'email' => $request->input('NomUsuario'), // Usando el mismo valor para name y email
            'password' => bcrypt($request->input('Passw')),
        ]);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario created successfully.');

    }
*/
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'CorrUsuario' => 'required|email|max:30',
        // ... otras reglas de validación ...
    ]);

    // Verificar si la validación ha fallado
    if ($validator->fails()) {
        return redirect()->back()
            ->with('error', 'El correo ingresado no es correcto.')
            ->withInput();
    }
    $validator = Validator::make($request->all(), [
        'CorrUsuario' => [
            'required',
            'email',
            'max:30',
            Rule::unique('users', 'email'),
            
        ]
        // ... otras reglas de validación ...
    ]);

    // Verificar si la validación ha fallado
    if ($validator->fails()) {
        return redirect()->back()
            ->with('error', 'el correo electrónico ya se encuentra registrado.')->withInput();;
    }
    $validator = Validator::make($request->all(), [
        'NomUsuario' => [
            Rule::unique('usuarios', 'NomUsuario'),
        ]
        // ... otras reglas de validación ...
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->with('error', 'El nombre de usuario ya se encuentra registrado.')->withInput();;
    }
    try {

        
        // Validar las reglas del modelo Usuario
        request()->validate(Usuario::$rules);

        // Crear un usuario en el modelo Usuario

        $usario = Usuario::create([
            'NomUsuario' => $request->input('NomUsuario'),
		    'Passw' => bcrypt($request->input('Passw')),
		    'id_rol' => $request->input('id_rol'),
		    'Estatus' => $request->input('Estatus'),
        ]);

        // Crear un usuario en el modelo User con información común
        $user = User::create([
            'name' => $request->input('NomUsuario'),
            'email' => $request->input('CorrUsuario'), // Usando el mismo valor para name y email
            'password' => bcrypt($request->input('Passw')),
        ]);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado con éxtio.');

    } catch (\Exception $e) {
        // Manejar el error aquí
        return redirect()->back()
            ->with('error', 'Error al crear usuario, comuniquese con el administrador.'.$e->getMessage());
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $roles = RolCat::all();
        $user = User::all();
        return view('usuario.edit', compact('usuario','roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        request()->validate(Usuario::$rules);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        try {
            $usuario = Usuario::find($id)->delete();

            return redirect()->route('usuarios.index')
                ->with('success', 'Usuario eliminado con éxito');

        } catch (\Exception $e) {
            // Manejar el error aquí
            Log::error('Error al ejecutar sentencia SQL: ' . $e->getMessage());
    
            return redirect()->back()
                ->with('error', 'Error al eliminar, contacte con el administrador');
        }
        



        
    }
}
