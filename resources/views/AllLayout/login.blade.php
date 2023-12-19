<!DOCTYPE html>
<html>
<head>
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <img class="bg" src="{{ asset('Image/bgbg.png')}}">
    <div class="container">
        <div class="img">
            <img src="{{ asset('Image/mamora.png')}}">
        </div>
        <div class="login-content">
            <form action="Login.html">
                <img src="{{ asset('Image/avtr.png')}}">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                <div class="i">
                        <i class="fas fa-user"></i>
                </div>
                <div class="div">
                        <h5></h5>
                        <input type="text" type="username" class="form-control" id="Username" placeholder="Username" required>
                        {{-- <label for="inputEmail4" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputUsername4"  placeholder="name@example.com" required> --}}
                </div>
                </div>
                <div class="input-div pass">
                <div class="i">
                        <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                        <h5></h5>
                        <input type="password" type="password" class="form-control" id="Password" placeholder="Password" required>
                </div>
                </div>
                <div><br></div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/login.js')}}"></script>
</body>
</html>
