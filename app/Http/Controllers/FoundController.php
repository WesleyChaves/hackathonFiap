<?php

namespace App\Http\Controllers;
    
use App\Found;
use Illuminate\Http\Request;

class FoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $founds = found::latest()->paginate(5);
  
        return view('founds.index',compact('founds'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('founds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'item' => 'required']);

        found::create($request->all());

        return redirect()->route('founds.index')
                         ->with('success', 'Salvo com Sucesso');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function show(Found $found)
    {
        return view('founds.show', compact('founds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function edit(Found $found)
    {
        return view('founds.edit', compact(['founds']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Found $found)
    {
        $request->validate([
            'category' => 'required',
            'item' => 'required'
        ]);

        $found->update($request->all());

        return redirect()->route('founds.index')
                                  ->with('success', 'Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Found  $found
     * @return \Illuminate\Http\Response
     */
    public function destroy(Found $found)
    {
        
        $found->delete();

        return redirect()->route('founds.index')
                                  ->with('success', 'Apagado com Sucesso');
    }
}
