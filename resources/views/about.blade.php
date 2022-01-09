@extends('layouts.master')
@section('title', 'About Us')

@section('styles')
@endsection
@section('content')


<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(html/the-zayka/images/bg/03.jpg);">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-12">
                <h1 class="text-orange">About us</h1>
                <p class="text-white mb-0">We Know The Secret Of Your Success</p>
                <ul class="page-breadcrumb">
{{--                    <li><a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>--}}
{{--                    <li><a href="">pages</a> <i class="fa fa-angle-double-right"></i></li>--}}
{{--                    <li><span>about us</span></li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=================================
 intro bg -->
<!--=================================
 about -->
        <section class="about white-bg page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img style="width: 65%;" class="img-fluid center-block" src="{{asset('assets/images/logo/logo.png')}}" alt="">
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="custom-content">
                            <h2><span class="text-orange mb-20">WHO WE ARE </span> &amp; HISTORY</h2>
                            <p>Consectetur adipisicing elit lorem ipsum dolor sit amet. <span class="tooltip-content-2" data-bs-placement="top" data-bs-toggle="tooltip" title="Sed hendrerit enim non justo">Vero quod conseqt</span> quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>
                            <p>Aperiam fugiat lorem ipsum dolor sit amet, <span class="tooltip-content-2" data-placement="top" data-toggle="tooltip" data-original-title="Sed hendrerit enim non justo">consectetur adipisicing </span>elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum eserunt velit rerum laudantium cum magnam.</p>
                            <ul>
                                <li><i class="fa fa-hand-o-right"></i> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, </li>
                                <li><i class="fa fa-hand-o-right"></i> lorem quis bibendum auctor, nisi elit consequat ipsum, </li>
                                <li><i class="fa fa-hand-o-right"></i> nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate  </li>
                                <li><i class="fa fa-hand-o-right"></i> cursus a sit amet mauris. Morbi accumsan ipsum velit. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
