<!--
/**
   * @name:        list tables
   * @author:      Zaid - Patrik - Henry
   * @description: list all tables that belongs to his club - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')

@section('content')
<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>Numero tabla</th>
            <th>club id</th>
            <th>Vip</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($clubs) && $clubs->count())
            @foreach ($clubs as $club)
                @if($club->userid==auth()->user()->id)
                    @php $clubId = $club->id; @endphp
                    @foreach ($tables as $table)
                        @if($table->clubid==$clubId)
                        <tr>
                            <td>{{ $table->num_table}}</td>
                            <td>{{ $table->clubid}}</td>
                            <td>{{ $table->isVip}}</td>
                        </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif

    </tbody>

</table>
@endsection
