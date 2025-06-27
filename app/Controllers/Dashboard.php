<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MChecklist;
use App\Models\MToilet;
use App\Models\MInspector;

class Dashboard extends BaseController
{
    protected $m_checklist;
    protected $m_toilet;
    protected $m_inspector;
    
    function __construct()
    {
        parent::__construct();
        $this->m_checklist = new MChecklist();
        $this->m_toilet = new MToilet();
        $this->m_inspector = new MInspector();
    }

    public function index()
    {
        if (session()->get("role") == "admin") {
            $data = [
                "toilet" => $this->m_toilet->total_rows(),
                "checklist" => $this->m_checklist->total_rows(),
                "user" => $this->m_inspector->total_rows(),
            ];
        } else {
            $data = [
                "checklist" => $this->m_checklist->total_rows_user(),
            ];
        }

        echo view("partials/v_sidebar");
        echo view("v_dashboard", $data);
        echo view("partials/v_footer");
    }
}