@extends('template.default')
@section('content')
@if ($errors->count() > 0)

    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $msg)
        <li>{{ $msg }}</li>
        @endforeach
        </ul>
    </div>
@endif

    {{ Form::open(array('route' => 'addrow', 'method' => 'POST')) }}
        <div class="form-group">
			{{ Form::label('','Tutar') }}
			{{ Form::text('amount', Input::old('amount'), array('placeholder' => 'Tutar', 'class' => 'form-control')) }}
        </div>
		<div class="form-group">
			{{ Form::label('','Açıklama') }}
			{{ Form::textarea('content', Input::old('content'), array('placeholder' => 'Açıklama', 'class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('','Durumu') }}
            {{ Form::select('status', array(''=>'Seçiniz', 'insert' => 'Giriş','exit' => 'Çıkış'),'asd', array('class' => 'form-control')) }}
        </div>
        <button type="submit" class="btn btn-default">Kaydet</button>
    {{ Form::close() }}

@stop