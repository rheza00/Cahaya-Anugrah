<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css') }}">
</head>

<body>
    <div class="background">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <a href="{{url('/register')}}"><button type="button" id="daftar" class="toggle-btn">Daftar</button></a>
                <button type="button" id="masuk" class="toggle-btn">Masuk</button>
            </div>
            <form class="was-validated" action="/postlogin" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp"
                        placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="" name="password" placeholder="Password"
                        required="">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html>
