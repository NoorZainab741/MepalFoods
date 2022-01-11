<footer class="footer" style="background-image: url({{asset('html/the-zayka/images/bg/01.jpg')}});">
    <div class="object-bottom">
        <!-- <div class="object-left">
          <img class="img-responsive bottom" src="html/the-zayka/images/object/06.png" alt="">
        </div> -->
        <div class="object-right">
            <img  class="img-responsive bottom" src="{{asset('html/the-zayka/images/object/16.png')}}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center mt-60">
{{--                <div class="footer-logo">--}}
                    <img id="logo-footer" class="img-responive" src="{{asset('assets/images/logo/logo.png')}}" alt="">
{{--                </div>--}}

                <div class="col-lg-8 col-lg-offset-2">
                    <img style="width: 25%; " id="logo-footer" class="img-responive" src="{{asset('assets/images/logo/logo.png')}}" alt="">

                    <p class=" text-white mb-60">We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="newsletter">
                <h4 class="text-white mb-30">Newsletter</h4>
                <p class="text-white">Signing up to our newsletter keeps you up-to-date!</p>
                <div class="newsletter-input">
                  <input type="email" placeholder="Your email*" name="email">
                  <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="tweet">
                <h4 class="text-white mb-30">Latest tweet</h4>
                <div class="tweet-block mb-20">
                  <div class="icon">
                    <i class="fa fa-twitter text-white"></i>
                  </div>
                  <div class="content">
                    <p class="text-white">Our brand new has just launched! </p>
                    <span class="text-orange">03:05 AM Sep 18th</span>
                  </div>
                </div>
                <div class="tweet-block">
                  <div class="icon">
                    <i class="fa fa-twitter text-white"></i>
                  </div>
                  <div class="content">
                    <p class="text-white">Get your photo on win prizes. </p>
                    <span class="text-orange">03:05 AM Sep 18th</span>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="opening-time">
                    <h4 class="text-white mb-30">Quick links</h4>
                    <ul>
                        <li><a href="{{route('aboutus')}}" style="color: #f1f1f1;">About Us</a></li>
                        <li><a href="{{route('contactus')}}" style="color: #f1f1f1;">Contact Us</a></li>
                        @forelse(_getAllCategories() as $category)
                            <li><a href="{{route('productsbycategory', ['id' => $category->id])}}" style="color: #f1f1f1;">{{ucwords($category->name)}}</a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="contact">
                    <h4 class="text-white mb-30">Contact</h4>
                    <p class="text-white">1234 North Avenue Luke, IN 360001</p>
                    <p class="text-white">+ 92 335 0557570</p>
                    <p class="text-white">support@website.com</p>
                    <!-- <a class="text-orange" href="#"><i class="fa fa-map-o pr-10"></i> Find us here</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="co-lg-12 co-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="footer-social">
                        <ul class="list-inline">
                            <li><a href="#" data-tooltip="facebook"> <i class="fa fa-facebook"></i> </a> </li>
                            <li><a href="#" data-tooltip="twitter"> <i class="fa fa-twitter"></i> </a> </li>
                            <li><a href="#" data-tooltip="google-plus"> <i class="fa fa-google-plus"></i> </a> </li>
                            <li><a href="#" data-tooltip="instagram"> <i class="fa fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-to-top">
    <a class="top arrow" href="#top"><i class="fa fa-long-arrow-up"></i></a>
</div>
