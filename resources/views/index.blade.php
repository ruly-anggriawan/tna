@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1">
            <h2>Questions TNA Apps</h2>
            <div class="panel panel-default">
                    
                @foreach($tnas as $tnas)
                    {!! Form::model($tnas, ['route'=>['home.update', $tnas->id], 'method'=> 'PATCH'])  !!}
                    <label>{{$tnas->soal}}</label>
                    <label>{{$tnas->grup_soal}}</label>
                    <br>
                    <label class="radio-inline">
                      <input name="soal1" type="radio" value="Sangat Buruk"> Sangat Buruk
                    </label>
                    <label class="radio-inline">
                      <input name="soal1" type="radio" value="Buruk"> Buruk
                    </label>
                    <label class="radio-inline">
                      {{ Form::radio('soal1', 'Baik') }} Baik
                    </label>
                    <label class="radio-inline"> 
                      {{ Form::radio('soal1', 'Cukup Baik') }} Cukup Baik
                    </label>
                    <label class="radio-inline">
                      {{ Form::radio('soal1', 'Sangat Baik') }} Sangat Baik
                    </label>
                  <br>
                @endforeach
                    {!! Form::submit('GANTI') !!} 
                    {!! Form::close() !!}
         
                <form method="POST" action="{{ route('home.destroy', $tnas->id) }}" accept-charset="UTF-8">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <a href="{{ route('home.edit', $tnas->id) }}" type="submit" button type="button" class="btn btn-warning">Edit</a>
                    <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus Soal Terakhir" />
                    <a href="{{ route('home.create') }}" button type="button" name='simpan' class="btn btn-info">Buat Soal</a>
                </form>
            </div>
        </div>
    </div>
@endsection

