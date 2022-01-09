@extends('layouts.master')
@section('title', 'About Us')

@section('styles')
@endsection
@section('content')


    <div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(html/the-zayka/images/bg/03.jpg);">
        <div class="container">
            <div class="row text-center intro-title">
                <div class="col-md-12">
                    <h1 class="text-orange">Category name</h1>
                    <p class="text-white mb-0">Products</p>
                    <ul class="page-breadcrumb">
                        {{--                    <li><a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>--}}
                        {{--                    <li><a href="">pages</a> <i class="fa fa-angle-double-right"></i></li>--}}
                        {{--                    <li><span>about us</span></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="blog blog-page page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <section class="blog blog-page masonry-main page-section-ptb">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 mr-5">
                                    <div class="masonry columns-2">

                                        <div class="masonry-item clearfix">
                                            <div  class="blog-entry">
                                                <div class="blog-entry-image">
                                                    <img  style="width: 100%; height: 100%; object-fit: contain" alt="" src="{{asset('assets/images/categorybg1.jpg')}}">
                                                </div>
                                                <div style=" border: 1px; border-style: solid; border-color: #e5e5e5" class="entry-content border ">
                                                    <div class="entry-title">
                                                        <h3><a href="html/the-zayka/blog-single-01.html">Dealing with Fomo</a></h3>
                                                    </div>
{{--                                                    <div class="entry-description">--}}
{{--                                                        <p>200 Rs</p>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="masonry-item clearfix">
                                            <div  class="blog-entry">
                                                <div class="blog-entry-image">
                                                    <img  style="width: 100%; height: 100%; object-fit: contain" alt="" src="{{asset('assets/images/categorybg1.jpg')}}">
                                                </div>
                                                <div style=" border: 1px; border-style: solid; border-color: #e5e5e5" class="entry-content border ">
                                                    <div class="entry-title">
                                                        <h3><a href="html/the-zayka/blog-single-01.html">Dealing with Fomo</a></h3>
                                                    </div>
{{--                                                    <div class="entry-description">--}}
{{--                                                        <p>200 Rs</p>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget">
                            <h4>categories</h4>
                            <div class="widget-link">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> Fast food </a></li>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> Floating restaurant </a></li>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> Food truck</a></li>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> Bar </a></li>
                                    <li><a href="#"> <i class="fa fa-angle-right"></i> Diner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

