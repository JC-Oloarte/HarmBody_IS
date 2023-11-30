<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Rutina;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate(10);

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente registrado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        $rutinas = Rutina::where('id_paciente','=', $id)->paginate(10);
        return view('paciente.show', compact('paciente', 'rutinas'))
        ->with('i', (request()->input('page', 1) - 1) * $rutinas->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        // Validar la solicitud
        request()->validate(Paciente::$rules);
    
        // Obtener los valores actuales del modelo antes de la actualización
        $valoresAntes = $paciente->getAttributes();
    
        // Actualizar el modelo con los datos de la solicitud
        $paciente->update($request->all());
    
        // Obtener los valores actualizados después de la actualización
        $valoresDespués = $paciente->fresh()->getAttributes();
    
        // Comparar los valores antes y después
        $cambios = array_diff_assoc($valoresDespués, $valoresAntes);
    
        // Verificar si hay cambios
        if (count($cambios) > 0) {
            return redirect()->route('pacientes.index')
                ->with('success', 'Paciente actualizado con éxito');
        } else {
            return redirect()->route('pacientes.index')
                ->with('alert', 'No hay ningún cambio a realizar');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente eliminado con éxito');
    }
}
