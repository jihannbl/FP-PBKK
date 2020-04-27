<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA | Dwi Citra Anugerah</title>
    <link rel='stylesheet' href='{{ static_url('css/login.css') }}' type='text/css'>
    <style>
        .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        }
        .alert-danger {
        color: #ffffff;
        background: #dc3545;
        border-color: #d32535;
        }
    </style>
</head>

<body>

        {{ flashSession.output() }}
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