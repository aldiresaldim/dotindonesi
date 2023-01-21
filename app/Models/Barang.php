<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
	protected $table = "barang";
	
	public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
