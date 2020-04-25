<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goldar;
class GoldarController extends Controller
{
/**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $goldars = Goldar::latest()->paginate(5);
      
            return view('goldars.index',compact('goldars'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('goldars.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
        
            Goldar::create($request->all());
       
            return redirect()->route('goldars.index')
                            ->with('success','Sukses');
        }
        /**
     * Display the specified resource.
     *
     * @param  \App\Goldar  $goldar
     * @return \Illuminate\Http\Response
     */
    public function show(Goldar $goldar)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goldar  $goldar
     * @return \Illuminate\Http\Response
     */
    public function edit(Goldar $goldar)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goldar $goldar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goldar $goldar)
    {
  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goldar $goldar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goldar $goldar)
    {
      //
    }
    
    
        
    }

