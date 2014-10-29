
@extends('.layouts.base')

@section('content')

 <div class=" panel panel-default">
    <div class="col-sm-12 panel-heading"> 
       {{ $requests->count(); }} Αιτήσεις
       <a href="{{ URL::to('requests/create') }}" class="pull-right">Δημιουργία Αίτησης</a>
    </div>

    <div class="col-sm-12"> 

        @foreach($requests as $request)

            <div class="brdr bgc-fff pad-10 box-shad mrg-10">
                <div class="media">

                    <div class="media-body fnt-smaller">
                        <a href="#" target="_parent"></a>

                        <h4 class="media-heading">
                          <a href="/requests/{{ $request->id }}/review" target="_parent">{{ $request->fullname }} <small class="pull-right">{{ $request->vathmos }}</small></a></h4>

                        <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                            <li>Συνολικά άτομα: {{ $request->total_people }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        @endforeach 
    </div>
</div>
@stop