<?php

namespace App\Controllers;
use App\Models\LoginLog;
use App\Models\Sparepart;
use App\Models\add;
use App\Models\take;

class mainmenucontrol extends BaseController
{
    public function index()
    {
        if (session()->get('username') == 'admin'){
            return view ('mainmenu_admin');
        }else{
            return view ('/mainmenu');
        }
    }

 
    public function addscreen()
    {
        $SparepartModel = new Sparepart();
        $Sparepart = $SparepartModel->findall();

        $data = [
            'title' => 'sparepart',
            'sparepart' => $Sparepart
        ];

        return view('add', $data);
    }


    public function takescreen()
    {
        $SparepartModel = new Sparepart();
        $SparepartModel = $SparepartModel->findall();

        $data = [
            'title' => 'sparepart',
            'sparepart' => $SparepartModel
        ];

        return view('take', $data);
    }

    public function history_1(){
    
        $addModel = new add();
        $add_History  = $addModel->findall();

        $data = [
            'title' => 'add_History',
            'add_History' => $add_History,
        ];

        return view('/add_history' , $data);
    }

    public function history_2(){
    
        $takeModel = new take();
        $take_History  = $takeModel->findall();

        $data = [
            'title' => 'take_History',
            'take_History' => $take_History,
        ];

        return view('/take_history' , $data);
    }

    public function history(){

        $LoginLogModel = new LoginLog();
        $Login_History = $LoginLogModel->findall();

        $data = [
            'title' => 'Login_History',
            'Login_History' => $Login_History,
        ];

        return view('/login_history' , $data);
    }

    public function sparepart_list()
    {
        $SparepartModel = new Sparepart();
        $SparepartModel = $SparepartModel->findall();

        $data = [
            'title' => 'sparepart',
            'sparepart' => $SparepartModel
        ];

        return view('/list' , $data);
    }

}
