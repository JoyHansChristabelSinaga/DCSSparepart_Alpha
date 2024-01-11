<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LoginLog;

class Login extends BaseController
{
    
    public function index()
    {
        return view('login');
    }

    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
            
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                
                return redirect()->to(base_url('/addLogin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function addlog_in(){

        $LoginLogModel = new LoginLog();
        $data=[
           'name' => session()->get('name'),
           'UserName' => session()->get('username'),
           'status' => 'Log In',
        ];
  
        $LoginLogModel->save($data);
        return redirect()->to('/mainmenu');
    }
      
    public function addlog_out(){
        $LoginLogModel = new LoginLog();
  
        $data=[
            'name' => session()->get('name'),
            'UserName' => session()->get('username'),
            'status' => 'Log Out',
        ];
  
          $LoginLogModel->save($data);
          return redirect()->to('/logout');
    }
}
