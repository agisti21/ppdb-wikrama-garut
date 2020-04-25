<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agama;
class AgamaController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $agamas = Agama::latest()->paginate(5);
      
            return view('agamas.index',compact('agamas'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('agamas.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
        
            Agama::create($request->all());
       
            return redirect()->route('agamas.index')
                            ->with('success','Sukses');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Agama  $agama
         * @return \Illuminate\Http\Response
         */
        public function show(Agama $agama)
        {
           //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Agama  $agama
         * @return \Illuminate\Http\Response
         */
        public function edit(Agama $agama)
        {
          //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Agama $agama
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Agama $agama)
        {
      //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Agama $agama
         * @return \Illuminate\Http\Response
         */
        public function destroy(Agama $agama)
        {
          //
        }
    }

