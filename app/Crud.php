<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table ='siswa';
    protected $primaryKey ='id';
    protected $fillable =['nim','nama_siswa','tanggal_lahir'];
    public $timestamps =false;
}
