<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jalur;

class JalurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jalurs = Jalur::latest()->paginate(5);
  
        return view('jalurs.index',compact('jalurs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jalurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Jalur::create($request->all());
   
        return redirect()->route('jalurs.index')
                        ->with('success','Sukses');
    }
}
