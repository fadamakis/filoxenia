
@extends('.layouts.base')

@section('content')


    <table class="table table-condensed table-bordered table-striped">
        <tr>
            <th>Ξενώνας</th>
            <th>Δικαιούχος</th>
            <th>Συνολικά άτομα</th>
            <th>Εγγριθηκε</th>
            <th>Εξοφλήθει</th>
        </tr>
        @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->room->name }}</td>
            <td>{{ $transaction->aitisi->fullname }}</td>
            <td>{{ $transaction->aitisi->total_people }}</td>
            <td>{{ $transaction->created_at }}</td>
            <td>{{ $transaction->paid }}</td>
        </tr>
        @endforeach 
    </table>

@stop