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
                                'placeholder' => 'Contoh: 1122334401',
                                'style' => 'width:200px')) !!}  

                            {{ Form::submit('Tampilkan', ['class' => 'btn btn-sm btn-primary form-control']) }}
                        {{ Form::close() }}
                        <p style="color:red;"><i>* Masukkan nomor rekening..</i></p>
                        <table class="table table-bordered">
							<tr>
								<th>No Rekening</th>
                                <th>Nama</th>
                                <th>Saldo Anda</th>
								<th>Alamat</th>
                                <th></th>
							</tr>
							@foreach ($nasabahs as $na)
                               
                                    <tr>
                                        <td>{{ $na->id }}</td>
                                        <td>{{ $na->nama }}</td>
                                        <td>Rp. {{ number_format($na->nominal_kredit, 2, ",", ".") }}</td>
                                        <td>{{ $na->alamat }}</td>
                                        <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('nasabah.show', $na->id) }}">Lanjutkan</a>
                                        </td>
                                    </tr>
                               
							@endforeach
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
