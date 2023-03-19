<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonaturActive extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function bantuan(){
        return $this->belongsTo(Bantuan::class);

    }
    public function donatur(){
        return $this->belongsTo(Donatur::class);

    }
}
