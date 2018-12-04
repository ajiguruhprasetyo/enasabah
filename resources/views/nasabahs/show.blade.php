@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <div class="form-group">
                        <p>{!! Form::label('id', 'No Rekening : ') !!}
                            {{ $nasabahs->id }}</p>
                        </div>

                        <div class="form-group">
                        <p>{!! Form::label('nama', 'Nama : ') !!}
                            {{ $nasabahs->nama }}</p>
                        </div>

                        <div class="form-group">
                        <p>{!! Form::label('alamat', 'Alamat : ') !!}
                            {{ $nasabahs->alamat }}</p>
                        </div>
                    
                        <a class="btn btn-sm btn-primary" href="{{ url('debit/create') }}">#01</a>
                        <a class="btn btn-sm btn-success" href="{{ url('kredit/create') }}">#02</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
