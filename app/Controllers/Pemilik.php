<?php

namespace App\Controllers;

use App\Models\DokterModels;
use App\Models\PemilikModels;

class Pemilik extends BaseController
{
    protected $pemilik;
    // protected $Pemilik;
    public function __construct()
    {
        $this->pemilik = new PemilikModels();
        // $this->Pemilik = new PemilikModels();
    }

    function index(): string
    {
        $data['judul'] = "Pemilik Hewan";
        $data['title'] = "PETHSOP | Pemilik";
        $data['data'] = $this->pemilik->findAll();
        return view('pemilik/index', $data);
    }

    function tambah(): string
    {
        $data['judul'] = "Tambah Pemilik Hewan";
        $data['title'] = "PETHSOP | Pemilik";;
        return view('pemilik/tambah', $data);
    }
    function simpan()
    {
        $data = [
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->pemilik->save($data);
        return redirect()->to(base_url('Pemilik'));
    }
    function ubah($pemilik_id = null): string
    {
        $data['judul'] = "Ubah Pemilik Hewan";
        $data['title'] = "PETHSOP | Pemilik";;
        $data['item'] = $this->pemilik->where('Pemilik_id', $pemilik_id)->first();
        return view('pemilik/ubah', $data);
    }
    function update()
    {
        $data = [
            'Pemilik_id' => $this->request->getVar('Pemilik_id'),
            'Nama' => $this->request->getVar('Nama'),
            'Alamat' => $this->request->getVar('Alamat'),
            'Telepon' => $this->request->getVar('Telepon'),
            'Email' => $this->request->getVar('Email'),
        ];
        $this->pemilik->save($data);
        return redirect()->to(base_url('Pemilik'));
    }

    function delete($Pemilik_id = null)
    {
        $this->pemilik->delete($Pemilik_id);
        return redirect()->to(base_url('Pemilik'));
    }
}
