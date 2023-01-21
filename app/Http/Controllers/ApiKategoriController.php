<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Auth;
use Validator;

class ApiKategoriController extends Controller
{
    //
	public function index()
	{

		$search = request()->input("search");
		$data = Kategori::whereRaw("nama_kategori like '%$search%'")->orderBy("nama_kategori", "asc")->get();
		return response()->json([
			'success' => true,
			'data' => $data,
		]);
	}
	
	
	public function get($id)
	{
		$model = Kategori::find($id);
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
		$model = Kategori::find($id);
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

		
		$model = new Kategori;
		$model->nama_kategori = $r->nama_kategori;
		$model->kode_kategori = $r->kode_kategori;
		$model->save();
		
		return response()->json([
				'success' => false,
				'data'=>$model,
				
			]);
	}
	
	public function update(Request $r, $id)
	{

		
		$model = Kategori::find($r->id);
		if(!$model)
		{
			return response()->json([
				'success' => false,
				'message'=>'Not found!'
				
			]);
		}
		$model->nama_kategori = $r->nama_kategori;
		$model->kode_kategori = $r->kode_kategori;
		$model->save();
		
		return response()->json([
				'success' => false,
				'data'=>$model,
				
			]);
	}
}

