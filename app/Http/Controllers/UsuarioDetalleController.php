<?php

namespace App\Http\Controllers;

use App\Models\UsuarioDetalle;
use Illuminate\Http\Request;

/**
 * Class UsuarioDetalleController
 * @package App\Http\Controllers
 */
class UsuarioDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioDetalles = UsuarioDetalle::paginate(10);

        return view('usuario-detalle.index', compact('usuarioDetalles'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarioDetalles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarioDetalle = new UsuarioDetalle();
        return view('usuario-detalle.create', compact('usuarioDetalle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UsuarioDetalle::$rules);

        $usuarioDetalle = UsuarioDetalle::create($request->all());

        return redirect()->route('usuario-detalles.index')
            ->with('success', 'UsuarioDetalle created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarioDetalle = UsuarioDetalle::find($id);

        return view('usuario-detalle.show', compact('usuarioDetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarioDetalle = UsuarioDetalle::find($id);

        return view('usuario-detalle.edit', compact('usuarioDetalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UsuarioDetalle $usuarioDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuarioDetalle $usuarioDetalle)
    {
        request()->validate(UsuarioDetalle::$rules);

        $usuarioDetalle->update($request->all());

        return redirect()->route('usuario-detalles.index')
            ->with('success', 'UsuarioDetalle updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuarioDetalle = UsuarioDetalle::find($id)->delete();

        return redirect()->route('usuario-detalles.index')
            ->with('success', 'UsuarioDetalle deleted successfully');
    }
}
