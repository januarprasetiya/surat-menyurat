<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasPeriodeModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_periode_fakultas';
    protected $primaryKey       = 'id_periode_fakultas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_periode_fakultas',
        'kode_periode_fakultas',
        'nama_periode_fakultas',
        'created_at',
        'updated_at',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
