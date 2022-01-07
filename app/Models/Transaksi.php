<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['penumpang_id','jumlah','no_telp','total'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['penumpang_id','jumlah','no_telp','total'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    //membuat relasi one to many
    public function penumpangs()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\Penumpang', 'penumpang_id');
    }
}
