@extends("layout.login")

@section("content")

<div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    
                    <div class="my-auto">
                        <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ Url('dist/images/illustration.svg') }}">
                       
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Admin Dashboard</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
					<form method="post" action="{{ Url('/admin/postLogin') }}" class="login100-form validate-form">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center"></div>
                        <div class="intro-x mt-8">
						
						@if ($errors->any())
							<div class="alert alert-danger show mb-2">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						
						@if(isset($msg)) 
							<div class="alert alert-danger show mb-2">
								<ul>
									
										<li>{{ $msg }}</li>
									
								</ul>
							</div>
						@endif
						
						
							@csrf
                            <input autofocus required type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Username" name="username">
                            <input required type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password" name="password">
							
                        </div>
                       
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                            
                        </div>
                       </form>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
@endsection		