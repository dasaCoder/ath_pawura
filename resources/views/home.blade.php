@extends('layouts.app')

@section('content')

    <div class="col-lg-2 col-md-2 "><img src="http://via.placeholder.com/250x750" alt="left" class="img-fluid"></div>
    <div class="col-lg-8 col-md-8 ">
        <div class="text-center">
            <img src="http://via.placeholder.com/750x150" alt="left" class="img-fluid">
        </div>

        <div>

            @foreach($adds as $add)

                {{$add->title}}

            @endforeach

        </div>

    </div>
    <div class="col-lg-2 col-md-2 "><img src="http://via.placeholder.com/250x750" alt="right" class="img-fluid"></div>


@endsection
