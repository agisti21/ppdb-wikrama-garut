<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tinggal;
class TinggalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tinggals = Tinggal::latest()->paginate(5);
  
        return view('tinggals.index',compact('tinggals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tinggals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Tinggal::create($request->all());
   
        return redirect()->route('tinggals.index')
                        ->with('success','Sukses');
    }
}
