<?php
declare(strict_types=1);

namespace App\Controllers;

class ErrorController extends ControllerBase
{

    public function notFoundAction()
    {
        echo '404 - not found';
        // $this->view->pick('error/notfound');
    }

    public function serverErrorAction()
    {
        echo 'Server Error';
    }
    public function unauthorizedAction()
    {
        echo 'Access to this resource is denied';
        // $this->view->pick('error/notfound');
    }

}

