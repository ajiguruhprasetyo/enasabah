@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-header">
                        <div class="form-group">
                            <img height="40px" width="auto" src="{{ asset('image/logo.png') }}" alt="">
                            <h4 class="text-center">Setor Tunai</h4>
                        </div>
                    </div>
                        <div class="card-body">
                    
                            <div class="form-group">
                            <p> {!! Form::label('id_nasabah', 'Nama') !!}
                            : {{ $kredit->nasabahs->nama }}</p>
                            </div>

                            <div class="form-group">
                            <p> {!! Form::label('id_nasabah', 'Alamat') !!}
                            : {{ $kredit->nasabahs->alamat }}</p>
                            </div>

                            <div class="form-group">
                            <p> 
                            {!! Form::label('id_k_nasabah', 'No Rekening') !!}
                            : {{ $kredit->id_k_nasabah }}</p>
                            </div>

                            <div class="form-group">
                            <p>{!! Form::label('nominal_kredit', 'Nominal') !!}
                                : Rp. {{ number_format ($kredit->nominal_kredit,2,",",".") }}</p>
                            </div>
                            
                            <div class="form-group">
                                <div class="text-right">
                                     <p>Nasabah</p>
                                     <br>
                                     <br>
                                     <p>{{$kredit->nasabahs->nama}}</p>
                                </div>
                                <div class="text-left text-layout">
                                    <p>Teller</p>
                                    <br>
                                    <br>
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            
                        </div>
                    <div class="pull-right">
                        <a class="btn btn-sm btn-success" href="{{ url('nasabah?data=zzz') }}">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
