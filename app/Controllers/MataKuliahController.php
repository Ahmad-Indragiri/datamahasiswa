<?php

namespace App\Controllers;

use App\Models\MataKuliahModel;

class MataKuliahController extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();
        $data['mata_kuliah'] = $model->findAll(); // Ambil semua data mata kuliah dari database
        return view('mata_kuliah/index', $data);
    }

    public function tambah()
    {
        return view('mata_kuliah/tambah');  // Menampilkan halaman form tambah
    }

    public function tambahProses()
    {
        $model = new MataKuliahModel();

        // Data yang akan disimpan ke dalam database
        $data = [
            'nama_mata_kuliah'  => $this->request->getPost('nama_mata_kuliah'),
            'kode_mata_kuliah'  => $this->request->getPost('kode_mata_kuliah'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama_mata_kuliah'  => 'required',
            'kode_mata_kuliah'  => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Menyimpan data mata kuliah ke database
        if ($model->save($data)) {
            return redirect()->to('/mata_kuliah')->with('success', 'Data mata kuliah berhasil ditambahkan');
        } else {
            return redirect()->to('/mata_kuliah/tambah')->with('error', 'Terjadi kesalahan saat menambah data');
        }
    }

    public function edit($id)
    {
        $model = new MataKuliahModel();
        $data['mata_kuliah'] = $model->find($id); // Mengambil data berdasarkan id

        if (empty($data['mata_kuliah'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data mata kuliah dengan ID $id tidak ditemukan.");
        }

        return view('mata_kuliah/edit', $data);
    }

    public function update($id)
    {
        $model = new MataKuliahModel();

        // Mengambil data dari form
        $data = [
            'id'                => $id,
            'nama_mata_kuliah'  => $this->request->getPost('nama_mata_kuliah'),
            'kode_mata_kuliah'  => $this->request->getPost('kode_mata_kuliah'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama_mata_kuliah'  => 'required',
            'kode_mata_kuliah'  => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Update data mata kuliah
        if ($model->save($data)) {
            return redirect()->to('/mata_kuliah')->with('success', 'Data mata kuliah berhasil diperbarui');
        } else {
            return redirect()->to("/mata_kuliah/edit/$id")->with('error', 'Terjadi kesalahan saat memperbarui data');
        }
    }

    public function delete($id)
    {
        $model = new MataKuliahModel();
        $model->delete($id);
        return redirect()->to('/mata_kuliah')->with('success', 'Data mata kuliah berhasil dihapus');
    }
}
