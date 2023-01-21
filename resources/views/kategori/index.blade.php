@extends("layout.main")

@section("content")
 <!-- END: Top Bar -->
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Master Data
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
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <a href="{{ Url('/admin/kategori/add') }}" class="btn btn-sm btn-primary w-24 mr-1 mb-2">Tambah</a>
                                </div>
                            </div>
                            <div class="p-5" id="responsive-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <form enctype="multipart/form-data"  method="get" action="">
							
								
								
                                   <div class="mt-3 ml-3 mb-3 mr-3">
                                        <label for="regular-form-1" class="form-label">Cari</label>
                                        <input name="search" value="{{$search}}" autofocus required id="regular-form-1" type="text" class="form-control" placeholder="">
                                    </div>
										<button type="submit" class="ml-3 btn btn-sm btn-primary w-24 mr-1 mb-2">Search</button>
									</form>
									
									<br/>
                                        <table class="table mt-3">
                                            <thead>
                                                <tr>
                                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
													 <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Kode Kategori</th>
                                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Nama Kategori</th>
                                                 
                                                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											@foreach($data as $d) 
                                                <tr>
                                                    <td class="border-b whitespace-nowrap">{{ $loop->index + 1 }}</td>
													
                                                    <td class="border-b whitespace-nowrap">{{ $d->kode_kategori }}</td>
													<td class="border-b whitespace-nowrap">{{ $d->nama_kategori }}</td>
                                                    <td class="border-b whitespace-nowrap">
													<a href="{{ Url('/admin/kategori/edit/' . $d->id) }}" class="btn btn-sm btn-success w-24 mr-1 mb-2">Update</a>
													<form action="{{ Url('/admin/kategori/delete') }}" method="post">
													    	@csrf
													    	<input type="hidden" name="id" value="{{ $d->id }}"/>
													<button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger w-24 mr-1 mb-2">Delete</button>
													</form></td>
                                                    
                                                </tr>
                                             @endforeach
                                            </tbody>
                                        </table>
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