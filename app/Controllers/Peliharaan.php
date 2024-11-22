<?php

namespace App\Controllers;

use App\Models\PeliharaanModels;
use App\Models\PemilikModels;

class Peliharaan extends BaseController
{
    protected $Peliharaan;
    // protected $dokter;
    public function __construct()
    {
        $this->Peliharaan = new PeliharaanModels();
        // $this->dokter = new DokterModels();
    }

    function index(): string
    {
        $data['judul'] = "Peliharaan Hewan";
        $data['title'] = "PETHSOP | Peliharaan";
        $data['data'] = $this->Peliharaan->findAll();
        return view('Peliharaan/index', $data);
    }

    function tambah(): string
    {
        $data['judul'] = "Tambah Peliharaan Hewan";
        $data['title'] = "PETHSOP | Peliharaan";;
        return view('Peliharaan/tambah', $data);
    }
    function simpan()
    {
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Peliharaan->save($data);
        return redirect()->to(base_url('Peliharaan'));
    }
    function ubah($Peliharaan_id = null): string
    {
        $data['judul'] = "Ubah Peliharaan Hewan";
        $data['title'] = "PETHSOP | Peliharaan";;
        $data['item'] = $this->Peliharaan->where('Peliharaan_id', $Peliharaan_id)->first();
        return view('Peliharaan/ubah', $data);
    }
    function update()
    {
        $data = [
            'Peliharaan_id' => $this->request->getVar('Peliharaan_id'),
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Peliharaan->save($data);
        return redirect()->to(base_url('Peliharaan'));
    }

    function delete($Peliharaan_id = null)
    {
        $this->Peliharaan->delete($Peliharaan_id);
        return redirect()->to(base_url('Peliharaan'));
    }
    public function insertdata()
    {
        $PeliharaanModels = new PeliharaanModels;
        $PemilikModels = new PemilikModels;

        $dataPeliharaanModels = [
            'field1' => 'Value1',
            'field2' => 'Value2',
        ];
        $dataPemilikModels = [
            'field3' => 'Value3',
            'field4' => 'Value4',
        ];
        $db = \Config\Database::connect();
        $db->transBegin();

        try {
            // Insert ke tabel 1
            $PeliharaanModels->insert($dataPeliharaanModels);

            // Insert ke tabel 2
            $PemilikModels->insert($dataPemilikModels);

            // Commit jika berhasil
            if ($db->transStatus() === false) {
                $db->transRollback();
                return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menyimpan data']);
            } else {
                $db->transCommit();
                return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Rollback jika terjadi error
            $db->transRollback();
            return $this->response->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
