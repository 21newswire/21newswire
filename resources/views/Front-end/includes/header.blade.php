<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><img src=""> <a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('front-end.home')}}"  class="logo-old"><img style="width: 60px;" src="{{asset('assets/img/logo.png')}}" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{Request::url() === route('front-end.home') ? 'active' : ''}}" href="{{route('front-end.home')}}">Home</a></li>
          <li><a class="nav-link scrollto {{Request::url() === route('front-end.introduction') ? 'active' : ''}}" href="{{route('front-end.introduction')}}">Introduction</a></li>
          <li class="dropdown"><a href="#" class="{{ request()->is('product/*') ? 'active' : '' }}"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Generic PR</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('front-end.product-detail',1)}}">Finance</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Energy</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Medical</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">It</a></li>
                </ul>
              </li>
              <li><a href="{{route('front-end.product-detail',1)}}">Real Estate PR</a></li>
              <li><a href="{{route('front-end.product-detail',1)}}">Guest Posting</a></li>
              <li class="dropdown"><a href="#"><span>Legal PR</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('front-end.product-detail',1)}}">Law Suit</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Development</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('front-end.product-detail',1)}}">Website Development</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Custom Software</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Wordpress/Ecommerece</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">App Development</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Marketing</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('front-end.product-detail',1)}}">Digital Marketing</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Search Engine Optimization (SEO)</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Pay Per Click</a></li>
                  <li><a href="{{route('front-end.product-detail',1)}}">Google Adverts</a></li>
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">News Room</a></li>
          <li><a class="nav-link scrollto {{Request::url() === route('front-end.pricing') ? 'active' : ''}}" href="{{route('front-end.pricing')}}">Pricing</a></li>
          <li><a class="nav-link scrollto {{Request::url() === route('front-end.about') ? 'active' : ''}}" href="{{route('front-end.about')}}">About</a></li>
          <li><a class="nav-link scrollto {{Request::url() === route('front-end.contact-us') ? 'active' : ''}}" href="{{route('front-end.contact-us')}}">Contact</a></li>
          @guest
            @if (Route::has('login'))
              <li><a class="nav-link scrollto {{Request::url() === route('login') ? 'active' : ''}}" href="{{route('login')}}">Login</a></li>
            @endif
            @if (Route::has('register'))
              <li><a class="nav-link scrollto {{Request::url() === route('register') ? 'active' : ''}}" href="{{route('register')}}">Register</a></li>
            @endif
            @else
            <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
              
              <?php
              $cart = session()->get('product-cart');
              if(empty($cart)){
                $cart =  'empty';
              }
              ?>
              @if(request()->is('product/*'))
                @if($cart !== 'empty')
                <li><a class="nav-link scrollto" href="#" onclick="openCart(true)"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> <span id="CartCount" style="font-size: 12px; float: right; margin-top: -28px; font-weight: 900;">{{count($cart)}}</span></li>
                @endif
              @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <script>
function openCart(bool)
{
  var cart = document.getElementsByClassName('js-cd-cart');
  var cartIsOpen = ( typeof bool === false ) ? Util.hasClass(cart[0], 'cd-cart--open') : bool;
    if( cartIsOpen ) {
      Util.removeClass(cart[0], 'cd-cart--empty');

      } 
}
  </script>