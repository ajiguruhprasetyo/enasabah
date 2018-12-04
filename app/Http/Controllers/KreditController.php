<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kredit;

class KreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kredits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_k_nasabah' => 'required',
            'nominal_kredit' => 'required',
        ]);

        $kredit = New Kredit();
        $kredit->id_k_nasabah = $request->id_k_nasabah;
        $kredit->nominal_kredit = $request->nominal_kredit;
        $kredit->save($request->all());

        return redirect()->route('kredit.show', $kredit->id)->with('success', 'Data berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kredit = Kredit::find($id);

        return view('kredits.show', compact('kredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listlaporan($id){
        $kredits = Kredit::join('nasabahs', 'kredits.id_k_nasabah', '=', 'nasabahs.id')
                    ->select('kredits.*', 'nasabahs.nama', 'nasabahs.alamat')
                    ->where('kredits.id_k_nasabah', '=', $id)
                    ->orderBy('created_at', 'desc')
                    ->distinct('nasabahs.nama', 'nasabahs.alamat')
                    ->get();
dd($kredits);
        return view('kredits.listlaporan', compact('kredits'));
    }
}
