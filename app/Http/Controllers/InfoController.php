<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class InfoController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::latest()->paginate(5);
  
        return view('infos.index',compact('infos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Info::create($request->all());
   
        return redirect()->route('infos.index')
                        ->with('success','Sukses');
    }
}

