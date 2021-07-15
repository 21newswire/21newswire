@extends('Front-end.layout')
@section('title', '21NewsWire - Contact us')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <style>

.error {
    color: red;
    border-color: red;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -10px;
}

.col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
}

.col-25,.col-50,.col-75 {
    padding: 0 16px;
}

.container-checkout {
    background-color: #FFFFFF;
    padding: 60px 18px 13px 18px;
    border-radius: 3px;
}
.container-check {
    background-color: #FFFFFF;
    padding: 60px 18px 13px 18px;
}


input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid rgb(230 230 230);
    border-radius: 10px;
}
.cart-class {
    background-color: #FFFFFF;
    padding: 60px 18px 13px 18px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.btn {
    background-color: #106eea;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    float: right;
    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

}

.btn:hover {
    background-color: #647bff;
    color:white;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns 
    stack on top of each other instead of next to each other (also change the direction 
    - make the "cart" column go on top) 
*/
@media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
}
    </style>
<div class="row">
    <div class="col-75">
        <div class="container-check">
            <form id="validate" method="post" action="{{ route('stripe.post') }}">
            @csrf
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Soeng.Souy" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="soeng.souy@gmail.com" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="110 W. 15th Phnom Penh" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Phnom Penh" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Phnom Penh"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="12000"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="Soeng Souy"required>
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September"required>
                        <input type="hidden" value="1000" name="price">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2021"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352"required>
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <input type="hidden" name="totalPrice" value="{{$total_price}}"> 
                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Place Order" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25 cart-class">
        <div class="container">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{count($cart)}}</b></span></h4>
            @foreach($cart as $key => $cartData)
            <p><a href="#">{{$cartData['package']}}</a> <span class="price">$ {{$cartData['price']}}</span></p>
            @endforeach
            <hr>
            <p>Total <span class="price" style="color:black"><b>$ {{$total_price}}</b></span></p>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
@stop
