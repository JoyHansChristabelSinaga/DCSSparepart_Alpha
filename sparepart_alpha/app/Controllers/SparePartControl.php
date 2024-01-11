<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sparepart;
use App\Models\add;
use App\Models\take;

class SparepartControl extends BaseController
{
    public function index()
    {
      $SparepartModel = new Sparepart();
      $Sparepart = $SparepartModel->findall();

      $data = [
         'title' => 'Sparepart',
         'Sparepart' => $Sparepart,
      ];

      return view('/Sparepart' , $data);
    }

    public function create(){
      $data = [
         'title' => 'Create Sparepart'
        ];
        return view('/create' , $data);
    }

    public function store()
    {
      $SparepartModel = new Sparepart();

      $data=[
        'Name' => $this->request->getPost('Name'),
        'MC'=> $this->request->getPost('MC'),
        'Quantity'=>$this->request->getPost('Quantity'),
        'Location'=> $this->request->getPost('Location'),
        'Note'=> $this->request->getPost('Note')
      ];

        $SparepartModel->save($data);
        return redirect()->to('/list');
    }

    public function delete($id)
    {
        $SparepartModel = new Sparepart();
        $SparepartModel->delete($id);
    
        return redirect()->to('/list');
    }

    public function edit($id){
        $SparepartModel = new Sparepart();
        $Sparepart = $SparepartModel->find($id);

        $data = [
            'title' => ' Edit_Sparepart',
            'Sparepart' => $Sparepart
        ];
        return view('\edit', $data);
    }

    public function update($id)
    {
        $SparepartModel = new Sparepart();
        $data=[
            'Name' => $this->request->getPost('Name'),
            'MC'=> $this->request->getPost('MC'),
            'Quantity'=>$this->request->getPost('Quantity'),
            'Location'=> $this->request->getPost('Location'),
            'Note'=> $this->request->getPost('Note')
        ];

        $SparepartModel->update($id, $data);
        return redirect()->to('/list');
    }

    public function adding()
    {
        $addModel = new add();

        $data = [
            'Name' => $this->request->getPost('Name'),
            'Quantity_add' => $this->request->getPost('Quantity_add'),
            'add_by' => session()->get('name'),
        ];
        
        $addModel -> save($data);
        return redirect()->to('/list');
    }

    public function taking()
    {
        $takeModel = new take();
        
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Quantity_take' => $this->request->getPost('Quantity_take'),
            'take_by' => session()->get('name'),
        ];

        $takeModel -> save($data);
        return redirect()->to('/list');
    }
  }
    
