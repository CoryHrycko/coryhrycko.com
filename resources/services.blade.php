@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="content1">
                <div class="title">Services</div>
                @if(count($services)>0)
                <ul class="gigServices">
                	@foreach($services as $service)
                		<li>{{$service}}</li>
                	@endforeach
                </ul>
                @endif
            </div>
        </div> 
@endsection