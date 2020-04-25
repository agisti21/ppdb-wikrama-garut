<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\Jeka;
use App\Agama;
use App\Goldar;
use App\Tinggal;
use App\Pendidikan;
use App\Info;
use App\Jalur;
use Illuminate\Http\Request;
use PDF;
class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesertas = Peserta::latest()->paginate(5);
  
        return view('pesertas.index',compact('pesertas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jekas=Jeka::all();
        $goldars=Goldar::all();
        $agamas=Agama::all();
        $tinggals=Tinggal::all();
        $pendidikans=Pendidikan::all();
        $infos=Info::all();
        $jalurs=Jalur::all();
        return view('pesertas.create',compact('jekas','agamas','goldars','tinggals','pendidikans','infos','jalurs',$jekas,$agamas,$goldars,$tinggals,$pendidikans,$infos,$jalurs));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Peserta::create($request->all());
   
        return redirect()->route('pesertas.index')
                        ->with('success','Sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        return view('pesertas.show',compact('peserta'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak_pdf()
    {
        $pdf = PDF::loadview('pesertas.cetak');
    	return $pdf->download('formulir-pendaftaran-smk-wikrama-garut.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        $jekas = Jeka::get();
        $goldars = Goldar::get();
        $agamas = Agama::get();
        $tinggals = Tinggal::get();
        $pendidikans = Pendidikan::get();
        $infos = Info::get();
        $jalurs = Jalur::get();
        return view('pesertas.edit',compact('peserta','jekas','agamas','goldars','tinggals','pendidikans','infos','jalurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
  
        $peserta->update($request->all());
  
        return redirect()->route('pesertas.index')
                        ->with('success','successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();
  
        return redirect()->route('pesertas.index')
                        ->with('success','successfully');
    }
    
}
