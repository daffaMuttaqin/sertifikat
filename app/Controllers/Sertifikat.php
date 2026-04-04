<?php

namespace App\Controllers;

use App\Models\SertifikatModel;

class Sertifikat extends BaseController
{
    public function show($id)
    {
        $model = new SertifikatModel();
        $data = $model->find($id);

        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('sertifikat_view', ['data' => $data]);
    }
}
