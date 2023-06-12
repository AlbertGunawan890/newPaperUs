<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/x-icon" href="./img/logo.png">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <style>
        .button {
            font-size: 1rem;
            margin-top: 1.8rem;
            padding: 10px;
            border-radius: 20px;
            outline: none;
            border: none;
            width: 90%;
            color: #fff;
            background: #3E64D3;
        }

        .button:hover {
            background: rgba(17, 107, 143, 0.877);
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <img src="asset/logo.png" alt="">
        <h1>Login</h1>
        <form action="{{ url('/login') }}">
            <input name="user" type="text" placeholder="Username">
            <input name="password" type="password" placeholder="Password">
            @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible" id="box" role="alert" >
                    {{ Session::get('error') }}
                    <button type="button" class="fa fa-times" data-bs-dismiss="alert" aria-label="Close" onclick="myFunction()" style="float: right;border: none;background: none;"></button>
                </div>
            @endif
            <input type="submit" placeholder="Sign Up" class="button">
        </form>

    </div>
</body>

</html>
