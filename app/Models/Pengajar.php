<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
   use HasFactory;

   protected $table = "guru";

   protected $fillable = [
      'name',
      'phone',
      'nuptk',
      'gelar_depan',
      'gelar_belakang',
      'gender',
      'tempat_lahir',
      'tanggal_lahir',
      'jabatan',
      'alamat',
      'agama',
      'status',

   ];
}
