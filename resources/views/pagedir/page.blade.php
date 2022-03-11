@extends('layouts.app')

@section('content')
    <h1>Dynamic Page</h1>
    <!-- default -->
    Title: {{ $title ?? '' }}

    <!-- alt -->
    Title: {{ $p1 }}
@endsection
