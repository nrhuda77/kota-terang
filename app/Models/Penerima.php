<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function detailbantuan(){
        return $this->belongsTo(DetailBantuan::class);
    }
    public function kemungkinan(){
        return $this->belongsTo(Kemungkinan::class);
    }
    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }
    public function Kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }
}
