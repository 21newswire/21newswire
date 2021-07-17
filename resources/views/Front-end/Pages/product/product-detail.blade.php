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
    (function(){
    // Add to Cart Interaction - by CodyHouse.co
    var cart = document.getElementsByClassName('js-cd-cart');
    if(cart.length > 0) {
        var cartAddBtns = document.getElementsByClassName('js-cd-add-to-cart'),
            cartBody = cart[0].getElementsByClassName('cd-cart__body')[0],
            cartList = cartBody.getElementsByTagName('ul')[0],
            cartListItems = cartList.getElementsByClassName('cd-cart__product'),
            cartTotal = cart[0].getElementsByClassName('cd-cart__checkout')[0].getElementsByTagName('span')[0],
            cartCount = cart[0].getElementsByClassName('cd-cart__count')[0],
            cartCountItems = cartCount.getElementsByTagName('li'),
            cartUndo = cart[0].getElementsByClassName('cd-cart__undo')[0],
            productId = 0, //this is a placeholder -> use your real product ids instead
          price = 0,
          product_name = '',
            cartTimeoutId = false,
            animatingQuantity = false;
          initCartEvents();
  
  
          function initCartEvents() {
              // add products to cart
              for(var i = 0; i < cartAddBtns.length; i++) {(function(i){
                  cartAddBtns[i].addEventListener('click', addToCart);
              })(i);}
  
              // open/close cart
              cart[0].getElementsByClassName('cd-cart__trigger')[0].addEventListener('click', function(event){
                  event.preventDefault();
                  toggleCart();
              });
              
              cart[0].addEventListener('click', function(event) {
                  if(event.target == cart[0]) { // close cart when clicking on bg layer
                      toggleCart(true);
                  } else if (event.target.closest('.cd-cart__delete-item')) { // remove product from cart
                      event.preventDefault();
                      removeProduct(event.target.closest('.cd-cart__product'));
                  }
              });
  
              // update product quantity inside cart
              cart[0].addEventListener('change', function(event) {
                  if(event.target.tagName.toLowerCase() == 'select') quickUpdateCart();
              });
  
              //reinsert product deleted from the cart
              cartUndo.addEventListener('click', function(event) {
                  if(event.target.tagName.toLowerCase() == 'a') {
                      event.preventDefault();
                      if(cartTimeoutId) clearInterval(cartTimeoutId);
                      // reinsert deleted product
                      var deletedProduct = cartList.getElementsByClassName('cd-cart__product--deleted')[0];
                      Util.addClass(deletedProduct, 'cd-cart__product--undo');
                      deletedProduct.addEventListener('animationend', function cb(){
                          deletedProduct.removeEventListener('animationend', cb);
                          Util.removeClass(deletedProduct, 'cd-cart__product--deleted cd-cart__product--undo');
                          deletedProduct.removeAttribute('style');
                          quickUpdateCart();
                      });
                      Util.removeClass(cartUndo, 'cd-cart__undo--visible');
                  }
              });
          };
  
          function addToCart(event) {
              event.preventDefault();
              if(animatingQuantity) return;
              var cartIsEmpty = Util.hasClass(cart[0], 'cd-cart--empty');
              //update cart product list
              addProduct(this);
              //update number of items 
              updateCartCount(cartIsEmpty);
              //update total price
              updateCartTotal(this.getAttribute('data-price'), true);
              //show cart
              Util.removeClass(cart[0], 'cd-cart--empty');
          };
  
          function toggleCart(bool) { // toggle cart visibility
              var cartIsOpen = ( typeof bool === 'undefined' ) ? Util.hasClass(cart[0], 'cd-cart--open') : bool;
          
              if( cartIsOpen ) {
                  Util.removeClass(cart[0], 'cd-cart--open');
                  //reset undo
                  if(cartTimeoutId) clearInterval(cartTimeoutId);
                  Util.removeClass(cartUndo, 'cd-cart__undo--visible');
                  removePreviousProduct(); // if a product was deleted, remove it definitively from the cart
  
                  setTimeout(function(){
                      cartBody.scrollTop = 0;
                      //check if cart empty to hide it
                      if( Number(cartCountItems[0].innerText) == 0) Util.addClass(cart[0], 'cd-cart--empty');
                  }, 500);
              } else {
                  Util.addClass(cart[0], 'cd-cart--open');
              }
          };
  
          function addProduct(target) {
              // this is just a product placeholder
              // you should insert an item with the selected product info
              // replace productId, productName, price and url with your real product info
              // you should also check if the product was already in the cart -> if it is, just update the quantity
              productId = productId + 1;
              price = target.getAttribute('data-price');
              if(price == 250)
              {
                  product_name = 'Basic';
              }
              else if(price == 350)
              {
                  product_name = 'Enhanced';
              }
              else
              {
                  product_name = 'Super Premium';
              }
              $.ajax({
                  url: "/addToCart",
                  type:"POST",
                  data:{
                      package:product_name,price:price,
                      _token: "{{ csrf_token() }}",
                  },
                  success:function(response){
                      console.log(response);
                      var cart_data = '<input type="hidden" name="cart['+product_name+']" value="'+product_name+'_'+price+'">';
                      document.getElementById("cd-cart-data").innerHTML += cart_data;
                      var productAdded = '<li class="cd-cart__product" id="'+response+'"><div class="cd-cart__details"><h3 class="truncate"><a href="#0">'+product_name+'</a></h3><span class="cd-cart__price">'+price+'</span><div class="cd-cart__actions"><a href="#0" class="cd-cart__delete-item">Delete</a><div class="cd-cart__quantity"><label for="cd-product-'+ productId +'">Qty</label><span class="cd-cart__select"><select class="reset" id="cd-product-'+ productId +'" name="quantity"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select><svg class="icon" viewBox="0 0 12 12"><polyline fill="none" stroke="currentColor" points="2,4 6,8 10,4 "/></svg></span></div></div></div></li>';
                      cartList.insertAdjacentHTML('beforeend', productAdded);
                  },
              });
              
  
              
          };
  
          function removeProduct(product) {
              console.log(product.id)
              if(cartTimeoutId) clearInterval(cartTimeoutId);
              removePreviousProduct(); // prduct previously deleted -> definitively remove it from the cart
              
              var topPosition = product.offsetTop,
                  productQuantity = Number(product.getElementsByTagName('select')[0].value),
                  productTotPrice = Number((product.getElementsByClassName('cd-cart__price')[0].innerText).replace('$', '')) * productQuantity;
  
              product.style.top = topPosition+'px';
              Util.addClass(product, 'cd-cart__product--deleted');
  
              //update items count + total price
              updateCartTotal(productTotPrice, false);
              updateCartCount(true, -productQuantity);
              Util.addClass(cartUndo, 'cd-cart__undo--visible');
  
              //wait 8sec before completely remove the item
              cartTimeoutId = setTimeout(function(){
                  Util.removeClass(cartUndo, 'cd-cart__undo--visible');
                  removePreviousProduct();
              }, 8000);
              $.ajax({
                  url: "/removeFromCart",
                  type:"POST",
                  data:{
                      product_id:product.id,
                      _token: "{{ csrf_token() }}",
                  },
                  success:function(response){
                  },
              });
          };
  
          function removePreviousProduct() { // definitively removed a product from the cart (undo not possible anymore)
              var deletedProduct = cartList.getElementsByClassName('cd-cart__product--deleted');
              if(deletedProduct.length > 0 ) deletedProduct[0].remove();
          };
  
          function updateCartCount(emptyCart, quantity) {
              if( typeof quantity === 'undefined' ) {
                  var actual = Number(cartCountItems[0].innerText) + 1;
                  var next = actual + 1;
                  
                  if( emptyCart ) {
                      cartCountItems[0].innerText = actual;
                      cartCountItems[1].innerText = next;
                      animatingQuantity = false;
                  } else {
                      Util.addClass(cartCount, 'cd-cart__count--update');
  
                      setTimeout(function() {
                          cartCountItems[0].innerText = actual;
                      }, 150);
  
                      setTimeout(function() {
                          Util.removeClass(cartCount, 'cd-cart__count--update');
                      }, 200);
  
                      setTimeout(function() {
                          cartCountItems[1].innerText = next;
                          animatingQuantity = false;
                      }, 230);
                  }
              } else {
                  var actual = Number(cartCountItems[0].innerText) + quantity;
                  var next = actual + 1;
                  
                  cartCountItems[0].innerText = actual;
                  cartCountItems[1].innerText = next;
                  animatingQuantity = false;
              }
          };
  
          function updateCartTotal(price, bool) {
              // cartTotal.innerText = bool ? (Number(cartTotal.innerText) + Number(price)).toFixed(2) : (Number(cartTotal.innerText) - Number(price)).toFixed(2);
          };
  
          function quickUpdateCart() {
              var quantity = 0;
              var price = 0;
  
              for(var i = 0; i < cartListItems.length; i++) {
                  if( !Util.hasClass(cartListItems[i], 'cd-cart__product--deleted') ) {
                      var singleQuantity = Number(cartListItems[i].getElementsByTagName('select')[0].value);
                      quantity = quantity + singleQuantity;
                      price = price + singleQuantity*Number((cartListItems[i].getElementsByClassName('cd-cart__price')[0].innerText).replace('$', ''));
                  }
              }
  
              cartTotal.innerText = price.toFixed(2);
              cartCountItems[0].innerText = quantity;
              cartCountItems[1].innerText = quantity+1;
          };
    }
  })();
</script>

    @stop