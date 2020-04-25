<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Cucian;
use App\Validation\CucianValidation;
date_default_timezone_set("Asia/Bangkok");
class CucianController extends ControllerBase
{
    // passing view
    public function indexAction()
    {
        $this->view->cucian = Cucian::find();
    }
    // passing view
    public function tambahAction()
    {

    }

    public function prosesAction()
    {
        $validation= new CucianValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) 
        {
            foreach ($messages as $message) 
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/cucian/tambah');
        }
        else 
        {
            $cuci = new Cucian();

            $cuci->assign(
                $this->request->getPost(),
                [
                    'nama_cucian',
                    'kode_cucian'
                ]
            );
            $cuci->updated_at = date('Y-m-d h:i:sa');
            $cuci->created_at = date('Y-m-d h:i:sa');

            $success = $cuci->save();
            if($success)
            {
                $this->flashSession->success('Data berhasil diinputkan');
            }
    
            $this->response->redirect('/cucian');       
        } 
    }
    // passing view
    public function editAction($id)
    {
        $cuci = Cucian::findFirstById_cucian($id);
        $this->view->cucian = $cuci;       
    }

    public function updateAction($id)
    {
        $validation= new CucianValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) 
        {
            foreach ($messages as $message) 
            {
                $this->flashSession->error($message->getMessage());
            }
            $this->response->redirect('/cucian/edit/'.$id);
        }
        else 
        {
            $cuci = Cucian::findFirstById_cucian($id);

            $cuci->assign(
                $this->request->getPost(),
                [
                    'nama_cucian',
                    'kode_cucian'
                ]
            );
            $cuci->updated_at = date('Y-m-d h:i:sa');
            
            $success = $cuci->save();
            if($success)
            {
                $this->flashSession->success('Data berhasil diedit');
            }

            $this->response->redirect('/cucian');
        }
    }

    public function hapusAction($id)
    {
        $cuci = Cucian::findFirstById_cucian($id);

        $success = $cuci->delete();
        if($success)
        {
            $this->flashSession->success('Data berhasil dihapus');
        }

        $this->response->redirect('/cucian');
    }

}
