@extends('main.layouts.app')
@section('title','Habaraduwa-Pradeshiya-Sabhawa-Homepage')
@section('content')

<div class="home-page">

    <div id="home-section" class="parallax-section carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image:url(images/backgrounds/back1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Excellent Service</h2>
                                <p data-animation="animated lightSpeedIn">Customer satisfaction is our main responsibility.....</p>
                                <div class="ad-btn">
                                    <a href="/contact" class="btn btn-primary" data-animation="animated lightSpeedIn">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->

            <div class="item" style="background-image:url(images/backgrounds/back2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Excellent Service</h2>
                                <p data-animation="animated lightSpeedIn">Customer satisfaction is our main responsibility.....</p>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->
            <div class="item" style="background-image:url(images/backgrounds/back3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Excellent Service</h2>
                                <p data-animation="animated lightSpeedIn">Customer satisfaction is our main responsibility.....</p>
                                
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->
        </div>
        <a class="left carousel-control" href="#home-section" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
            <a class="right carousel-control" href="#home-section" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- #home-section -->

    <div id="inventory" name="inventory" class="section">
        <div class="container">
            <div class="section-title">
                <div class="title-content">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="category-adds">
                <div id="category-tab">
                    <div class="tab-view">
                        <ul class="list-inline">
                            <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                            <li class="small-view-tab"><i class="fa fa-th" aria-hidden="true"></i></li>
                            <li class="list-view-tab active"><i class="fa fa-th-list" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                    <div class="category-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            {{-- <li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li>
                            <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li> --}}
                        </ul>
                        <div class="tab-content list-view-tab">
                            <div role="tabpanel" class="tab-pane active" id="popular">
                                {{-- <ul>
                                    @foreach($cars as $car)
                                        <li class="item-wrap">
                                            <div class="item">
                                                <div class="item-image">
                                                    <a href="{{ route('cars',$car->slug) }}"><img src="{{ asset('images/cars/front/' . $car->image2) }}" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="item-description">
                                                    <div class="item-meta">
                                                        <div class="item-post-date">
                                                            <span>{{ $car->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <ul class="list-inline product-social">
                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-title">
                                                        <h3><a href="{{ route('cars',$car->slug) }}"><b>{{ $car->title }}</b></a></h3>
                                                    </div>
                                                    <div class="item-info">
                                                        <p>{{ $car->subtitle }}</p>
                                                    </div>
                                                    <div class="item-info">
                                                        <p>{!! htmlspecialchars_decode(str_limit($car->body, $limit = 40, $end = '...')) !!}</p>
                                                    </div>
                                                </div><!-- item-description -->
                                            </div><!-- item -->
                                        </li><!-- item-wrap -->
                                    @endforeach
                                </ul> --}}
                            </div> <!--tab-pane-->
                        </div>
                    </div>
                </div><!-- category-tab-->	
            </div>
        </div>
    </div><!-- category-tab-->	
</div><!-- .home-page -->
@endsection