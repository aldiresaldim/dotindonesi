<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use Validator;
use Auth;

class BarangController extends Controller
{
    //
	public function index()
	{
		$search = request()->input("search");
		$data = Barang::whereRaw("nama_barang like '%$search%'")->orderBy("nama_barang", "asc")->get();
		$userId = Auth::user()->id;

		return view('barang.index', compact('data', 'search'));
	}
	
	
	public function delete(Request $r)
	{
		$id = $r->input("id");
		$model = Barang::find($id);
		if($model) $model->delete();
		
		return redirect()->back();
	}
	
	public function add()
	{
		
		$kategori = Kategori::orderBy("nama_kategori")->get();
		return view('barang.add', compact('kategori'));
	}
	
	public function edit($id)
	{
		$data = Barang::find($id);
		$kategori = Kategori::orderBy("nama_kategori")->get();
		
		return view('barang.edit', compact('data', 'kategori'));
	}
	
	
	public function store(Request $r)
	{
		Validator::make($r->all(),[
            "kode_barang" => "required|max:30|unique:barang,kode_barang",
            "nama_barang" => "required|max:30",
			"id_kategori" => "required",
			"harga" => "required",
			"stok" => "required",
			"satuan" => "required",
            
        ], [
            
        ])->validate();
		$model = new Barang;
		$model->nama_barang = $r->nama_barang;
		$model->kode_barang = $r->kode_barang;
		$model->harga = str_replace(",", "", $r->harga);
		$model->satuan = $r->satuan;
		$model->id_kategori = $r->id_kategori;
		$model->stok = $r->stok;
		
		
		$model->save();
		
		return redirect("admin/barang");
	}
	
	public function update(Request $r)
	{
		Validator::make($r->all(),[
            "kode_barang" => "required|max:30",
            "nama_barang" => "required|max:30",
			"id_kategori" => "required",
			"harga" => "required",
			"stok" => "required",
			"satuan" => "required",
            
        ], [
            
        ])->validate();
		$model = Barang::find($r->id);
		$model->nama_barang = $r->nama_barang;
		$model->kode_barang = $r->kode_barang;
		$model->harga = str_replace(",", "", $r->harga);
		$model->satuan = $r->satuan;
		$model->id_kategori = $r->id_kategori;
		$model->stok = $r->stok;
		
		$model->save();
		
		return redirect("admin/barang");
	}
}

