<?php

namespace App\Http\Controllers;

use App\Models\PermisoCat;
use Illuminate\Http\Request;

/**
 * Class PermisoCatController
 * @package App\Http\Controllers
 */
class PermisoCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisoCats = PermisoCat::paginate(10);

        return view('permiso-cat.index', compact('permisoCats'))
            ->with('i', (request()->input('page', 1) - 1) * $permisoCats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisoCat = new PermisoCat();
        return view('permiso-cat.create', compact('permisoCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PermisoCat::$rules);

        $permisoCat = PermisoCat::create($request->all());

        return redirect()->route('permiso-cats.index')
            ->with('success', 'PermisoCat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permisoCat = PermisoCat::find($id);

        return view('permiso-cat.show', compact('permisoCat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permisoCat = PermisoCat::find($id);

        return view('permiso-cat.edit', compact('permisoCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PermisoCat $permisoCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermisoCat $permisoCat)
    {
        request()->validate(PermisoCat::$rules);

        $permisoCat->update($request->all());

        return redirect()->route('permiso-cats.index')
            ->with('success', 'PermisoCat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $permisoCat = PermisoCat::find($id)->delete();

        return redirect()->route('permiso-cats.index')
            ->with('success', 'PermisoCat deleted successfully');
    }
}
