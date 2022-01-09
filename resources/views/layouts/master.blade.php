<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.partials.head')

    <title>@yield('title') | Mepal Food & Bakers</title>
    @include('includes.partials.styles')
</head>
<body>
<!-- Loader starts-->
<!-- <div class="loader-wrapper">
  <div class="loader bg-white">
    <div class="whirly-loader"> </div>
  </div>
</div> -->
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
@include('includes.partials.header')

<!-- Page Body Start-->
    <div class="page-body-wrapper">
{{--        @include('includes.partials.sidebar')--}}
        <div class="page-body">
            @yield('content')
        </div>
        @include('includes.partials.footer')
    </div>
</div>
@include('includes.partials.scripts')
</body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-557RCPW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--=================================
loading -->
 <div id="loading">
  <div id="loading-center">
    <img src="html/the-zayka/images/loader.gif" alt="">
  </div>
</div>
</html>
