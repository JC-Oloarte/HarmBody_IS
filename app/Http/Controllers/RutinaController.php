<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

/**
 * Class RutinaController
 * @package App\Http\Controllers
 */
class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutinas = Rutina::paginate(10);

        return view('rutina.index', compact('rutinas'))
            ->with('i', (request()->input('page', 1) - 1) * $rutinas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutina = new Rutina();
        return view('rutina.create', compact('rutina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rutina::$rules);

        $rutina = Rutina::create($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rutina = Rutina::find($id);

        return view('rutina.show', compact('rutina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutina = Rutina::find($id);

        return view('rutina.edit', compact('rutina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rutina $rutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rutina $rutina)
    {
        request()->validate(Rutina::$rules);

        $rutina->update($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rutina = Rutina::find($id)->delete();

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina deleted successfully');
    }
    
}
