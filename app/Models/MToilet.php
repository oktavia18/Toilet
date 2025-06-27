<?php

namespace App\Models;

use CodeIgniter\Model;

class MToilet extends Model
{
    protected $table = 'toilet';
    protected $primaryKey = 'id';
    protected $allowedFields = ['lokasi', 'keterangan'];
    protected $useTimestamps = false;
    protected $returnType = 'object';

    public function total_rows()
    {
        return $this->countAll();
    }

    public function get_limit_data()
    {
        return $this->orderBy($this->primaryKey, 'DESC')
                   ->findAll();
    }

    public function get_by_id($id)
    {
        return $this->where($this->primaryKey, $id)
                   ->first();
    }
}