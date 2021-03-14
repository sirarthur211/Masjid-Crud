<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = ['NIK','Nama','Tempat_TanggalLahir','JenisKelamin','GolonganDarah','Alamat','RT_RW','Kel_Desa','Kecamatan','Agama','StatusPerkawinan','Pekerjaan','Kewarganegaraan','BerlakuHingga'];
}
