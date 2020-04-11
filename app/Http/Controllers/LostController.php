<?php

namespace App\Http\Controllers;

use App\lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $losts = lost::latest()->paginate(5);
  
        return view('losts.index',compact('losts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('losts.create');
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
            'item' => 'required',
        ]);
  
        lost::create($request->all());
   
        return redirect()->route('losts.index')
                        ->with('success','lost created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function show(lost $lost)
    {
        return view('losts.show',compact('losts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function edit(lost $lost)
    {
        return view('losts.edit',compact('losts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lost $lost)
    {
         $request->validate([
            'category' => 'required',
            'item' => 'required',
        ]);
  
        $lost->update($request->all());
  
        return redirect()->route('losts.index')
                        ->with('success','lost updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lost  $lost
     * @return \Illuminate\Http\Response
     */
    public function destroy(lost $lost)
    {
        $lost->delete();
  
        return redirect()->route('losts.index')
                        ->with('success','lost deleted successfully');
    }
}
