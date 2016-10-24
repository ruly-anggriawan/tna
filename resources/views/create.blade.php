@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="table-responsive">
                    <h4>Buat Soal</h4>

                    {!! Form::open(['route'=>'home.store'])  !!}
                            {!! Form::text('soal', null, ['placeholder' => 'Isi Pertanyaan']) !!}
                        {!! Form::text('grup_soal', null, ['placeholder' => 'Isi Indeks Grup Soal']) !!}
                       <!-- {!! Form::text('bis', null, ['placeholder' => 'Masukkan Data Bis']) !!}
                            {!! Form::text('truk', null, ['placeholder' => 'Masukkan Data Truk']) !!}
                        {!! Form::text('spdmtr', null, ['placeholder' => 'Masukkan Data Sepeda Motor']) !!}
                    -->	{!! Form::submit('Simpan') !!}
                    {!! Form::close() !!}
                    @endsection
                    
                </div>
            </div>
        </div>
    </div>
</div>