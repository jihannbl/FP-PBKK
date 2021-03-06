<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
date_default_timezone_set("Asia/Bangkok");
class SessionController extends ControllerBase
{

    public function beforeExecuteRoute() 
    {
    
    }
    
    public function indexAction()
    {
    }

    public function loginAction()
    {
        $username = $this->request->getPost('username','string');
        // $temp = 'jihan';
        $temp = Users::findFirst(
            [
                'conditions' => 'username = :username:',
                'bind'       => [
                    'username' => $username,
                ],
            ]
        );
        if($temp)
        {
            //cek password
            // $pwd = 'jihan';
            $pwd = $this->request->getPost('pwd','string');
            if($this->security->checkHash($pwd, $temp->pwd))
            {
                // Set a session variable
                $this->session->set(
                    'auth',
                    [
                        'id_user' => $temp->id_user,
                        'username' => $temp->username,
                        'tipe' => $temp->tipe                            
                    ]
                );
                if($temp->tipe == 'master')
                {
                    $this->response->redirect('/user/master');
                }
                else if($temp->tipe == 'admin'){
                    $this->response->redirect('/user/admin');
                }
                        
            }
            else {
                $this->flashSession->error('Password salah');
                $this->response->redirect('/');
            }
        }
        else {
            $this->flashSession->error('Username salah');
            $this->response->redirect('/');
        }      
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');

    }
}
