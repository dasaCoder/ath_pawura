@extends ('layouts.app')

@section('content')
    {{route('advertisement.image', 'add_'.$add->id.'_image_1.jpg')}}

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="shipping text-center"><!--shipping-->
                    <img src="http://via.placeholder.com/300x400" alt="" />
                </div>
            </div>

            <div class="col-sm-9">
                <div class="product-details">
                    <div class="col-sm-5"></div>

                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2>{{$add->title}}</h2>

                            <p><i class="fa fa-user"></i> user</p>

                            <span>
                                <span>Rs. {{$add->price}}</span>

                            </span>
                            <p><b>Type: </b>{{ $add->type }}</p>
                            <button class="btn btn-default">Edit</button>
                            <button class="btn btn-default">Comment</button>
                        </div>


                    </div>
                </div>

                <div class="category-tab shop-details-tab">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#reviews" data-toggle="tab">Description</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews">
                            <div class="col-sm-12">

                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-user"></i> user</a>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i> {{$add->created_at}}</li>
                                </ul>

                                <div>
                                    {{$add->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




<div>
    images
    @foreach($add->images as $image)
        <img class="img-responsive ath-blog-img" src="{{route('advertisement.image',$image->image_path)}}" alt="">



    @endforeach

</div>

@endsection