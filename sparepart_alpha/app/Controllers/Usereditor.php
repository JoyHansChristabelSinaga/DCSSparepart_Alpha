<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Usereditor extends BaseController
{

  public function user()
  {
    if(session()->get('username') == 'admin'){
      $userModelModel = new UserModel();
      $user_list = $userModelModel->findall();

      $data = [
          'title' => 'user_list',
          'user_list' =>  $user_list
      ];

      return view('/userlist' , $data);
    }else{
    
      return view('/mainmenu');
    }
  }
  
  public function userdelete($username)
  {
    if(session()->get('username') == 'admin'){
      $userModel = new UserModel();
      $userModel->delete($username);
    
      return redirect()->to('/user');
    } else {
      return view('/mainmenu');
    }  
  }

  public function edit_user($id){
    $userModelModel = new UserModel();
    $userModel = $userModelModel->find($id);

    $data = [
      'title' => ' Edit_user',
      'user' => $userModel
    ];
    return view('\edit_user', $data);
  }

  public function update_user($id)
  {
    $userModelModel = new UserModel();

    if($id = 'admin'){
      $data=[
        'username' => 'admin',
        'password'=> password_hash($this->request->getVar('pasuwodo'), PASSWORD_BCRYPT),
        'name'=> 'Administrator',
      ];
    } else {
      $data=[
        'username' => $this->request->getPost('userunemu'),
        'password'=> password_hash($this->request->getVar('pasuwodo'), PASSWORD_BCRYPT),
        'name'=>$this->request->getPost('namae'),
      ];
    }

      $userModelModel->update($id, $data);
      return redirect()->to('/user');
  }
}