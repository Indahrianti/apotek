<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['tujuan_brangkat'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['tujuan_brangkat'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    //membuat relasi one to many
    public function tujuans()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->hasMany('App\Models\Kereta', 'tujuan_id');
    }
}
