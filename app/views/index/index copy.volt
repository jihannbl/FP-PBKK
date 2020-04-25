<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA | Dwi Citra Anugerah</title>
    <!-- {{ assets.outputCss() }} -->
    <!-- {{ this.assets.outputCss('login') }} -->
    <link rel='stylesheet' href='{{ static_url('css/login.css') }}' type='text/css'>

</head>

<body>
    <div class="form-structor">
        <form method="POST" autocomplete="off" action="{{ url('session/login') }}">
            <div class="signup">
                <h2 class="form-title" id="signup">Log in</h2>
                <div class="form-holder">
                    <input id="username" type="text" placeholder="Username" class="input form-control " name="username">
                    <input id="password" type="password" placeholder="Password" class="input form-control " name="pwd">
                </div>
                <button type="submit" class="submit-btn" value="Login">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>