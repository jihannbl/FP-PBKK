<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Cucian;
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

        $this->response->redirect('/cucian');        
    }
    // passing view
    public function editAction($id)
    {
        $cuci = Cucian::findFirstById_cucian($id);
        $this->view->cucian = $cuci;       
    }

    public function updateAction($id)
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

        $this->response->redirect('/cucian');
    }

    public function hapusAction($id)
    {
        $cuci = Cucian::findFirstById_cucian($id);

        $success = $cuci->delete();

        $this->response->redirect('/cucian');
    }

}
