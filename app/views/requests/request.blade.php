
@extends('.layouts.base')

@section('content')


<h1>{{ $request->fullname }} </h1>


<ul>
	<li><b>Σχηματισμός:</b> {{ $request->sximatismos }}</li>
	<li><b>Μόναδα:</b> {{ $request->monada }}</li>
	<li><b>Βαθμός:</b> {{ $request->vathmos }}</li>
	<li><b>Σώμα:</b> {{ $request->swma }}</li>
	<li><b>Email:</b> {{ $request->email }}</li>
	<li><b>Τηλέφωνο:</b> {{ $request->tel }}</li>
	<li><b>Συνολικά άτομα:</b> {{ $request->total_people }}</li>
</ul>

<p>{{ link_to_route('requests.edit', 'Επεξεργασία', array($request->id)) }}</p>

@stop