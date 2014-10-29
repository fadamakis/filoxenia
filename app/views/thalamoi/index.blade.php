
@extends('.layouts.base')

@section('content')

 <div class=" panel panel-default">

    <div class="col-sm-12 panel-heading"> 
       {{ $thalamoi->count(); }} Θάλαμοι
       <a href="{{ URL::to('rooms/1/thalamoi/create') }}" class="pull-right">Δημιουργία Θαλάμου</a>
    </div>

    <div class="col-sm-12"> 
    @foreach($thalamoi as $thalamos)
        <div class="brdr bgc-fff pad-10 box-shad mrg-10">
        {{ $thalamos->name }}
        </div>

    @endforeach	
    </div>
</div>
@stop