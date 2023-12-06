<?php

namespace App\Http\Controllers;

use App\Models\DetalleRutina;
use App\Models\Rutina;
use App\Models\Ejercicio;
use Illuminate\Http\Request;

/**
 * Class DetalleRutinaController
 * @package App\Http\Controllers
 */
class DetalleRutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleRutinas = DetalleRutina::paginate(10);

        return view('detalle-rutina.index', compact('detalleRutinas'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleRutinas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $detalleRutina = new DetalleRutina();
        $rutina = Rutina::select('id_rutina', 'Nombre')->where('id_rutina','=',$id)->get();
        $ejercicio = Ejercicio::select('id_ejercicio', 'Nombre')->where('Estatus','=', 1)->get();
        return view('detalle-rutina.create', compact('detalleRutina', 'rutina', 'ejercicio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleRutina::$rules);

        $detalleRutina = DetalleRutina::create($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'DetalleRutina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleRutina = DetalleRutina::find($id);

        return view('detalle-rutina.show', compact('detalleRutina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleRutina = DetalleRutina::find($id);
        $rutina = Rutina::select('id_rutina', 'Nombre')->get();
        $ejercicio = Ejercicio::select('id_ejercicio', 'Nombre')->get();
        return view('detalle-rutina.edit', compact('detalleRutina', 'rutina','ejercicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleRutina $detalleRutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleRutina $detalleRutina)
    {
        request()->validate(DetalleRutina::$rules);

        $detalleRutina->update($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'DetalleRutina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleRutina = DetalleRutina::find($id)->delete();

        return redirect()->route('rutinas.index')
            ->with('success', 'DetalleRutina deleted successfully');
    }
}
