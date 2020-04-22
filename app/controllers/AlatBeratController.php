<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\AlatBerat;
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

        $this->response->redirect('/alatberat');        
    }
    // passing view
    public function editAction($id)
    {
        $alat = AlatBerat::findFirstById_alatBerat($id);
        $this->view->alat = $alat;       
    }

    public function updateAction($id)
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

        $this->response->redirect('/alatberat');
    }

    public function hapusAction($id)
    {
        $alat = AlatBerat::findFirstById_alatBerat($id);

        $success = $alat->delete();

        $this->response->redirect('/alatberat');
    }

}
