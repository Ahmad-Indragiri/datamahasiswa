<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengecek apakah user sudah login atau belum
        $session = session();
        if (!$session->has('username')) {
            return redirect()->to('/login');
        }

        // Mengambil data user jika perlu
        $data = [
            'username' => $session->get('username'),
        ];

        // Menampilkan view dashboard
        return view('dashboard', $data);
    }
}
