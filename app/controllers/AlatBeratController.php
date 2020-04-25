<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\AlatBerat;
use App\Validation\AlatBeratValidation;
date_default_timezone_set("Asia/Bangkok");
class AlatBeratController extends ControllerBase
{
    // passing view
    public function indexAction()
    {
        $this->view->alat = AlatBerat::find();
    }
    // passing view
    public function tambahAction()
    {

    }

    public function prosesAction()
    {
        $validation= new AlatBeratValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) 
        {
            foreach ($messages as $message) 
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/alatberat/tambah');
        }
        else 
        {
            $alat = new AlatBerat();

            $alat->assign(
                $this->request->getPost(),
                [
                    'nama_alatBerat',
                    'harga_alatBerat'
                ]
            );
            $alat->updated_at = date('Y-m-d h:i:sa');
            $alat->created_at = date('Y-m-d h:i:sa');
            
            $success = $alat->save();
            if($success)
            {
                $this->flashSession->success('Data berhasil diinputkan');
            }
            
            $this->response->redirect('/alatberat');        
        }
    }
    // passing view
    public function editAction($id)
    {
        $alat = AlatBerat::findFirstById_alatBerat($id);
        $this->view->alat = $alat;       
    }

    public function updateAction($id)
    {
        $validation= new AlatBeratValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) 
        {
            foreach ($messages as $message) 
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/alatberat/edit/'.$id);
        }
        else 
        {
            $alat = AlatBerat::findFirstById_alatBerat($id);
            
            $alat->assign(
                $this->request->getPost(),
                [
                    'nama_alatBerat',
                    'harga_alatBerat'
                ]
            );
            $alat->updated_at = date('Y-m-d h:i:sa');
            
            $success = $alat->save();
            if($success)
            {
                $this->flashSession->success('Data berhasil diedit');
            }
            
            $this->response->redirect('/alatberat');
        }
    }

    public function hapusAction($id)
    {
        $alat = AlatBerat::findFirstById_alatBerat($id);

        $success = $alat->delete();
        if($success)
        {
            $this->flashSession->success('Data berhasil dihapus');
        }

        $this->response->redirect('/alatberat');
    }

}
