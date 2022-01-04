<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama_KA', 'asal_id', 'tujuan_id'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama_KA', 'asal_id', 'tujuan_id'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    //membuat relasi one to many
    public function asals()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\asal', 'asal_id');
    }
    public function tujuans()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\tujuan', 'tujuan_id');
    }

    public function penumpangs()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->hasMany('App\Models\Penumpang', 'kereta_id');
    }
}
