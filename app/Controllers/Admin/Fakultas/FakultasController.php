<?php

namespace App\Controllers\Admin\Fakultas;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use App\Models\FakultasPejabatModel;
use App\Models\FakultasPeriodeModel;

class FakultasController extends BaseController
{
    public function __construct ()
    {
        $this->data_fakultas            =   new FakultasModel();
        $this->data_pejabat             =   new FakultasPejabatModel();
        $this->data_periode_fakultas    =   new FakultasPeriodeModel();
    }
    public function fakultas($fakultas)
    {
        $fakultas   =   decrypt_url($fakultas);
        $data_fakultas  =   $this->data_fakultas->findAll();

        $data   =   [
            'data_fakultas' =>  $data_fakultas,
            'validation'    => \Config\Services::validation(),
        ];

        return view('v_admin/v_fakultas/v_fakultas', $data);
    }


    // Tambah Data Fakultas View Begin
    public function tambah_fakultas($tambah_fakultas)
    {
        $tambah_fakultas = decrypt_url($tambah_fakultas);
        $data = [
            'validation'    => \Config\Services::validation(),
        ];

        return view('v_admin/v_fakultas/v_tambah_fakultas', $data);
    }
    // Tambah Data Fakultas View End


    // Proses Tambah Data Fakultas Begin
    public function proses_tambah_fakultas()
    {
        $kode_fakultas  =   $this->request->getPost('kode_fakultas');
        $nama_fakultas  =   $this->request->getPost('nama_fakultas');

        $data   =   [
            'kode_fakultas'     =>  $kode_fakultas,
            'nama_fakultas'     =>  $nama_fakultas,
        ];

        if (!$this->validate([
            'kode_fakultas'   =>  [
                'label'     =>  'Kode Fakultas',
                'rules'     =>  'required|is_unique[tbl_fakultas.kode_fakultas]',
                'errors'    =>  [
                    'required'  =>  '{field} harus diisi !!',
                    'is_unique' =>  '{field} sudah terdaftar !!',
                ]
            ],
            'nama_fakultas'   =>  [
                'label'     =>  'Nama Fakultas',
                'rules'     =>  'required',
                'errors'    =>  [
                    'required'  => '{field} harus diisi !!',
                ]
            ],
        ])) {
            $validation  = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        };

        $validation =   \Config\Services::validation();

        session()->setFlashdata('tambah', '<strong>Berhasil!</strong> Data berhasil ditambahkan!');
        $this->data_fakultas->insert($data);
        return redirect()->to(site_url('admin/fakultas/'.encrypt_url('fakultas')));
    }
    // Proses Tambah Data Fakultas End


    // Proses edit fakultas begin
    public function proses_edit_fakultas ($proses_edit_fakultas, $id_fakultas)
    {
        $proses_edit_fakultas   =   decrypt_url($proses_edit_fakultas);
        $id_fakultas            =   decrypt_url($id_fakultas);
              
        $data   =   [
            'id_fakultas'   =>  $id_fakultas,
            'kode_fakultas' =>  $this->request->getPost('kode_fakultas'),
            'nama_fakultas' =>  $this->request->getPost('nama_fakultas'),
            'updated_at'    =>  date('Y-m-d H:i:s'),
            'validation'    =>  \Config\Services::validation(),
        ];

        $database_fakultas  =   $this->data_fakultas->where('id_fakultas', $id_fakultas)->first();

        if ($database_fakultas['kode_fakultas'] == $data['kode_fakultas']) {
            $rule = 'required|string';
        } else {
            $rule = 'required|string|is_unique[tbl_fakultas.kode_fakultas]';
        }

        if ($database_fakultas['nama_fakultas'] == $data['nama_fakultas']) {
            $rule = 'required|string';
        } else {
            $rule = 'required|string|is_unique[tbl_fakultas.nama_fakultas]';
        }

        if (!$this->validate([
            'kode_fakultas'  =>  [
                'label'      =>  'Kode Fakultas',
                'rules'      =>  $rule,
                'errors'     =>  [
                    'required'   =>  '{field} harus diisi !!',
                    'is_unique'  =>  '{field} sudah terdaftar !!',
                ]
            ],
            'nama_fakultas'  => [
                'label'      => 'Nama Fakultas',
                'rules'      => $rule,
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                    'is_unique' =>  '{field} sudah terdaftar !!',
                ]
            ],
        ])) {
            $validation  = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->data_fakultas->update($id_fakultas, $data);
        session()->setFlashdata('edit', 'Data berhasil diedit !!');
        return redirect()->to(site_url('admin/fakultas/'.encrypt_url('fakultas')));
    }
    // Proses edit fakultas end


