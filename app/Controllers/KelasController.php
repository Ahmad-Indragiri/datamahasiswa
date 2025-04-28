<?php

namespace App\Controllers;

use App\Models\KelasModel;

class KelasController extends BaseController
{
    // Menampilkan halaman daftar kelas
    public function index()
    {
        $model = new KelasModel();
        $data['kelas'] = $model->findAll(); // Mengambil semua data kelas dari database
        return view('kelas/index', $data);
    }

    // Menampilkan halaman form tambah kelas
    public function tambah()
    {
        return view('kelas/tambah'); // Menampilkan halaman form tambah
    }

    // Proses menambah kelas
    public function tambahProses()
    {
        $model = new KelasModel();

        // Data yang akan disimpan ke dalam database
        $data = [
            'nama'       => $this->request->getPost('nama'),
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kelas'      => $this->request->getPost('kelas'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama'       => 'required',
            'kode_kelas' => 'required',
            'kelas'      => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Menyimpan data kelas ke database
        if ($model->save($data)) {
            return redirect()->to('/kelas')->with('success', 'Data kelas berhasil ditambahkan');
        } else {
            return redirect()->to('/kelas/tambah')->with('error', 'Terjadi kesalahan saat menambah data');
        }
    }

    // Menampilkan halaman edit kelas
    public function edit($id)
    {
        $model = new KelasModel();
        $data['kelas'] = $model->find($id); // Mengambil data berdasarkan id

        if (empty($data['kelas'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data kelas dengan ID $id tidak ditemukan.");
        }

        return view('kelas/edit', $data);
    }

    // Proses update kelas
    public function update($id)
    {
        $model = new KelasModel();

        // Mengambil data dari form
        $data = [
            'id'         => $id,
            'nama'       => $this->request->getPost('nama'),
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'kelas'      => $this->request->getPost('kelas'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama'       => 'required',
            'kode_kelas' => 'required',
            'kelas'      => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Update data kelas
        if ($model->save($data)) {
            return redirect()->to('/kelas')->with('success', 'Data kelas berhasil diperbarui');
        } else {
            return redirect()->to("/kelas/edit/$id")->with('error', 'Terjadi kesalahan saat memperbarui data');
        }
    }

    // Proses menghapus data kelas
    public function delete($id)
    {
        $model = new KelasModel();
        $model->delete($id);
        return redirect()->to('/kelas');
    }
}
