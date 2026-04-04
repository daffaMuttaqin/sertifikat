<?php

namespace App\Controllers;

use App\Models\SertifikatModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new SertifikatModel();
        $data['sertifikat'] = $model->findAll();

        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        // 🔹 VALIDASI (LETAKKAN DI ATAS)
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nomor' => 'required',
            'pdf' => 'uploaded[pdf]|ext_in[pdf,pdf]|max_size[pdf,10240]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('error', 'Upload gagal! Pastikan file PDF & max 10MB');
        }

        // 🔹 AMBIL DATA
        $model = new SertifikatModel();
        $nomor = $this->request->getPost('nomor');

        // 🔹 BERSIHKAN NAMA FILE
        $namaFile = preg_replace('/[^A-Za-z0-9\-]/', '_', $nomor);

        $file = $this->request->getFile('pdf');

        if ($file->isValid() && !$file->hasMoved()) {

            $ext = $file->getExtension();
            $namaFileFinal = $namaFile . '.' . $ext;

            // 🔹 CEK DUPLIKAT FILE (OPSIONAL TAPI BAGUS)
            if (file_exists('uploads/' . $namaFileFinal)) {
                return redirect()->back()->with('error', 'Nomor sertifikat sudah ada!');
            }

            // 🔹 UPLOAD FILE
            $file->move('uploads', $namaFileFinal);

            // 🔹 SIMPAN KE DATABASE
            $model->save([
                'nomor_sertifikat' => $nomor,
                'file_pdf' => $namaFileFinal
            ]);
        }

        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new SertifikatModel();
        $model->delete($id);

        return redirect()->to('/admin');
    }
}