    // Hapus data fakultas view begin
    public function hapus_fakultas ($id_fakultas)
    {
        $id_fakultas    =   decrypt_url($id_fakultas);

        session()->setFlashdata('hapus', '<strong>Berhasil. </strong>Data berhasil dihapus!');
        $this->data_fakultas->where('id_fakultas', $id_fakultas)->delete();
        return redirect()->to(site_url('admin/fakultas/'.encrypt_url('fakultas')));
    }
    // Hapus data fakultas view end


    // Edit data fakultas begin
    public function v_edit_fakultas($v_edit_fakultas, $id_fakultas)
    {
        $v_edit_fakultas    =   decrypt_url($v_edit_fakultas);
        $id_fakultas        =   decrypt_url($id_fakultas);

        $data   =   [
            'data_fakultas' =>  $this->data_fakultas->where('id_fakultas', $id_fakultas)->first(),
            'validation'    => \Config\Services::validation(),
        ];

        return view('v_admin/v_fakultas/v_edit_fakultas', $data);
    }
    // Edit data fakultas end


    // Detail fakultas info begin
    public function detail_fakultas($detail_fakultas, $id_fakultas)
    {
        $detail_fakultas    =   decrypt_url($detail_fakultas);
        $id_fakultas        =   decrypt_url($id_fakultas);

        $data = [
            'id_fakultas'       =>  $id_fakultas,
            'data_pejabat'      =>  $this->data_pejabat->where('id_fakultas', $id_fakultas)->findAll(),
            'data_fakultas'     =>  $this->data_fakultas->where('id_fakultas', $id_fakultas)->first(),
            'periode_fakultas'  =>  $this->data_pejabat
                                    ->join('tbl_periode_fakultas', 'tbl_periode_fakultas.id_periode_fakultas = tbl_fakultas_pejabat.id_periode_fakultas')
                                    ->where('id_fakultas', $id_fakultas)
                                    ->findAll(),
            'periode'           =>  $this->data_periode_fakultas->orderBy('nama_periode_fakultas', 'ASC')->findAll(),
            'validation'        => \Config\Services::validation(),
        ];

        // dd($data['periode']);
        return view('v_admin/v_fakultas/v_pejabat_fakultas/v_pejabat_fakultas', $data);
    }
    // Detail fakultas info end


    // Tambah pejabat view begin
    public function v_tambah_pejabat_fakultas($id_fakultas)
    {
        $id_fakultas                =   decrypt_url($id_fakultas);

        $data   =   [
            'id_fakultas'       =>  $id_fakultas,
            'periode_fakultas'  =>  $this->data_periode_fakultas->orderBy('nama_periode_fakultas', 'ASC')->findAll(),
            'validation'        =>  \Config\Services::validation(),
        ];
        return view('v_admin/v_fakultas/v_pejabat_fakultas/v_tambah_pejabat_fakultas', $data);

    }
    // Tambah pejabat view end


