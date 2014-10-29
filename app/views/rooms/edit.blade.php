@extends('.layouts.base')

@section('content')

<h1>Επεξεργασία Δωματίου</h1>

{{ Form::model($room, array('method' => 'PATCH', 'route' =>
 array('rooms.update', $room->id),'files'=> true)) }}
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
	        {{ Form::file('image', Input::old('image') ,array('id'=>'','class'=>'')) }}
	    </div>
	    
            {{ Form::submit('Ενημέρωση', array('class' => 'btn btn-info')) }}

            {{ link_to_route('rooms.show', 'Άκυρο', $room->
id, array('class' => 'btn')) }}

{{ Form::close() }}
<p>
{{ Form::open(array('method' => 'DELETE', 'route' =>
 array('rooms.destroy', $room->id))) }}
{{ Form::submit('Διαγραφή Δωματίου', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
</p>
@stop

