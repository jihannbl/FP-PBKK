<?php

namespace App\Models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id_user;
    public $username;
    public $pwd;
    public $tipe;
    public $updated_at;
    public $created_at;

    public function initialize(){
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('users');
    }

    public function onConstruct(){

    }
}