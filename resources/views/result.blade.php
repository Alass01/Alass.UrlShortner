@extends('layout.base')

@section('content')

<!-- <h1>find your shortner url below</h1> -->

<a href="{{config('app.url')}}/{{$shortner}}">
{{config('app.url')}}/{{$shortner}}
</a>
@stop