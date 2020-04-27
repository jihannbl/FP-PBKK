<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Users;
use App\Validation\UserValidation;
date_default_timezone_set("Asia/Bangkok");
class UserController extends ControllerBase
{
    // passing view
    public function indexAction()
    {
        $this->view->user = Users::find();
    }
    public function masterAction()
    {

    }
    public function adminAction()
    {
        
    }
    // passing view
    public function tambahAction()
    {

    }

    public function prosesAction()
    {
        $validation= new UserValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) 
        {
            foreach ($messages as $message) 
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/user/tambah');
        }
        else 
        {
            // cek yg sudah ada
            $username = $this->request->getPost('username');
            $temp = Users::findFirstByUsername($username);

            if($temp)
            {
                $this->flashSession->error('Username telah dipakai');
                $this->response->redirect('/user/tambah');
            }
            else 
            {
                $user = new Users();
                $user->assign(
                    $this->request->getPost(),
                    [
                        'username',
                        'tipe'
                    ]
                );
                $pwd = $this->request->getPost('pwd');
                $user->pwd = $this->security->hash($pwd);
                $user->updated_at = date('Y-m-d h:i:sa');
                $user->created_at = date('Y-m-d h:i:sa');
                
                $success = $user->save();
                if($success)
                {
                    $this->flashSession->success('Data berhasil diinputkan');
                }
                
                $this->response->redirect('/user');        
            }
        }
    }
    
    public function hapusAction($id)
    {
        $user = Users::findFirstById_user($id);

        $success = $user->delete();
        if($success)
        {
            $this->flashSession->success('Data berhasil dihapus');
        }

        $this->response->redirect('/user');
    }
}