    // Proses tambah data pejabat fakultas begin
    public function proses_tambah_pejabat_fakultas($id_fakultas)
    {
        $id_fakultas    =   decrypt_url($id_fakultas);
        $id_periode     =   decrypt_url($this->request->getPost('periode'));

        $data   =   [
            'id_fakultas'           =>  $id_fakultas,
            'niyp_pejabat'          =>  $this->request->getPost('niyp_pejabat'),
            'nama_pejabat'          =>  $this->request->getPost('nama_pejabat'),
            'jabatan'               =>  $this->request->getPost('jabatan'),
            'masa_mulai'            =>  $this->request->getPost('masa_mulai'),    
            'masa_akhir'            =>  $this->request->getPost('masa_akhir'),  
            'id_periode_fakultas'   =>  $id_periode,  
        ];

        if (!$this->validate([
            'niyp_pejabat'  =>  [
                'label'      =>  'NIY / NIP Pimpinan',
                'rules'      =>  'required|is_unique[tbl_fakultas_pejabat.niyp_pejabat]',
                'errors'     =>  [
                    'required'   =>  '{field} harus diisi !!',
                    'is_unique'  =>  '{field} sudah terdaftar !!',
                ]
            ],
            'nama_pejabat'  => [
                'label'      => 'Nama Pimpinan',
                'rules'      => 'required|string',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                    'is_unique' =>  '{field} sudah terdaftar !!',
                ]
            ],
            'jabatan'  => [
                'label'      => 'Jabatan',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'masa_mulai'  => [
                'label'      => 'Masa Mulai',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'masa_akhir'  => [
                'label'      => 'Masa Akhir',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'periode'  => [
                'label'      => 'Masa Periode',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
        ])) {
            $validation  = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }
        
        session()->setFlashdata('tambah', '<strong>Berhasil. </strong>Data berhasil ditambahkan!');
        $this->data_pejabat->insert($data);
        return redirect()->to(site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)));
    }
    // Proses tambah data pejabat fakultas end


    // Edit pejabat fakultas begin
    public function v_edit_pejabat_fakultas($id_pejabat_fakultas, $id_fakultas)
    {
        $id_pejabat_fakultas    =   decrypt_url($id_pejabat_fakultas);
        $id_fakultas            =   decrypt_url($id_fakultas);

        $data = [
            'id_pejabat_fakultas'   =>  $id_pejabat_fakultas,
            'id_fakultas'           =>  $id_fakultas,
            'data_pejabat'          =>  $this->data_pejabat->where('id_pejabat_fakultas', $id_pejabat_fakultas)->first(),
            'periode_pejabat'       =>  $this->data_pejabat
                                        ->join('tbl_periode_fakultas', 'tbl_periode_fakultas.id_periode_fakultas = tbl_fakultas_pejabat.id_periode_fakultas')
                                        ->where([
                                            'id_pejabat_fakultas'   => $id_pejabat_fakultas,
                                            'id_fakultas'           =>  $id_fakultas,
                                            ])
                                        ->first(),
            'data_fakultas'         =>  $this->data_fakultas->where('id_fakultas', $id_fakultas)->first(),
            'periode_fakultas'      =>  $this->data_periode_fakultas->orderBy('nama_periode_fakultas', 'ASC')->findAll(),
            'validation'            => \Config\Services::validation(),
        ];
        // dd($data['periode_pejabat']);

        return view('v_admin/v_fakultas/v_pejabat_fakultas/v_edit_pejabat_fakultas', $data);
    }
    // Edit pejabat fakultas end


    // Proses edit pejabat fakultas begin
    public function proses_edit_pejabat_fakultas($id_fakultas, $id_pejabat_fakultas)
    {
        $id_fakultas            =   decrypt_url($id_fakultas);
        $id_pejabat_fakultas    =   decrypt_url($id_pejabat_fakultas);
        $periode_fakultas       =   decrypt_url($this->request->getPost('periode'));

        $data   =   [
            'id_pejabat_fakultas'    =>  $id_pejabat_fakultas,
            'niyp_pejabat'          =>  $this->request->getPost('niyp_pejabat'),
            'nama_pejabat'          =>  $this->request->getPost('nama_pejabat'),
            'jabatan'               =>  $this->request->getPost('jabatan'),
            'masa_mulai'            =>  $this->request->getPost('masa_mulai'),    
            'masa_akhir'            =>  $this->request->getPost('masa_akhir'),  
            'id_periode_fakultas'   =>  $periode_fakultas,
            'updated_at'            =>  date('Y-m-d h:i:s'), 
            'validation'            => \Config\Services::validation(),
        ];

        $database_pejabat  =   $this->data_pejabat->where('id_pejabat_fakultas', $id_pejabat_fakultas)->first();

        // dd($database_pejabat);
        if ($database_pejabat['niyp_pejabat'] == $data['niyp_pejabat']) {
            $rule = 'required|string';
        } else {
            $rule = 'required|string|is_unique[tbl_fakultas_pejabat.niyp_pejabat]';
        }

        if (!$this->validate([
            'niyp_pejabat'  =>  [
                'label'      =>  'NIY / NIP Pimpinan',
                'rules'      =>  $rule,
                'errors'     =>  [
                    'required'   =>  '{field} harus diisi !!',
                    'is_unique'  =>  '{field} sudah terdaftar !!',
                ]
            ],
            'nama_pejabat'  => [
                'label'      => 'Nama Pimpinan',
                'rules'      => 'required|string',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                    'is_unique' =>  '{field} sudah terdaftar !!',
                ]
            ],
            'jabatan'  => [
                'label'      => 'Jabatan',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'masa_mulai'  => [
                'label'      => 'Masa Mulai',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'masa_akhir'  => [
                'label'      => 'Masa Akhir',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
            'periode'  => [
                'label'      => 'Masa Periode',
                'rules'      => 'required',
                'errors'     => [
                    'required'  =>  '{field} harus diisi !!',
                ]
            ],
        ])) {
            $validation  = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->data_pejabat->update($id_pejabat_fakultas, $data);
        session()->setFlashdata('edit', 'Data berhasil diedit !!');
        return redirect()->to(site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)));
    }
    // Proses edit pejabat fakultas end


    // Proses hapus pejabat fakultas begin
    public function hapus_pejabat_fakultas($id_pejabat_fakultas, $id_fakultas)
    {
        $id_pejabat_fakultas    =   decrypt_url($id_pejabat_fakultas);
        $id_fakultas            =   decrypt_url($id_fakultas);

        session()->setFlashdata('hapus', '<strong>Berhasil. </strong>Data berhasil dihapus!');
        $this->data_pejabat->where('id_pejabat_fakultas', $id_pejabat_fakultas)->delete();
        return redirect()->to(site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)));
    }
    // Proses hapus pejabat fakultas end


