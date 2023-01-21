<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VBarang;
use App\Kategori;
use App\Pesanan;
use App\VDetailPesanan;

class HomeController extends Controller
{
    //
	public function index()
	{
		return view('home.index');
	}
}
