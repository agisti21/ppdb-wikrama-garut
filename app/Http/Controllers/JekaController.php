<?php

namespace App\Http\Controllers;
use App\Jeka;
use Illuminate\Http\Request;

class JekaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jekas = Jeka::latest()->paginate(5);
  
        return view('jekas.index',compact('jekas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jekas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Jeka::create($request->all());
   
        return redirect()->route('jekas.index')
                        ->with('success','Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jeka  $jeka
     * @return \Illuminate\Http\Response
     */
    public function show(Jeka $jeka)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jeka  $jeka
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeka $jeka)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jeka $jeka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeka $jeka)
    {
  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jeka $jeka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeka $jeka)
    {
      //
    }
}

