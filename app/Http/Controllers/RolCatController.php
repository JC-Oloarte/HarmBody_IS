<?php

namespace App\Http\Controllers;

use App\Models\RolCat;
use Illuminate\Http\Request;

/**
 * Class RolCatController
 * @package App\Http\Controllers
 */
class RolCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolCats = RolCat::paginate(10);

        return view('rol-cat.index', compact('rolCats'))
            ->with('i', (request()->input('page', 1) - 1) * $rolCats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rolCat = new RolCat();
        return view('rol-cat.create', compact('rolCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RolCat::$rules);

        $rolCat = RolCat::create($request->all());

        return redirect()->route('rol-cats.index')
            ->with('success', 'RolCat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rolCat = RolCat::find($id);

        return view('rol-cat.show', compact('rolCat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rolCat = RolCat::find($id);

        return view('rol-cat.edit', compact('rolCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RolCat $rolCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolCat $rolCat)
    {
        request()->validate(RolCat::$rules);

        $rolCat->update($request->all());

        return redirect()->route('rol-cats.index')
            ->with('success', 'RolCat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rolCat = RolCat::find($id)->delete();

        return redirect()->route('rol-cats.index')
            ->with('success', 'RolCat deleted successfully');
    }
}
