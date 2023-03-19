<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBantuan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function penerima(){
        return $this->belongsTo(Penerima::class);
    }

    public function bantuan(){
        return $this->belongsTo(Bantuan::class);
    }

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }
    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }
}
