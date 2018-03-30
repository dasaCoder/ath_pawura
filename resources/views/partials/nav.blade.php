@section('nav')

{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        --}}{{--<ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>--}}{{--



        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav navbar-right mr-auto">
            <button onclick="location.href = '{{route('create_add')}}';" class="ath-btn">Advertise</button>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>


            <!-- Authentication Links -->
            @guest
                <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown nav-item">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} </span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a href="{{'profile'}}">Profile</a>
                        </li>

                        <li class="dropdown-item">
                            <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>--}}

<header id="header" style="background-color: #f9f9f9"><!--header-->



    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="images/home/logo.png" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="mainmenu nav navbar-nav collapse navbar-collapse">
                            {{--<button onclick="location.href = '{{route('create_add')}}';" class="ath-btn">Advertise</button>--}}

                            <li class=""><a href="{{route('create_add')}}"><i class="fa fa-crosshairs"></i> Advertise</a></li>


                            @guest
                                <li class=""><a href="{{ route('login') }}"><i class="fa fa-lock"></i>Login</a></li>
                                <li class=""><a href="{{ route('register') }}">Register</a></li>
                            @else

                                    <li class="dropdown"><a href="#"> {{ Auth::user()->name }}<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="{{route('profile')}}"><i class="fa fa-user"></i>Profile</a></li>
                                            <br>
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                                >logout

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>

                                                </a>

                                            </li>

                                        </ul>
                                    </li>



                                @endguest

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">Home</a></li>

                            {{--<li class="dropdown"><a href="#">Invents<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>--}}

                            <li><a href="{{route('about')}}">About us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="{{route('search')}}" method="post">
                            {{csrf_field()}}
                            <input name="phase" type="text" placeholder="Search"/>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


@endsection