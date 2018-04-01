@extends ('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="shipping text-center"><!--shipping-->
                    <img src="http://via.placeholder.com/300x400" alt="" />
                </div>
            </div>

            <div class="col-sm-9">
                <div class="product-details">
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img id="product-main-img" src="{{route('advertisement.image', 'add_'.$add->id.'_image_1.jpg')}}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">

                                    @foreach($add->images as $image)
                                        <img class="gallery-img" src="{{route('advertisement.image',$image->image_path)}}" alt="">



                                    @endforeach

                                </div>


                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

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

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {
           $('.gallery-img').on('click',function (e) {
             var addr = $(this).attr('src');
             $('#product-main-img').attr('src', addr);
           });
        });
    </script>


</div>

@endsection