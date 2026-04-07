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

        $filePath = FCPATH . 'uploads/' . $data['file_pdf'];

        if (!file_exists($filePath)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Kirim file PDF langsung (tanpa ubah URL)
        return $this->response->setContentType('application/pdf')
            ->setBody(file_get_contents($filePath));
    }
}
