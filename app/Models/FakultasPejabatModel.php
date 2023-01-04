<?php

namespace App\Models;

use CodeIgniter\Model;

class FakultasPejabatModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_fakultas_pejabat';
    protected $primaryKey       = 'id_pejabat_fakultas';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pejabat_fakultas',
        'id_fakultas',
        'jabatan',
        'nama_pejabat',
        'niyp_pejabat',
        'masa_mulai',
        'masa_akhir',
        'id_periode_fakultas',
        'created_at',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
