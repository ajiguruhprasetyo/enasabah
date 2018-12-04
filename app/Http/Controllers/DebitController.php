<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Debit;

class DebitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debits = Debit::join('nasabahs', 'debits.id_nasabah', '=', 'nasabahs.id')
                  ->select('debits.id', 'nasabahs.nama', 'nasabahs.id', 'nasabahs.alamat')
                  ->get();
        
        return view('debits.create', compact('debits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request, [
            'id_nasabah' => 'required|min:10|max:10',
            'nominal' => 'required',
        ]);

        $debit = new Debit();
        $debit->id_nasabah = $request->id_nasabah;
        $debit->nominal = $request->nominal;
        $debit->save($request->all());

        return redirect()->route('debit.show', $debit->id)->with('success', 'data berhasil ditambahkan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $debit = Debit::join('nasabahs', 'debits.id_nasabah', '=', 'nasabahs.id')
                ->select('debits.*', 'nasabahs.nama', 'nasabahs.alamat')
                ->find($id);
                
        return view('debits.show', compact('debit'));
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
}
