@extends('.layouts.base')

@section('content')

<h1>Επεξεργασία Δωματίου</h1>

{{ Form::model($request, array('method' => 'PATCH', 'route' =>
 array('requests.update', $request->id))) }}
	   
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
            {{ Form::submit('Ενημέρωση', array('class' => 'btn btn-info')) }}

            {{ link_to_route('requests.show', 'Άκυρο', $request->
id, array('class' => 'btn')) }}

{{ Form::close() }}
<p>
{{ Form::open(array('method' => 'DELETE', 'route' =>
 array('requests.destroy', $request->id))) }}
{{ Form::submit('Απόρριψη αίτησης', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
</p>
@stop

