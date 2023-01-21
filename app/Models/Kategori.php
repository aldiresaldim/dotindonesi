<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
	protected $table = "kategori";
	
	public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
