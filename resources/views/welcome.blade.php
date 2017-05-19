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


</head>
<body style="background-color: #f5f5f5">

<div class="container">
    <div class="row text-center">
        <h2 style="color: #238c59;font-weight: bold;">Product Management System </h2>

        {{Form::open(array('url' => 'create')) }}
        {{Form::submit('Add New Product',array("class"=> "btn-add-user"))}}
        {{Form::close() }}
    </div>


    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-responsive col-md-10 card"
               style="color:#000000;font-weight: bold;">
            <thead>
            <tr style="color: #238c59;font-weight: bold; font-size: 18px;">
                <th class="text-center">ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $users)
                <tr style="color: #000000; font-weight: bold">
                    <td class="text-center">{{$users -> id}}</td>
                    <td>{{$users -> product_name}}</td>
                    <td>Rs-/{{$users -> price}}</td>
                    <td>{{$users -> created_at}}</td>
                    <td>
                        <a style="color: #ffffff; font-weight: bold;" href="/edit/{{$users->id}}"
                           class="btn btn-primary"><span style="font-size: 14px;"
                                                         class="text-capitalize">Edit</span></a>
                        <a style="color: #ffffff; font-weight: bold;" href="/destroy/{{$users->id}}"
                           class="btn btn-danger"><span style="font-size: 14px;"
                                                        class="text-capitalize">Delete</span></a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
