<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Auth;
use Validator;

class KategoriController extends Controller
{
    //
	public function index()
	{

		$search = request()->input("search");
		$data = Kategori::whereRaw("nama_kategori like '%$search%'")->orderBy("nama_kategori", "asc")->get();
		$userId = Auth::user()->id;

		return view('kategori.index', compact('data', 'search'));
	}
	
	
	public function delete(Request $r)
	{
		$id = $r->input("id");
		$model = Kategori::find($id);
		if($model) $model->delete();
		
		return redirect()->back();
	}
	
	public function add()
	{
		
		
		return view('kategori.add');
	}
	
	public function edit($id)
	{
		$data = Kategori::find($id);
		
		return view('kategori.edit', compact('data'));
	}
	
	
	public function store(Request $r)
	{
		Validator::make($r->all(),[
            "kode_kategori" => "required|max:30|unique:kategori,kode_kategori",
            "nama_kategori" => "required|max:30",
            
        ], [
            
        ])->validate();
		
		$model = new Kategori;
		$model->nama_kategori = $r->nama_kategori;
		$model->kode_kategori = $r->kode_kategori;
		$model->save();
		
		return redirect("admin/kategori");
	}
	
	public function update(Request $r)
	{
		Validator::make($r->all(),[
            "kode_kategori" => "required|max:30",
            "nama_kategori" => "required|max:30",
            
        ], [
            
        ])->validate();
		
		$model = Kategori::find($r->id);
		$model->nama_kategori = $r->nama_kategori;
		$model->kode_kategori = $r->kode_kategori;
		$model->save();
		
		return redirect("admin/kategori");
	}
}

