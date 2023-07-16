@extends('layout.base')

@section('content')
    <!-- <h1>The best url!!!!!!!!!!!!! </h1> -->
    <form action="" method="POST">
        {{csrf_field()}}

        <input type="text"  name="url" placeholder="enter your url"  value="{{ old('url') }}">

        {!!$errors->first('url','<p class="error_msg">:message</p>')!!}
    </form>
@endsection