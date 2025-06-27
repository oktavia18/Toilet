<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Database;

class Login extends BaseController
{
    public function index()
    {
        if (session()->get("role")) {
            return redirect()->to("dashboard");
        }

        if ($this->request->getMethod() !== 'post') {
            return view("v_login");
        }

        $email = $this->request->getPost("email");
        $password = md5($this->request->getPost("password"));
        
        $db = Database::connect();
        $user = $db->query(
            "SELECT * FROM inspector WHERE email='$email' and password='$password' and status = 1"
        );

        if ($user->getNumRows() > 0) {
            $row = $user->getRow();
            $sess_data = [
                "id" => $row->id,
                "username" => $row->username,
                "name" => $row->name,
                "email" => $row->email,
                "role" => $row->role == 1 ? "admin" : "inspektur",
            ];
            session()->set($sess_data);
            return redirect()->to("dashboard");
        }

        // Login failed
        echo '<script type="text/javascript">
                alert("Data yang dimasukkan salah atau akun anda telah di non-aktifkan!");
                window.location = "'.site_url("login").'";
              </script>';
        exit;
    }

    public function logout()
    {
        session()->remove(["id", "username", "name", "email", "role"]);
        session()->destroy();
        return redirect()->to("login");
    }
}