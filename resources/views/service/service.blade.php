@extends('main.layouts.app')
@section('title','Habaraduwa-PS-User-Page')
@section('content')
<div class="page">
    <div id="breadcrumb-section" class="section">
        <div class="container">
            <div class="page-title text-center">
                <h1>Service Section</h1>
            </div>
        </div>
    </div><!-- breadcrumb-section -->

    <div class="all-categories section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="category-adds">
                        <div id="category-tab">
                            <div class="category-tab">
                                <!-- Tab panes -->
                                <div class="tab-content small-view-tab">
                                    <div role="tabpanel" class="tab-pane active" id="recent">
                                        <ul>
                                         <h3>Service Section</h3>   
                                        </ul>
                                    </div> <!--tab-pane-->
                                </div>
                            </div>
                        </div><!-- category-tab-->	
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <div class="filter-list">
                            <div class="tab-view">
                                <ul class="list-inline">
                                    <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                    <li class="small-view-tab active"><i class="fa fa-th" aria-hidden="true"></i></li>
                                    <li class="list-view-tab"><i class="fa fa-th-list" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div><!-- filter-list -->
                        <br>
                        <br>
                        <br>
                        <div class="filter-list">
                            <h4 class="list-title"><a href="categories.html">Categories</a></h4>
                            <ul class="list-group">
                                {{-- @foreach($category as $cat)
                                <li><a href="{{ route('categories',$cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach --}}
                            </ul>
                        </div><!-- filter-list -->

                        <div class="widget tags">
                            <h2 class="widget-title">Tags</h2>
                            <div class="widget-content">
                                {{-- @foreach($tag as $tg)
                                <a href="{{ route('tags',$tg->slug) }}">{{ $tg->name }}</a>
                                @endforeach --}}
                            </div>
                        </div><!-- widget -->

                    </div><!-- sidebar -->
                </div><!-- col-sm-4 -->
            </div>
        </div>
    </div> <!-- all-categories -->
</div>	<!-- page -->
@endsection