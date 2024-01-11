<?php

namespace App\Controllers;

use App\Models\UserModel;

class adminregister_Backup extends BaseController
{
    public function index()
    {
        return view('adminregister_Backup');
    }

    public function process_recover()
    {   
        
        $users = new UserModel();
        $users->delete('admin');

        $users->insert([
            'username' => 'admin',
            'password' => password_hash( 'admin', PASSWORD_BCRYPT),
            'name' => 'Administrator'
        ]);
        return redirect()->to('/login');
    }
}