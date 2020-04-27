<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DCA | Dwi Citra Anugerah</title>
    <link rel="icon" href="img/DCA.png" type="image/png">
    <link rel='stylesheet' href='<?= $this->url->getStatic('css/login.css') ?>' type='text/css'>
</head>

<body>
    <div class="text-danger"><?= $this->flashSession->output() ?> </div>
    <div class="form-structor">
        <form method="POST" autocomplete="off" action="<?= $this->url->get('session/login') ?>">
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