<?php

namespace App\Http\Controllers;

use App\Models\DetallePerRol;
use App\Models\RolCat;
use App\Models\PermisoCat;
use Illuminate\Http\Request;

/**
 * Class DetallePerRolController
 * @package App\Http\Controllers
 */
class DetallePerRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallePerRols = DetallePerRol::paginate(10);
        return view('detalle-per-rol.index', compact('detallePerRols'))
            ->with('i', (request()->input('page', 1) - 1) * $detallePerRols->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $detallePerRol = new DetallePerRol();
        $rolCat = RolCat::select('id_rol', 'Nombre')->where('id_rol','=',$id)->get();
        $permisoCat = PermisoCat::select('id_permiso', 'Nombre')->where('Estatus','=', 1)->get();
        return view('detalle-per-rol.create', compact('detallePerRol','rolCat','permisoCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallePerRol::$rules);

        $detallePerRol = DetallePerRol::create($request->all());

        return redirect()->route('rol-cats.index')
            ->with('success', 'DetallePerRol created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallePerRol = DetallePerRol::find($id);

        return view('detalle-per-rol.show', compact('detallePerRol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallePerRol = DetallePerRol::find($id);
        $rolCat = RolCat::pluck('id_rol');
        $permisoCat = PermisoCat::pluck('id_permiso');
        return view('detalle-per-rol.edit', compact('detallePerRol','rolCat','permisoCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallePerRol $detallePerRol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePerRol $detallePerRol)
    {
        request()->validate(DetallePerRol::$rules);

        $detallePerRol->update($request->all());

        return redirect()->route('detalle-per-rols.index')
            ->with('success', 'DetallePerRol updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallePerRol = DetallePerRol::find($id)->delete();

        return redirect()->route('detalle-per-rols.index')
            ->with('success', 'DetallePerRol deleted successfully');
    }
}
