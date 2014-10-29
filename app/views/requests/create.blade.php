@extends('.layouts.base')

@section('content')


<h1>Δημιουργία Αίτησης</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'requests')) }}

    <div class="form-group">
        {{ Form::label('fullname', 'Όνομα') }}
        {{ Form::text('fullname', Input::old('fullname'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('sximatismos', 'Σχηματισμός') }}
        {{ Form::text('sximatismos', Input::old('sximatismos'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('monada', 'Μονάδα') }}
        {{ Form::text('monada', Input::old('monada'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('vathmos', 'Βαθμός') }}
        {{ Form::text('vathmos', Input::old('vathmos'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('swma', 'Σώμα') }}
        {{ Form::text('swma', Input::old('swma'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('am', 'ΑΜ') }}
        {{ Form::text('am', Input::old('am'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('afm', 'ΑΦΜ') }}
        {{ Form::text('afm', Input::old('afm'), array('class' => 'form-control')) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('email', 'email') }}
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>    
    
    <div class="form-group">
        {{ Form::label('tel', 'Τηλέφωνο') }}
        {{ Form::text('tel', Input::old('tel'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('total_people', 'Συνολικά άτομα') }}
        {{ Form::text('total_people', Input::old('total_people'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Υποβολή', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<br />

@stop