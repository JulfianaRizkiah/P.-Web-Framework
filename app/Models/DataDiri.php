<?php

namespace App\Models;
use CodeIgniter\Model;
Class DataDiri extends Model
{
	protected $table = 'datadiri';
	protected $primarykey = 'npm';
	protected $allowedFields = ['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'nohp', 'email'];
}