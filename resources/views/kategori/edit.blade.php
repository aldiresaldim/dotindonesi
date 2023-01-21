@extends("layout.main")

@section("content")
 <!-- END: Top Bar -->
	<div class="intro-y flex items-center mt-8">
		<h2 class="text-lg font-medium mr-auto">
			Update Kategori
		</h2>
	</div>
	<div class="grid grid-cols-12 gap-6 mt-5">
	   
		<div class="intro-y col-span-12 lg:col-span-12">
		   
			<!-- END: Table Head Options -->
			<!-- BEGIN: Responsive Table -->
			<div class="intro-y box mt-5">
				<div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
					<h2 class="font-medium text-base mr-auto">
						Kategori
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
								
								<form method="post" action="{{ Url('/admin/kategori/update') }}">
								@csrf
								<input type="hidden" name="id" value="{{ $data->id }}"/>
							
								
                                   <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Kode Kategori</label>
                                        <input name="kode_kategori" autofocus required id="regular-form-1" value="{{ $data->kode_kategori }}" type="text" class="form-control" placeholder="">
                                    </div>
                                       <div class="mt-3">
                                        <label for="regular-form-1" class="form-label">Nama Kategori</label>
                                        <input name="nama_kategori" value="{{ $data->nama_kategori }}" required id="regular-form-1" type="text" class="form-control" placeholder="">
                                    </div>
	 
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