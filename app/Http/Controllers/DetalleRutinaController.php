<?php

namespace App\Http\Controllers;

use App\Models\DetalleRutina;
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleRutina = new DetalleRutina();
        return view('detalle-rutina.create', compact('detalleRutina'));
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

        return redirect()->route('detalle-rutinas.index')
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

        return view('detalle-rutina.edit', compact('detalleRutina'));
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

        return redirect()->route('detalle-rutinas.index')
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

        return redirect()->route('detalle-rutinas.index')
            ->with('success', 'DetalleRutina deleted successfully');
    }
}
