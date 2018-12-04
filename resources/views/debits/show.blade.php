@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                            <div class="form-group">
                                <img height="40px" width="auto" src="{{ asset('image/logo.png') }}" alt="">
                                <h4 class="text-center">Penarikan Tunai</h4>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                            <p> {!! Form::label('id_nasabah', 'Nama') !!}
                            {{ $debit->nasabah->nama }}</p>
                            </div>

                            <div class="form-group">
                            <p> {!! Form::label('id_nasabah', 'Alamat') !!}
                            {{ $debit->nasabah->alamat }}</p>
                            </div>

                            <div class="form-group">
                            <p> {!! Form::label('id_nasabah', 'No Rekening') !!}
                            {{ $debit->id_nasabah }}</p>
                            </div>

                            <div class="form-group">
                                {!! Form::label('nominal', 'Nominal') !!}
                                <td>Rp. {{ number_format ($debit->nominal,2,",",".") }}</td>
                            </div>
                            
                            <div class="form-group">
                                <div class="text-right">
                                    <p>Nasabah</p>
                                    <br>
                                    <br>
                                    <p>{{ $debit->nasabah->nama }}</p>
                                </div>
                                <div class="text-left text-layout">
                                    <p>Teller</p>
                                    <br>
                                    <br>
                                    <p>{{ Auth::user()->name }} </p>
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
