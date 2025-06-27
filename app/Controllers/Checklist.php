<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MChecklist;
use App\Models\MInspector;
use App\Models\MToilet;
use Config\Services;
use FPDF;

class Checklist extends BaseController
{
    protected $m_checklist;
    protected $m_inspector;
    protected $m_toilet;
    
    function __construct()
    {
        parent::__construct();
        $this->m_checklist = new MChecklist();
        $this->m_inspector = new MInspector();
        $this->m_toilet = new MToilet();
    }

    public function index()
    {
        $pager = Services::pager();
        
        $total_rows = $this->m_checklist->total_rows();
        if (session()->get("role") == "admin") {
            $checklist = $this->m_checklist->get_limit_data();
        } else {
            $checklist = $this->m_checklist->get_limit_data_user();
        }

        $user = $this->m_inspector->get_limit_data();
        $toilet = $this->m_toilet->get_limit_data();
        
        $data = [
            "checklist_data" => $checklist,
            "inspector_data" => $user,
            "toilet_data" => $toilet,
            "total_rows" => $total_rows,
            "pager" => $pager,
        ];

        echo view("partials/v_sidebar");
        echo view("v_checklist", $data);
        echo view("partials/v_footer");
    }

    public function save()
    {
        $data = [
            "tanggal" => date("Y-m-d H:i:s"),
            "toilet_id" => $this->request->getPost("toilet_id"),
            "kloset" => $this->request->getPost("kloset"),
            "wastafel" => $this->request->getPost("wastafel"),
            "lantai" => $this->request->getPost("lantai"),
            "dinding" => $this->request->getPost("dinding"),
            "kaca" => $this->request->getPost("kaca"),
            "bau" => $this->request->getPost("bau"),
            "sabun" => $this->request->getPost("sabun"),
        ];
        
        if (session()->get("role") == "admin") {
            $data["inspector_id"] = $this->request->getPost("inspector_id");
        } else {
            $data["inspector_id"] = session()->get("id");
        }
        
        $this->m_checklist->insert($data);
        return redirect()->to(site_url("checklist"));
    }

    public function update()
    {
        $data = [
            "toilet_id" => $this->request->getPost("toilet_id"),
            "kloset" => $this->request->getPost("kloset"),
            "wastafel" => $this->request->getPost("wastafel"),
            "lantai" => $this->request->getPost("lantai"),
            "dinding" => $this->request->getPost("dinding"),
            "kaca" => $this->request->getPost("kaca"),
            "bau" => $this->request->getPost("bau"),
            "sabun" => $this->request->getPost("sabun"),
        ];

        if (session()->get("role") == "admin") {
            $data["inspector_id"] = $this->request->getPost("inspector_id");
        } else {
            $data["inspector_id"] = session()->get("id");
        }

        $this->m_checklist->update($this->request->getPost("id"), $data);
        return redirect()->to(site_url("checklist"));
    }

    public function delete()
    {
        $this->m_checklist->delete($this->request->getPost("id"));
        return redirect()->to(site_url("checklist"));
    }

