<?php

namespace App\Models;

use CodeIgniter\Model;

class MChecklist extends Model
{
    protected $table = 'checklist';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tanggal', 'toilet_id', 'inspector_id', 'kloset', 
                              'wastafel', 'lantai', 'dinding', 'kaca', 'bau', 'sabun'];
    protected $useTimestamps = false;
    protected $returnType = 'object';

    public function total_rows()
    {
        return $this->countAll();
    }

    public function total_rows_user()
    {
        return $this->where('inspector_id', session()->get('id'))
                   ->countAllResults();
    }

    public function get_limit_data()
    {
        return $this->select('checklist.*, toilet.lokasi as toilet_lokasi, inspector.name as user_name')
                   ->join('inspector', 'inspector.id = checklist.inspector_id')
                   ->join('toilet', 'toilet.id = checklist.toilet_id')
                   ->orderBy('tanggal', 'DESC')
                   ->findAll();
    }

    public function get_limit_data_user()
    {
        return $this->select('checklist.*, toilet.lokasi as toilet_lokasi, inspector.name as user_name')
                   ->join('inspector', 'inspector.id = checklist.inspector_id')
                   ->join('toilet', 'toilet.id = checklist.toilet_id')
                   ->where('checklist.inspector_id', session()->get('id'))
                   ->orderBy('tanggal', 'DESC')
                   ->findAll();
    }

    public function get_by_id($id)
    {
        return $this->where($this->primaryKey, $id)
                   ->first();
    }
}