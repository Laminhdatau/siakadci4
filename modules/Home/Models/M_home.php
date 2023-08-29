<?php

namespace Modules\Home\Models;

use CodeIgniter\Model;

class M_home extends Model
{
    protected $table = 'test'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['id', 'test']; 

    public function getAll()
    {
        return $this->findAll();
    }
}