    public function cetak_pdf()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA TOILET KESELURUHAN", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(40, 6, "Tanggal", 1, 0, "C");
        $pdf->Cell(50, 6, "Lokasi Toilet", 1, 0, "C");
        $pdf->Cell(20, 6, "Kloset", 1, 0, "C");
        $pdf->Cell(20, 6, "Wastafel", 1, 0, "C");
        $pdf->Cell(20, 6, "Lantai", 1, 0, "C");
        $pdf->Cell(20, 6, "Dinding", 1, 0, "C");
        $pdf->Cell(20, 6, "Kaca", 1, 0, "C");
        $pdf->Cell(20, 6, "Bau", 1, 0, "C");
        $pdf->Cell(20, 6, "Sabun", 1, 0, "C");
        $pdf->Cell(40, 6, "Inspektur", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db
            ->query(
                "SELECT checklist.*, toilet.lokasi as toilet_lokasi, inspector.name as user_name FROM checklist join inspector on inspector.id = checklist.inspector_id join toilet on toilet.id = checklist.toilet_id"
            )
            ->getResult();
            
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(40, 6, $data->tanggal, 1, 0);
            $pdf->Cell(50, 6, $data->toilet_lokasi, 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->kloset == 1
                    ? "Bersih"
                    : ($data->kloset == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->wastafel == 1
                    ? "Bersih"
                    : ($data->wastafel == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->lantai == 1
                    ? "Bersih"
                    : ($data->lantai == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->dinding == 1
                    ? "Bersih"
                    : ($data->dinding == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->kaca == 1
                    ? "Bersih"
                    : ($data->kaca == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(20, 6, $data->bau == 1 ? "Ya" : "Tidak", 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->sabun == 1
                    ? "Ada"
                    : ($data->sabun == 2
                        ? "Habis"
                        : "Hilang"),
                1,
                0
            );
            $pdf->Cell(40, 6, $data->user_name, 1, 1);
            $no++;
        }

        $pdf->Output();
    }

    public function cetak_pdf_belum_diperiksa()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA TOILET BELUM DIPERIKSA", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(100, 6, "Lokasi", 1, 0, "C");
        $pdf->Cell(140, 6, "Keterangan", 1, 0, "C");
        $pdf->Cell(30, 6, "Status", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db
            ->query(
                "SELECT toilet.* from toilet left join checklist on toilet.id = checklist.toilet_id where checklist.id is null"
            )
            ->getResult();
            
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(100, 6, $data->lokasi, 1, 0);
            $pdf->Cell(140, 6, $data->keterangan, 1, 0);
            $pdf->Cell(30, 6, "Belum diperiksa", 1, 1);
            $no++;
        }

        $pdf->Output();
    }

    public function cetak_pdf_rusak()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA TOILET RUSAK", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(40, 6, "Tanggal", 1, 0, "C");
        $pdf->Cell(50, 6, "Lokasi Toilet", 1, 0, "C");
        $pdf->Cell(20, 6, "Kloset", 1, 0, "C");
        $pdf->Cell(20, 6, "Wastafel", 1, 0, "C");
        $pdf->Cell(20, 6, "Lantai", 1, 0, "C");
        $pdf->Cell(20, 6, "Dinding", 1, 0, "C");
        $pdf->Cell(20, 6, "Kaca", 1, 0, "C");
        $pdf->Cell(20, 6, "Bau", 1, 0, "C");
        $pdf->Cell(20, 6, "Sabun", 1, 0, "C");
        $pdf->Cell(40, 6, "Inspektur", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db
            ->query(
                "SELECT checklist.*, toilet.lokasi as toilet_lokasi, inspector.name as user_name FROM checklist join inspector on inspector.id = checklist.inspector_id join toilet on toilet.id = checklist.toilet_id where checklist.kloset = 3 or checklist.wastafel = 3 or checklist.lantai = 3 or checklist.dinding = 3 or checklist.kaca = 3"
            )
            ->getResult();
            
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(40, 6, $data->tanggal, 1, 0);
            $pdf->Cell(50, 6, $data->toilet_lokasi, 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->kloset == 1
                    ? "Bersih"
                    : ($data->kloset == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->wastafel == 1
                    ? "Bersih"
                    : ($data->wastafel == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->lantai == 1
                    ? "Bersih"
                    : ($data->lantai == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->dinding == 1
                    ? "Bersih"
                    : ($data->dinding == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->kaca == 1
                    ? "Bersih"
                    : ($data->kaca == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(20, 6, $data->bau == 1 ? "Ya" : "Tidak", 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->sabun == 1
                    ? "Ada"
                    : ($data->sabun == 2
                        ? "Habis"
                        : "Hilang"),
                1,
                0
            );
            $pdf->Cell(40, 6, $data->user_name, 1, 1);
            $no++;
        }

        $pdf->Output();
    }

    public function cetak_pdf_kotor()
    {
        $pdf = new FPDF("L", "mm", "A4");
        $pdf->AddPage();
        $pdf->SetFont("Arial", "B", 16);
        $pdf->Cell(0, 7, "DATA TOILET KOTOR", 0, 1, "C");
        $pdf->Cell(10, 7, "", 0, 1);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(8, 6, "No", 1, 0, "C");
        $pdf->Cell(40, 6, "Tanggal", 1, 0, "C");
        $pdf->Cell(50, 6, "Lokasi Toilet", 1, 0, "C");
        $pdf->Cell(20, 6, "Kloset", 1, 0, "C");
        $pdf->Cell(20, 6, "Wastafel", 1, 0, "C");
        $pdf->Cell(20, 6, "Lantai", 1, 0, "C");
        $pdf->Cell(20, 6, "Dinding", 1, 0, "C");
        $pdf->Cell(20, 6, "Kaca", 1, 0, "C");
        $pdf->Cell(20, 6, "Bau", 1, 0, "C");
        $pdf->Cell(20, 6, "Sabun", 1, 0, "C");
        $pdf->Cell(40, 6, "Inspektur", 1, 1, "C");
        $pdf->SetFont("Arial", "", 10);
        
        $db = \Config\Database::connect();
        $barang = $db
            ->query(
                "SELECT checklist.*, toilet.lokasi as toilet_lokasi, inspector.name as user_name FROM checklist join inspector on inspector.id = checklist.inspector_id join toilet on toilet.id = checklist.toilet_id where checklist.kloset = 2 or checklist.wastafel = 2 or checklist.lantai = 2 or checklist.dinding = 2 or checklist.kaca = 2"
            )
            ->getResult();
            
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(40, 6, $data->tanggal, 1, 0);
            $pdf->Cell(50, 6, $data->toilet_lokasi, 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->kloset == 1
                    ? "Bersih"
                    : ($data->kloset == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->wastafel == 1
                    ? "Bersih"
                    : ($data->wastafel == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->lantai == 1
                    ? "Bersih"
                    : ($data->lantai == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->dinding == 1
                    ? "Bersih"
                    : ($data->dinding == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(
                20,
                6,
                $data->kaca == 1
                    ? "Bersih"
                    : ($data->kaca == 2
                        ? "Kotor"
                        : "Rusak"),
                1,
                0
            );
            $pdf->Cell(20, 6, $data->bau == 1 ? "Ya" : "Tidak", 1, 0);
            $pdf->Cell(
                20,
                6,
                $data->sabun == 1
                    ? "Ada"
                    : ($data->sabun == 2
                        ? "Habis"
                        : "Hilang"),
                1,
                0
            );
            $pdf->Cell(40, 6, $data->user_name, 1, 1);
            $no++;
        }

        $pdf->Output();
    }
}