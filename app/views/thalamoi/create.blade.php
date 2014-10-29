@extends('.layouts.base')

@section('content')


<h1>Δημιουργία Θαλάμου</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => URL::action('ThalamoiController@store', ['ksenwnas_id' => $ksenwnas_id]))) }}

    <div class="form-group">
        {{ Form::label('name', 'Όνομα') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('total_places', 'Συνολικές θέσεις') }}
        {{ Form::text('total_places', Input::old('total_places'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Δημιουργία Θαλάμου', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<br />
@stop