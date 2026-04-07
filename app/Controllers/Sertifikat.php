<?php

namespace App\Controllers;

use App\Models\SertifikatModel;

class Sertifikat extends BaseController
{
    public function show($nomor)
    {
        $model = new SertifikatModel();

        $data = $model->where('nomor_sertifikat', $nomor)->first();

        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('sertifikat_view', ['data' => $data]);
    }
}
