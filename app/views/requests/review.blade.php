
@extends('.layouts.base')

@section('content')

<div class="row">
	<div class="col-md-5">
	<h3>Αίτηση</h3>
		<ul>
			<li><b>Όνομα:</b> {{ $request->fullname }}</li>
			<li><b>Σχηματισμός:</b> {{ $request->sximatismos }}</li>
			<li><b>Μόναδα:</b> {{ $request->monada }}</li>
			<li><b>Βαθμός:</b> {{ $request->vathmos }}</li>
			<li><b>Σώμα:</b> {{ $request->swma }}</li>
			<li><b>Email:</b> {{ $request->email }}</li>
			<li><b>Τηλέφωνο:</b> {{ $request->tel }}</li>
			<li><b>Συνολικά άτομα:</b> {{ $request->total_people }}</li>
		</ul>
	</div>
	<div class="col-md-7">
	<h3>Διαθέσιμα δωμάτια</h3>

		@foreach($rooms as $room)
	    <div class="brdr bgc-fff pad-10 box-shad mrg-10">
	        <div class="media">

	            <div class="media-body fnt-smaller">
	                <a href="#" target="_parent"></a>

	                <h4 class="media-heading">
	                  {{ $room->name }} <small class="pull-right">{{ $room->cost }}€ / άτομο</small></h4>

	                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
	                    <li>Συνολικές θέσεις: {{ $room->total_places }}</li>

	                    <li style="list-style: none">|</li>

	                    <li>Διαθέσιμες θέσεις: {{ $room->total_places }}</li>
	                </ul>
	                <span class="fnt-smaller fnt-lighter fnt-arial">{{ $room->address }}</span>
	                <a class="btn btn-info pull-right" href="/requests/approve/{{ $room->id }}/{{ $request->id }}/">Επιλογή</a>
	            </div>
	        </div>
	</div>
    @endforeach	

</div>
</div>

@stop