    // Cari periode fakultas begin
    public function cari_periode_fakultas($id_fakultas)
    {
        $id_fakultas    =   decrypt_url($id_fakultas);
        $id_periode_fakultas    =   decrypt_url($this->request->getPost('cari_periode'));

        $data   =   [
            'id_fakultas'       =>   $id_fakultas,
            'periode_fakultas'  =>  $this->data_pejabat
                                    ->join('tbl_periode_fakultas', 'tbl_periode_fakultas.id_periode_fakultas = tbl_fakultas_pejabat.id_periode_fakultas')
                                    ->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_fakultas_pejabat.id_fakultas', 'LEFT')
                                    ->where([
                                        'tbl_fakultas_pejabat.id_fakultas'  => $id_fakultas,
                                        'tbl_fakultas_pejabat.id_periode_fakultas'   =>  $id_periode_fakultas,
                                        ])
                                    ->findAll(),
            'data_pejabat'      =>  $this->data_pejabat->where('id_fakultas', $id_fakultas)->findAll(),
            'data_fakultas'     =>  $this->data_fakultas->where('id_fakultas', $id_fakultas)->first(),
            'periode'           =>  $this->data_periode_fakultas->orderBy('nama_periode_fakultas', 'ASC')->findAll(),
            'validation'            => \Config\Services::validation(),
        ];

        // dd($data);
        if(($data['periode_fakultas']) == null) {
            return redirect()->to(site_url('admin/detail_fakultas/' . encrypt_url('detail_fakultas') . '/' . encrypt_url($id_fakultas)));
        } else {
            return view('v_admin/v_fakultas/v_fakultas_results', $data);
        }
    }
    // Cari periode fakultas end
}
