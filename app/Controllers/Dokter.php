<?php

namespace App\Controllers;

use App\Models\DokterModels;

class Dokter extends BaseController
{
    protected $Dokter;
    // protected $dokter;
    public function __construct()
    {
        $this->Dokter = new DokterModels();
        // $this->dokter = new DokterModels();
    }

    function index(): string
    {
        $data['judul'] = "Dokter Hewan";
        $data['title'] = "PETSHOP | Dokter";
        $data['data'] = $this->Dokter->findAll();
        return view('Dokter/index', $data);
    }

    function tambah(): string
    {
        $data['judul'] = "Tambah Dokter Hewan";
        $data['title'] = "PETSHOP | Dokter";;
        return view('Dokter/tambah', $data);
    }
    function simpan()
    {
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Dokter->save($data);
        return redirect()->to(base_url('Dokter'));
    }
    function ubah($Dokter_id = null): string
    {
        $data['judul'] = "Ubah Dokter Hewan";
        $data['title'] = "PETSHOP | Dokter";;
        $data['item'] = $this->Dokter->where('Dokter_id', $Dokter_id)->first();
        return view('Dokter/ubah', $data);
    }
    function update()
    {
        $data = [
            'Dokter_id' => $this->request->getVar('Dokter_id'),
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Dokter->save($data);
        return redirect()->to(base_url('Dokter'));
    }

    function delete($Dokter_id = null)
    {
        $this->Dokter->delete($Dokter_id);
        return redirect()->to(base_url('Dokter'));
    }
}
