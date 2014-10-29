@extends('.layouts.base')

@section('content')


<h1>Δημιουργία Δωματίου</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'rooms','files'=>true)) }}

    <div class="form-group">
        {{ Form::label('name', 'Όνομα') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Περιγραφή') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Διεύθυνση') }}
        {{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('cost', 'Κόστος') }}
        {{ Form::text('cost', Input::old('cost'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('total_places', 'Συνολικές θέσεις') }}
        {{ Form::text('total_places', Input::old('total_places'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('image', 'Εικόνα') }}
        {{ Form::file('image','',array('id'=>'','class'=>'')) }}
    </div>

    {{ Form::submit('Δημιουργία δωματίου', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<br />
@stop