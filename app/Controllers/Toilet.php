<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MToilet;
use Config\Services;
use FPDF;

class Toilet extends BaseController
{
    protected $m_toilet;
    
    function __construct()
    {
        parent::__construct();
        $this->m_toilet = new MToilet();
    }

    public function index()
    {
        $pager = Services::pager();
        
        $total_rows = $this->m_toilet->total_rows();
        $toilet = $this->m_toilet->get_limit_data();
        
        $data = [
            "toilet_data" => $toilet,
            "total_rows" => $total_rows,
            "pager" => $pager,
        ];

        echo view("partials/v_sidebar");
        echo view("v_toilet", $data);
        echo view("partials/v_footer");
    }

    public function save()
    {
        $data = [
            "lokasi" => $this->request->getPost("lokasi"),
            "keterangan" => $this->request->getPost("keterangan"),
        ];
        $this->m_toilet->insert($data);
        return redirect()->to(site_url("toilet"));
    }

    public function update()
    {
        $data = [
            "lokasi" => $this->request->getPost("lokasi"),
            "keterangan" => $this->request->getPost("keterangan"),
        ];
        $this->m_toilet->update($this->request->getPost("id"), $data);
        return redirect()->to(site_url("toilet"));
    }

    public function delete()
    {
        $this->m_toilet->delete($this->request->getPost("id"));
        return redirect()->to(site_url("toilet"));
    }

    public function cetak_pdf()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA TOILET", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(100, 6, "Lokasi", 1, 0, "C");
        $pdf->Cell(170, 6, "Keterangan", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db->query("SELECT * FROM toilet")->getResult();
        
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(100, 6, $data->lokasi, 1, 0);
            $pdf->Cell(170, 6, $data->keterangan, 1, 1);
            $no++;
        }

        $pdf->Output();
    }
}