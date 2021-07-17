@extends('Front-end.layout')
@section('title', '21NewsWire - Pricing')
@section('content')
<!-- ======= Pricing Section ======= -->
<script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="{{asset('assets/css/style-cart.css')}}">
<section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Press Release Distribution Packages</h3>
          <p>Offering the best Distribution through the best Products at the best Price!</p>
        </div>

        <div class="row">

        <div class="main">
    <table class="price-table">
        <tbody>
            <tr class="price-table-head">
                <td>
                    Features
                </td>
                <td>
                    Basic
                </td>
                <td>
                    Enhanced
                    <!-- <br><small style="font-size: 12px; font-weight: 400;">Longer data retention</small> -->
                </td>
                <td class="green-width">
                    Super Premium
                </td>
            </tr>
            <tr>
                <td>
                    Choose the package which suits you the best and leave the rest to us!
                </td>
                                <td class="price">
                                    $ 250
                                    <br>
                                    <a href="#0"  class="cd-add-to-cart js-cd-add-to-cart" data-price="250">Buy Now</a>
                                </td>
                                <td class="price">
                                    $ 350
                                    <br>
                                    <a href="#0"  class="cd-add-to-cart js-cd-add-to-cart" data-price="350">Buy Now</a>
                                </td>
                                <td class="price">
                                    $ 450
                                    <br>
                                    <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="450">Buy Now</a>
                                </td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/times_logo.png" alt="time logo"></td>
                <td>&#10060;</td>
                <td>&#10060;</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/wall_logo.png" alt="time logo"></td>
                <td>&#10060;</td>
                <td>&#10060;</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/bloom_logo.png" alt="time logo"></td>
                <td>&#10060;</td>
                <td>&#10060;</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/yahoo_logo.png" alt="time logo"></td>
                <td>&#10060;</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/market_logo.png" alt="time logo"></td>
                <td>&#10060;</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/g_logo.png" alt="time logo"></td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td><img class="tr-img" src="https://icrowdnewswire.com/wp-content/themes/icrowdnewswire/assets/images/single_page/f_logo.png" alt="time logo"></td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td colspan="5" class="sep">Press Release Distribution</td>
            </tr>
            <tr>
                <td>Distribution Channels</td>
                <td>375+</td>
                <td>375+</td>
                <td>375+</td>
            </tr>
            <tr>
                <td>Translations</td>
                <td>8 Languages</td>
                <td>8 Languages</td>
                <td>8 Languages</td>
            </tr>
            <tr>
                <td>Inclusion in Google & Apple News</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Crawler, Bot and Indexing Traffic</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Facebook & Google Ads</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Geographic and Demographic Targeting</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Ad Campaigns Keyword Selection</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Editorial Tools</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Inclusion in Super Premium Websites</td>
                <td>0</td>
                <td>2</td>
                <td>5</td>
            </tr>
            <tr>
                <td colspan="5" class="sep">Distribution Report</td>
            </tr>
            <tr>
                <td>Interim Distribution Report</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Master Distribution Report</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
        </tbody>
    </table>
</div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    <div class="cd-cart cd-cart--empty js-cd-cart">
	<a href="#0" class="cd-cart__trigger text-replace">
		Cart
		<ul class="cd-cart__count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .cd-cart__count -->
	</a>

	<div class="cd-cart__content">
		<div class="cd-cart__layout">
			<header class="cd-cart__header">
				<h2>Cart</h2>
				<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="cd-cart__body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
                    @if(isset($cart))
                    @foreach($cart as $key=> $value)
                    <li class="cd-cart__product" id="{{$key}}">
                        <div class="cd-cart__details">
                            <h3 class="truncate">
                                <a href="#0">{{$value['package']}}</a>
                            </h3>
                            <span class="cd-cart__price">{{str_replace('$','', $value['price'])}}</span>
                            <div class="cd-cart__actions">
                                <a href="#0" class="cd-cart__delete-item" >Delete</a>
                                <div class="cd-cart__quantity">
                                    <label for="cd-product-{{$key}}}">Qty</label>
                                    <span class="cd-cart__select">
                                        <select class="reset" id="cd-product-{{$key}}}" name="quantity">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                        <svg class="icon" viewBox="0 0 12 12"><polyline fill="none" stroke="currentColor" points="2,4 6,8 10,4 "/></svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
				</ul>
			</div>

			<footer class="cd-cart__footer">
            <form action="{{route('front-end.checkout')}}" method="post">
            @csrf        
            <div id="cd-cart-data">
                @if(isset($cart))
                    @foreach($cart as $key=> $value)
                    <input type="hidden" name="cart[{{$value['package']}}]" value="{{$value['package']}}_{{$value['price']}}">
                    @endforeach
                @endif
            </div>        
            <button type="submit" class="cd-cart__checkout">
          <em>Checkout 
            <svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
            </svg>
          </em>
</button>
                </form>
				
			</footer>
		</div>
	</div> <!-- .cd-cart__content -->
</div> 
    <script src="{{asset('assets/js/util-cart.js')}}"></script> <!-- util functions included in the CodyHouse framework -->
<script src="{{asset('assets/js/main-cart.js')}}"></script> 
<script>
</script>

    @stop