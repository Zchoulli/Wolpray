<!--
/**
   * @name:        manager welcome page
   * @author:      Zaid - Patrik - Henry
   * @description: show the cover of club - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.manager')

@section('content')
    @if(!empty($clubs) && $clubs->count())
    @foreach ($clubs as $club)
        @if($club->userid==auth()->user()->id)
            <ul>
                <img src="{{$club->cover_url}}" alt="Card image cap" width="1000" height="250">
            </ul>
        @endif
    @endforeach
@endif
@endsection
