@extends('layouts.app')

@section('content')

    <div class="row">
        <h3>Your advertisements>>>></h3>
        <div class="col-lg-8 col-md-7 col-xs-6">
                @foreach($adds as $add)
                <a href="{{url('advertisement',$add->id)}}">{{$add->title}}</a>

                    @endforeach
        </div>
    </div>

    @endsection