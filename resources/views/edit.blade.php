@extends('layouts.app')
@section('content')
   
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="table-responsive">

                    <h4>EDIT</h4>
                    {!! Form::model($tnas, ['route'=>['home.update', $tnas->id], 'method'=> 'PATCH'])  !!}
                            {!! Form::text('soal', null) !!}
                            {!! Form::text('grup_soal', null) !!}
                    <!--	{!! Form::text('bis', null) !!}
                        {!! Form::text('truk', null) !!}
                        {!! Form::text('spdmtr', null) !!}
                    -->	{!! Form::submit('Ubah') !!} 
                    {!! Form::close() !!}
                    @endsection
                    
                </div>
            </div>
        </div>
    </div>
</div>