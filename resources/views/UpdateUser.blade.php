<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/user.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body style="background-color: #f9f9f9;">

{{--<div class="container" style="color: black;font-weight: bold">--}}
{{--<h2> Users </h2>--}}
{{----}}
{{--{{ Form::model($product, ['method' => 'PUT', 'route' => ['user.update',$product->id]]) }}--}}
{{--{{Form::label('name','Name')}}--}}
{{--{{Form::text('name')}}--}}
{{--{{Form::label('email','Email')}}--}}
{{--{{Form::email('email')}}--}}
{{--{{Form::label('password','Password')}}--}}
{{--{{Form::password('password')}}--}}
{{--{{Form::submit('Update')}}--}}
{{--{{ Form::close() }}--}}
{{--</div>--}}

<div class="container">
    <div class="row text-center">
        <h2 style="color: #238c59; font-weight: bold;padding: 10px;">Update User</h2>
    </div>

    {{ Form::model($user, ['method' => 'PUT', 'route' => ['user.update',$user->id]]) }}
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-12 card" style="background-color: #ffffff;">
            <div class="row">
                <div class="input-field col s12" style="margin-top: 30px;">
                    <input name="name" style="font-size: 14px;" value="{{$user->name}}"
                           id="name" type="text"
                           class="validate">
                    <label for="name" style="color: #238c59 !important; font-size: 14px;">Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" style="color: #040404; font-size: 14px;" value="{{$user->email}}"
                           id="email" type="email"
                           class="validate">
                    <label for="email" style="color: #238c59;font-size: 14px;">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="col s2">
                    <button type="submit" class="btn btn-success"><span class="text-capitalize"
                                                                                           style="font-weight: bold;">Update</span>
                    </button>
                    <a href="/Admin">
                        <button type="button" class="btn btn-danger"><span class="text-capitalize"
                                                                           style="font-weight: bold;">Cancel</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--{{Form::label('name','Name')}}--}}
    {{--{{Form::text('name')}}--}}
    {{--{{Form::label('email','Email')}}--}}
    {{--{{Form::email('email')}}--}}
    {{--{{Form::label('password','Password')}}--}}
    {{--{{Form::password('password')}}--}}
    {{--{{Form::submit('Update')}}--}}
    {{----}}
    {{ Form::close() }}

</div>

</body>
</html>
