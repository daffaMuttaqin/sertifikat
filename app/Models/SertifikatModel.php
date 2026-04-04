<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table = 'sertifikat';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nomor_sertifikat',
        'file_pdf'
    ];
}
