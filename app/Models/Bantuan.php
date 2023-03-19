<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    use HasFactory;



 protected $guarded = ['id'];

    public function penerima(){
        return $this->hasMany(Penerima::class);
    }

    public function jenis_bantuan(){
        return $this->belongsTo(JenisBantuan::class);
    }

    public function subject_bantuan(){
        return $this->belongsTo(SubjectDonatur::class);
    }

    public function donatur(){
        return $this->belongsTo(Donatur::class);
    }
    public static function boot(){
        parent::boot();

        static::deleting(function($bantuan){
            $bantuan->DetailBantuan()->delete();
        });
    }

    public function detailBantuan(){
        return $this->hasMany(DetailBantuan::class, 'bantuan_id', 'id');
    }

}

