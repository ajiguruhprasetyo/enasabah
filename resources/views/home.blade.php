@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif

                    {{ Form::open(['method' => 'get', 'class' => 'form-inline pull-left']) }}
					
                        {!! Form::text('data',null, array ('value' => request('data'),
                            'class' => 'input-sm form-control',
                            'placeholder' => 'Masukan Nomor Rekening ..',
                            'style' => 'width:200px')) !!}  

                        {{ Form::submit('Cari', ['class' => 'btn btn-sm btn-warning form-control']) }}
                    {{ Form::close() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
