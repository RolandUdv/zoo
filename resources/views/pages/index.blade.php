@extends('layouts.app')

@section('content')

{{-- <h1 class="invisible">{{$title}}</h1> --}}
@if (!Auth::guest()) 
<h1>Welcome back {{auth()->user()->name}}!</h1>
@else
<h1>{{$title}}</h1>
@endif
{{-- $title = 'Welcome to Claybrooks Zoo!'; --}}
<div class="home-widgets">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        {{-- Images from source: https://covers.alphacoders.com/ --}}

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="8000">
                    <img src="https://coverfiles.alphacoders.com/139/139760.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Did you know?</h5>
                        <p>We are the best rated Zoo in the whole United Kingdom.</p>
                    </div>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="https://coverfiles.alphacoders.com/139/139906.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>More than 50 animals to visit</h5>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    </div>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <img src="https://coverfiles.alphacoders.com/502/50246.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Book today in just 3 clicks</h5>
                        <p>Booking is simple and allows you to plan ahead.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{-- Highlihgted pages --}}
        <div class="home-widgets">
            <div class="container text-center">
                
                <div class="row bg-white" style="border-radius: 20px;">
                    <div class="col-sm-4 bg-white" style="border-radius: 20px;">
                        <div class="container card" style="width: 18rem;">
                            <h4 class="text-uppercase home-widgets-heading text-white">book tickets</h4>
                            <img class="card-img-top" src="https://docs.devexpress.com/AspNetBootstrap/images/bootstrapcalendar_overview126844.png" alt="image1">
                        </div>
                    </div>
                    <div class="col-sm-4 bg-white" style="border-radius: 20px;">
                        <div class="container card" style="width: 18rem;">
                            <h4 class="text-uppercase home-widgets-heading text-white">information</h4>
                            <img class="card-img-top" src="https://media-cdn.tripadvisor.com/media/photo-s/0b/64/0a/37/tiger-kingdom-chiang.jpg" alt="image1">
                            <div class="card-body">
                                <p class="card-text text-capitalize">
                                    <h4>Daily Events</h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 bg-white" style="border-radius: 20px;">
                        <div class="container card" style="width: 18rem;">
                            <h4 class="text-uppercase text-white hwha">annual pass</h4>
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Lion_waiting_in_Namibia.jpg/1200px-Lion_waiting_in_Namibia.jpg" alt="image1">
                            <div class="card-body">
                                <p class="card-text text-capitalize">
                                    {{-- <div id="circle"></div> --}}
                                    <h4>Unlimited annual visits</h4>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    {{-- Ratings - Reviews --}}
    <div class="home-widgets">
        <div class="container text-center">
            <h3 class="text-white home-widgets-heading" style="padding: 5em;">Reviews from visitors</h3>
            <div class="row bg-white" style="border-radius: 20px;">
                <div class="container text-center bg-white" style="border-radius: 20px; padding-bottom: 10px;">
                <h4 class="text-center font-weight-bold">Ratings {{ number_format($avgrating,1)}} / 5 ⭐️</h4> <!-- formats output to 1 decimal -->
                    <small>({{$ratingcount}} reviews)</small>
                </div>
                @foreach ($reviews as $review)
                <div class="col-sm-4 bg-white" style="border-radius: 20px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png"
                        alt="..." style="border-radius: 50%; height: 100px; margin-bottom: 10px;">
                    <h5 class="font-weight-bold">{{str_limit($review->username, 8, '...')}}</h5>
                    <p>{{str_limit($review->description, 250, '...')}}</p>
                    <p>{{$review->rating}}⭐️ - {{$review->created_at->todatestring()}}</p>
                </div>
                @endforeach
            </div>
            <div class="d-flex">
                <div class="mx-auto" style="padding-top: 10px;">{{$reviews->links()}}</div>
            </div>
        </div>
    </div>

    <div class="container">
        @include('reviews.create')
        <!-- Inserts "Post a Review" field -->
    </div>


    {{-- Map --}}
    <div class="home-widgets">
        <div class="container text-center">
            <h3 class="text-white home-widgets-heading">Zoo Map</h3>
            <img src="../resources/img/zoo-map.bmp" class="img-fluid" alt="news-cover-image" style="max-height: 700px;">
            <br>
            <br>
            <a href="../resources/img/zoo-map.bmp" class="btn text-white" style="background-color: #014e2e;">
                <i class="fas fa-image" aria-hidden="true"></i>
                See Full Resolution Image
            </a>
            <a href="../resources/img/zoo-map.bmp" class="btn text-white" style="background-color: #e29c1b;" download>
                <i class="fas fa-download"></i>
                Download Map
            </a>
        </div>
    </div>





<div class="home-widgets" style="border-radius: 20px; background: #BBD600!important;">
    <div class="container text-center">
        {{-- <h3 class="text-white home-widgets-heading">Stay in touch</h3> --}}

        <div class="row zoo-light-green" style="border-radius: 20px; ">
            <div class="col-sm-6" style="border-radius: 20px; padding: 3em;">
                <h1 class="text-uppercase font-weight-bold text-dark text-center" style="font-size: 52px; font-weight: 900;">Subscribe</h1>
                <h4 class="text-center text-dark" style="font-size: 36px;">to our Newsletter</h4>
            </div>

            <div class="col-sm-6" style="border-radius: 20px; padding: 3em;">
                <div class="form-group row justify-content-center">

                    <input type="email text-center" class="form-control" id="inputEmail3" placeholder="Email Address"
                        style="width: 70%;">
                </div>

                <div class="form-check justify-content-center">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <small class="form-check-label" for="gridCheck1">
                        I have read and agreed to the Privacy Policy and Terms and Conditions.
                    </small>
                    <br>
                    <br>
                    <button type="submit" class="btn text-white"
                        style="background: #014e2e !important;">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>


    {{-- @if(count($categories) > 0)
        <ul>
        @foreach ($categories as $category)
            <li>{{$category}}</li>
    @endforeach
    </ul>
    @endif --}}



@endsection
