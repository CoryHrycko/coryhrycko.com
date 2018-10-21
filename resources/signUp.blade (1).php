@extends('layouts.app')

@section('content')
<div class='wrapper'>


<video autoplay muted loop id="myVideo">
  <source src="../asset/images/Clock.MP4" type="video/MP4">
  <source src="../asset/images/Clock.webm" type="video/webm">
</video>

    <div class=" text-center">
        <h1 class='paddingCustom'>Welcome To Cory's Corner!</h1>
        <p>Subscribe to see posts about Tech, Psychology, Design and more!</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    </div>
@endsection