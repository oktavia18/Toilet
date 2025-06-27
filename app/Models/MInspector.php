<?php

namespace App\Models;

use CodeIgniter\Model;

class MInspector extends Model
{
    protected $table = 'inspector';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'name', 'email', 'status', 'role'];
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