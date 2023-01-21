@extends("layout.main")

@section("content")
 <!-- END: Top Bar -->
	<div class="intro-y flex items-center mt-8">
		<h2 class="text-lg font-medium mr-auto">
			Update Barang
		</h2>
	</div>
	<div class="grid grid-cols-12 gap-6 mt-5">
	   
		<div class="intro-y col-span-12 lg:col-span-12">
		   
			<!-- END: Table Head Options -->
			<!-- BEGIN: Responsive Table -->
			<div class="intro-y box mt-5">
				<div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
					<h2 class="font-medium text-base mr-auto">
						Barang
					</h2>
					
				</div>
				<div class="p-5" id="responsive-table">
					<div class="preview">
						<div id="input" class="p-5">
                                <div class="preview">
								
								 @if($errors->any())
            <div class="error">
                    <ul> <!-- unordered list -->
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                    <ul>
            </div>
        @endif
								
								<form name="f1" enctype="multipart/form-data" method="post" action="{{ Url('/admin/barang/update') }}">
								@csrf
								<input type="hidden" name="id" value="{{ $data->id }}"/>
							<div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Kategori</label>
                                        <select name="id_kategori" class="form-control" required>
											<option value="">-Select Kategori-</option>
											@foreach($kategori as $b) 
												<option @if($b->id == $data->id_kategori) {{ "selected" }} @endif value="{{ $b->id }}">{{ $b->nama_kategori }}</option>
											@endforeach
										</select>
                                    </div>
							
								
                                   <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Kode Barang</label>
                                        <input name="kode_barang" autofocus required id="regular-form-1" value="{{ $data->kode_barang }}" type="text" class="form-control" placeholder="">
                                    </div>
                                       <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Nama Barang</label>
                                        <input name="nama_barang" value="{{ $data->nama_barang }}" required id="regular-form-1" type="text" class="form-control" placeholder="">
                                    </div>
									 <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Satuan</label>
                                        <input name="satuan" value="{{ $data->satuan }}"  required id="regular-form-1" type="text" class="form-control" placeholder="">
                                    </div>
									  <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Harga</label>
                                        <input name="harga" type="text" min="0" value="{{ $data->harga }}"  required id="regular-form-1" type="text" class="number form-control" placeholder="">
                                    </div>
									  <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Stok</label>
                                        <input name="stok" type="text" min="0" value="{{ $data->stok }}"  required id="regular-form-1" type="text" class="number form-control" placeholder="">
                                    </div>
									<hr/>
								
								
	 
	 <div class="mt-6">
	
													<button type="submit" class="btn btn-sm btn-primary w-24 mr-1 mb-2">Submit</button></td>
	 </div>
	 
	 </form>
                                    </div>
                                  
                                </div>
                                
                            </div>
					</div>
				   
				</div>
			</div>
			<!-- END: Responsive Table -->
			
		</div>
	</div>
</div>
<!-- END: Content -->

@endsection