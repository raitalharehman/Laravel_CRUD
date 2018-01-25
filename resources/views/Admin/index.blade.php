<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @LaravelSweetAlertCSS

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/user.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


</head>
<body style="background-color: #073b57">

<div class="container">
    <div class="row text-center" style="margin-top: 20px;">
        <h2 style="color: #ffffff;font-weight: bold;">Admin Panel</h2>

        {{Form::open(array('url' => 'create')) }}
        {{Form::submit('Add New Product',array("class"=> "btn-add-user"))}}
        {{Form::close() }}

    </div>

    <div class="row text-left">
        <h3 style="color: #ffffff">User Info :</h3>
        <div class="pull-right">
            {{Form::open(array('url' => 'logout','method' => 'GET')) }}
            <button type="submit" class="btn-primary"
                    style="padding: 5px; background-color: #d43f3a;border: 1px solid #d43f3a">
                Log out
            </button>
            {{Form::close() }}
        </div>
    </div>

    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-responsive col-md-10 card"
               style="color:#000000;font-weight: bold;">
            <thead>
            <tr style="color: #238c59;font-weight: bold; font-size: 18px;">
                <th class="text-center">ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Created at:</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user_data as $users)
                <tr style="color: #000000; font-weight: bold">
                    <td class="text-center">{{$users -> id}}</td>
                    <td>{{$users -> name}}</td>
                    <td>{{$users -> email}}</td>
                    <td>{{$users -> created_at}}</td>
                    <td>
                        <a style="color: #ffffff; font-weight: bold;" href="/user/{{$users->id}}/edit/"
                           class="btn btn-primary"><span style="font-size: 14px;"
                                                         class="text-capitalize">Edit User</span></a>
                        <a style="color: #ffffff; font-weight: bold;" href="user/destroy/{{$users->id}}"
                           class="btn btn-danger"><span style="font-size: 14px;"
                                                        class="text-capitalize">Delete</span></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row text-left">
        <h3 style="color: #ffffff">Product Info :</h3>
    </div>


    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-responsive col-md-10 card"
               style="color:#000000;font-weight: bold;">
            <thead>
            <tr style="color: #238c59;font-weight: bold; font-size: 18px;">
                <th class="text-center">ID</th>
                <th>Product Name</th>
                <th>Shop Name</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($logs as $users)
                <tr style="color: #000000; font-weight: bold">
                    <td class="text-center">{{$users -> id}}</td>
                    <td>{{$users -> product_name}}</td>
                    @foreach($users ->shop as $shop)
                        <td>{{$shop->shop_name}}</td>
                    @endforeach
                    <td>Rs-/{{$users -> price}}</td>
                    <td>{{$users -> created_at}}</td>
                    <td>
                        <a style="color: #ffffff; font-weight: bold;" href="/product/{{$users->id}}/edit"
                           class="btn btn-primary"><span style="font-size: 14px;"
                                                         class="text-capitalize">Edit</span></a>
                        <a style="color: #ffffff; font-weight: bold;" href="product/destroy/{{$users->id}}"
                           class="btn btn-danger"><span style="font-size: 14px;"
                                                        class="text-capitalize">Delete</span></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row text-left">
        <h3 style="color: #ffffff">Shops Info :</h3>
    </div>


    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-responsive col-md-10 card"
               style="color:#000000;font-weight: bold;">
            <thead>
            <tr style="color: #238c59;font-weight: bold; font-size: 18px;">
                <th class="text-center">ID</th>
                <th>Shop Name</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shops as $shop)
                <tr style="color: #000000; font-weight: bold">
                    <td class="text-center">{{$shop -> id}}</td>
                    <td>{{$shop -> shop_name}}</td>
                    <td>{{$shop -> created_at}}</td>
                    <td>
                        <a style="color: #ffffff; font-weight: bold;" href="/shop/{{$shop->id}}/edit"
                           class="btn btn-primary"><span style="font-size: 14px;"
                                                         class="text-capitalize">Edit</span></a>
                        <a style="color: #ffffff; font-weight: bold;" href="shop/destroy/{{$shop->id}}"
                           class="btn btn-danger"><span style="font-size: 14px;"
                                                        class="text-capitalize">Delete</span></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="row text-left">
        <h3 style="color: #ffffff">Log Info :</h3>
    </div>


    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-responsive col-md-10 card"
               style="color:#000000;font-weight: bold;">
            {{--<thead>--}}
            {{--<tr style="color: #238c59;font-weight: bold; font-size: 18px;">--}}
            {{--<th class="text-center">ID</th>--}}
            {{--<th>Product Name</th>--}}
            {{--<th>Shop Name</th>--}}
            {{--<th>Created by:</th>--}}
            {{--<th>Created at:</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            <tbody>
            @foreach($logs as $product)
                {{--<tr style="color: #000000; font-weight: bold">--}}
                {{--<td class="text-center">{{$product -> id}}</td>--}}
                {{--<td>{{$product -> product_name}}</td>--}}
                {{--@foreach($product->shop as $shop)--}}
                {{--<td>{{$shop -> shop_name}}</td>--}}
                {{--@endforeach--}}
                {{--<td>{{$product -> user->name}}</td>--}}
                {{--<td>{{$product -> created_at}}</td>--}}

                {{--</tr>--}}
                <li style="color: white;font-size: 18px; font-weight: bold">New Product "{{$product->product_name}}" has
                    been added to
                    @foreach($product->shop as $shop)
                        {{$shop -> shop_name}}
                    @endforeach
                    by {{$product->user->name}} at {{$product -> created_at}}</li>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@LaravelSweetAlertJS

</body>
</html>
