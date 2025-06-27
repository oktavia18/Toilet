<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MInspector;
use Config\Services;
use FPDF;

class User extends BaseController
{
    protected $m_inspector;
    
    function __construct()
    {
        parent::__construct();
        $this->m_inspector = new MInspector();
    }

    public function index()
    {
        $pager = Services::pager();
        
        $total_rows = $this->m_inspector->total_rows();
        $user = $this->m_inspector->get_limit_data();
        
        $data = [
            "user_data" => $user,
            "total_rows" => $total_rows,
            "pager" => $pager,
        ];

        echo view("partials/v_sidebar");
        echo view("v_user", $data);
        echo view("partials/v_footer");
    }

    public function save()
    {
        $data = [
            "username" => $this->request->getPost("username"),
            "password" => md5($this->request->getPost("password")),
            "name" => $this->request->getPost("name"),
            "email" => $this->request->getPost("email"),
            "status" => $this->request->getPost("status"),
            "role" => $this->request->getPost("role"),
        ];
        $this->m_inspector->insert($data);
        return redirect()->to(site_url("user"));
    }

    public function update()
    {
        $data = [
            "username" => $this->request->getPost("username"),
            "name" => $this->request->getPost("name"),
            "email" => $this->request->getPost("email"),
            "status" => $this->request->getPost("status"),
            "role" => $this->request->getPost("role"),
        ];

        if ($this->request->getPost("password") != null) {
            $data["password"] = md5($this->request->getPost("password"));
        }
        
        $this->m_inspector->update($this->request->getPost("id"), $data);
        return redirect()->to(site_url("user"));
    }

    public function delete()
    {
        $this->m_inspector->delete($this->request->getPost("id"));
        return redirect()->to(site_url("user"));
    }

    public function cetak_pdf()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA INSPEKTUR", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(75, 6, "Username", 1, 0, "C");
        $pdf->Cell(75, 6, "Name", 1, 0, "C");
        $pdf->Cell(75, 6, "Email", 1, 0, "C");
        $pdf->Cell(25, 6, "Status", 1, 0, "C");
        $pdf->Cell(20, 6, "Role", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db->query("SELECT * FROM inspector")->getResult();
        
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(75, 6, $data->username, 1, 0);
            $pdf->Cell(75, 6, $data->name, 1, 0);
            $pdf->Cell(75, 6, $data->email, 1, 0);
            $pdf->Cell(25, 6, $data->status == 1 ? "Aktif" : "Non-Aktif", 1, 0);
            $pdf->Cell(20, 6, $data->role == 1 ? "Admin" : "Inspektur", 1, 1);
            $no++;
        }

        $pdf->Output();
    }
}