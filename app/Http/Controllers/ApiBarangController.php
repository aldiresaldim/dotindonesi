<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Auth;
use Validator;

class ApiBarangController extends Controller
{
    //
	public function index()
	{

		$search = request()->input("search");
		$data = Barang::whereRaw("nama_barang like '%$search%'")->orderBy("nama_barang", "asc")->get();
		return response()->json([
			'success' => true,
			'data' => $data,
		]);
	}
	
	
	public function get($id)
	{
		$model = Barang::find($id);
		if($model) 
		{
			
		
			return response()->json([
				'success' => true,
				'data' => $model,
			]);
		}
		else
		{
			return response()->json([
				'success' => false,
				'message'=>'Not found!'
				
			]);
		}
	}
	
	public function delete($id)
	{
		$model = Barang::find($id);
		if($model) 
		{
			$model->delete();
		
			return response()->json([
				'success' => true,
				
			]);
		}
		else
		{
			return response()->json([
				'success' => false,
				'message'=>'Not found!'
				
			]);
		}
	}
	
	
	public function store(Request $r)
	{

		
		$model = new Barang;
		$model->nama_barang = $r->nama_barang;
		$model->kode_barang = $r->kode_barang;
		$model->harga = str_replace(",", "", $r->harga);
		$model->satuan = $r->satuan;
		$model->id_kategori = $r->id_kategori;
		$model->stok = $r->stok;
		$model->save();
		
		return response()->json([
				'success' => false,
				'data'=>$model,
				
			]);
	}
	
	public function update(Request $r, $id)
	{

		
		$model = Barang::find($r->id);
		if(!$model)
		{
			return response()->json([
				'success' => false,
				'message'=>'Not found!'
				
			]);
		}
		$model->nama_barang = $r->nama_barang;
		$model->kode_barang = $r->kode_barang;
		$model->harga = str_replace(",", "", $r->harga);
		$model->satuan = $r->satuan;
		$model->id_kategori = $r->id_kategori;
		$model->stok = $r->stok;
		$model->save();
		
		return response()->json([
				'success' => false,
				'data'=>$model,
				
			]);
	}
}

