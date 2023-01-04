<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function __construct ()
    {
        // Connect to table user di dalam database
        $this->tbl_user         =   new UserModel();
    }


    // Login proses controller begin
    public function login()
    {
        // Get data variable from login form open
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'pass_user' =>  $this->request->getPost('pass_user'),
            'validation'    =>  \Config\Services::validation()
        ];
        // Get data variable from login form close

        // Match in form login from to database open
        $data_user = $this->tbl_user->where([
            'nama_user' => $data['nama_user']
        ])->first();
        // Match in form login from to database close

        if(!$data_user) {
            session()->setFlashdata('login_gagal', 'Anda belum terdaftar !!');
            return redirect()->to(site_url('/'));
        } else {
            if($data_user['pass_user'] == sha1($data['pass_user'])) {
                $data_session = [
                    'nama_user'     =>  $data_user['nama_user'],
                    'role_user'     =>  $data_user['role_user'],
                    'blokir'        =>  $data_user['user_blokir'],
                    'user_session'  =>  TRUE,
                ];

                session()->set($data_session);

                // if ($data_session['role_user']) {
                //     return redirect()->to('home');
                // }

            } else {
                session()->setFlashdata('login_gagal', 'Data tidak cocok !!');
            return redirect()->to(site_url('/'))->withInput();
            }
        }
        
        return redirect()->to('home');
    }
    // Login proses controller end


    // Logout proses controller begin
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('/'));
    }
    // Logout proses controller end
}
