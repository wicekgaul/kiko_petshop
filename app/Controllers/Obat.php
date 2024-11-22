<?php

namespace App\Controllers;

use App\Models\ObatModels;

class Obat extends BaseController
{
    protected $Obat;
    // protected $Obat;
    public function __construct()
    {
        $this->Obat = new ObatModels();
        // $this->Obat = new ObatModels();
    }

    function index(): string
    {
        $data['judul'] = "Obat Hewan";
        $data['title'] = "PETSHOP | Obat";
        $data['data'] = $this->Obat->findAll();
        return view('Obat/index', $data);
    }

    function tambah(): string
    {
        $data['judul'] = "Tambah Obat Hewan";
        $data['title'] = "PETSHOP | Obat";;
        return view('Obat/tambah', $data);
    }
    function simpan()
    {
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Obat->save($data);
        return redirect()->to(base_url('Obat'));
    }
    function ubah($Obat_id = null): string
    {
        $data['judul'] = "Ubah Obat Hewan";
        $data['title'] = "PETSHOP | Obat";;
        $data['item'] = $this->Obat->where('Obat_id', $Obat_id)->first();
        return view('Obat/ubah', $data);
    }
    function update()
    {
        $data = [
            'Obat_id' => $this->request->getVar('Obat_id'),
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->Obat->save($data);
        return redirect()->to(base_url('Obat'));
    }

    function delete($Obat_id = null)
    {
        $this->Obat->delete($Obat_id);
        return redirect()->to(base_url('Obat'));
    }
}
