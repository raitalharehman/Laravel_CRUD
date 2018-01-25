<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/user.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <!-- Styles -->
    <style>

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>
<body style="background-color: #f9f9f9;">
{{--{{ Form::open(array('route' => 'user.store')) }}--}}
{{--{{Form::label('name','Name')}}--}}
{{--{{Form::text('name')}}--}}
{{--{{Form::label('email','Email')}}--}}
{{--{{Form::email('email')}}--}}
{{--{{Form::label('password','Password')}}--}}
{{--{{Form::password('password')}}--}}
{{--{{Form::submit('Add User')}}--}}
{{--{{ Form::close() }}--}}

<div class="container">
    <div class="row text-center">
        <h2 style="color: #238c59; font-weight: bold;padding: 10px;">Add New Product</h2>
    </div>

    {{ Form::open(array('route' => 'product.store')) }}

    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12 card" style="background-color: #ffffff;">
            <div class="row">
                <div class="input-field col s12" style="margin-top: 30px;">
                    <input name="product_name" style="font-size: 14px;color: #040404 !important;" placeholder="Pepsi" id="product_name" type="text"
                           class="validate">
                    <label for="product_name" style="color: #238c59 !important; font-size: 14px;">Product Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="price" style="color: #040404; font-size: 14px;" placeholder="400" id="email" type="number"
                           class="validate">
                    <label for="price" style="color: #238c59;font-size: 14px;">Product Price</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12" style="margin-top: 10px;">
                    <input name="shop_name" style="font-size: 14px;color: #040404 !important;" placeholder="Shop" id="shop_name" type="text"
                           class="validate">
                    <label for="shop_name" style="color: #238c59 !important; font-size: 14px;">Shop Name</label>
                </div>
            </div>


            <div class="row">
                <div class="col s4">
                    <button type="submit" href="/user.store" class="btn btn-success"><span class="text-capitalize" style="font-weight: bold;">Add Product</span>
                    </button>
                    <a href="/Admin">
                        <button type="button" class="btn btn-danger"><span class="text-capitalize" style="font-weight: bold;">Cancel</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
        {{ Form::close() }}



</div>
</body>
</html>
