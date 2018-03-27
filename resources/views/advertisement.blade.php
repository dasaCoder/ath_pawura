@extends ('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-7 col-xs-6">

            <h3>
                {{$add->title}}
            </h3>
            <button class="btn btn-primary">
                edit
            </button>
            <div class="row">

                <div class="col-lg-4">
                    <img src="http://via.placeholder.com/100x100" alt="">
                </div>
                <div class="col-lg-8">
                    <div>
                        {{$add->price}}
                    </div>
                    <div>
                        {{$add->type}}
                    </div>
                </div>

                <div>
                    {{$add->description}}
                </div>

            </div>

        </div>

    </div>





    {{$add->description}}




@endsection