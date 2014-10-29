
@extends('.layouts.base')

@section('content')

 <div class=" panel panel-default">
    <div class="col-sm-12 panel-heading"> 
       {{ $rooms->count(); }} Δωμάτια
       <a href="{{ URL::to('rooms/create') }}" class="pull-right">Δημιουργία Δωματίου</a>
    </div>

    <div class="col-sm-12"> 
    @foreach($rooms as $room)
        <div class="brdr bgc-fff pad-10 box-shad mrg-10">
            <div class="media">
                <a class="pull-left" href="#" target="_parent">
                	<img alt="image" class="img-responsive"  style="width: 150px;" src="{{ asset('uploads/rooms/'.$room->image) }}">
                </a>

                <div class="clearfix visible-sm"></div>

                <div class="media-body fnt-smaller">
                    <a href="#" target="_parent"></a>

                    <h4 class="media-heading">
                      <a href="/rooms/{{ $room->id }}" target="_parent">{{ $room->name }} <small class="pull-right">{{ $room->cost }}€ / άτομο</small></a></h4>


                    <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                        <li>Συνολικές θέσεις: {{ $room->total_places }}</li>

                        <li style="list-style: none">|</li>

                        <li>Διαθέσιμες θέσεις: {{ $room->total_places }}</li>
                    </ul>

                    <p class="hidden-xs">{{ $room->description }}</p>
                    <span class="fnt-smaller fnt-lighter fnt-arial">{{ $room->address }}</span>
                </div>
            </div>
        </div>

    @endforeach	
    </div>
</div>
@stop