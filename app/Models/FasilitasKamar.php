<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasKamar extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_kamars';
    protected $guarded = [''];

    protected function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
