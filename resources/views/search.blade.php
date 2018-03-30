@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="shipping text-center"><!--shipping-->
                <img src="http://via.placeholder.com/300x400" alt="" />
            </div>
        </div>
        <div class="col-sm-9">
            <div class="text-center " style="padding-bottom: 10px">
                <img src="http://via.placeholder.com/750x150" alt="left" class="img-fluid">
            </div>


            <div class="feature_items">
                <h2 class="title text-center">Search Results...</h2>
                @if(count($adds)>0)
                    @foreach($adds as $add)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="{{route('advertisement.image','add_'.$add->id.'_image_1.jpg')}}" alt="" />
                                        <h2>{{$add->title}}</h2>
                                        {{--<p>Easy Polo Black Edition</p>--}}
                                        <a href="{{route('advertisement.get',$add->id)}}" class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>View more</a>
                                    </div>

                                </div>

                            </div>
                        </div>


                    @endforeach

                    @else
                    <p>No results found</p>

                    @endIf
            </div>
        </div>
    </div>
</div>

    @endsection