<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    // Menampilkan halaman daftar mahasiswa
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll(); // Mengambil semua data mahasiswa dari database
        return view('mahasiswa/index', $data);
    }

    // Menampilkan halaman form tambah mahasiswa
    public function tambah()
    {
        return view('mahasiswa/tambah');  // Menampilkan halaman form tambah
    }

    // Proses menambah mahasiswa
    public function tambahProses()
    {
        $model = new MahasiswaModel();

        // Data yang akan disimpan ke dalam database
        $data = [
            'nama'   => $this->request->getPost('nama'),
            'NPM'    => $this->request->getPost('NPM'),
            'alamat' => $this->request->getPost('alamat'),
            'email'  => $this->request->getPost('email'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama'   => 'required',
            'NPM'    => 'required',
            'alamat' => 'required',
            'email'  => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Menyimpan data mahasiswa ke database
        if ($model->save($data)) {
            return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan');
        } else {
            return redirect()->to('/mahasiswa/tambah')->with('error', 'Terjadi kesalahan saat menambah data');
        }
    }

    // Menampilkan halaman edit mahasiswa
    public function edit($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id); // Mengambil data berdasarkan id

        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data mahasiswa dengan ID $id tidak ditemukan.");
        }

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $model = new MahasiswaModel();

        // Mengambil data dari form
        $data = [
            'id'     => $id,
            'nama'   => $this->request->getPost('nama'),
            'NPM'    => $this->request->getPost('NPM'),
            'alamat' => $this->request->getPost('alamat'),
            'email'  => $this->request->getPost('email'),
        ];

        // Validasi input
        if (!$this->validate([
            'nama'   => 'required',
            'NPM'    => 'required',  // Menggunakan pengecualian untuk NPM yang sudah ada
            'alamat' => 'required',
            'email'  => 'required',
        ])) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Update data mahasiswa
        if ($model->save($data)) {
            return redirect()->to('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui');
        } else {
            return redirect()->to("/mahasiswa/edit/$id")->with('error', 'Terjadi kesalahan saat memperbarui data');
        }
    }


    // Proses menghapus data mahasiswa
    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to('/mahasiswa');
    }
}
