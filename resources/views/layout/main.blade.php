<!DOCTYPE html>


<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ Url('dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Admin Dashboard</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ Url('dist/css/app.css') }}" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
        <script src="{{ Url('dist/js/app.js') }}"></script>
		<style>
			.error {
				color:red;
			}
			</style>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                  
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard  </div>
                    </a>
                   
                </li>
              
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                 
                    <span class="hidden xl:block text-white text-lg ml-3"> A<span class="font-medium">DMIN</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{ Url('/admin/') }}" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                               
                            </div>
                        </a>
                        
                    </li>
                  	 <li>
                                <a href="{{ Url('/admin/kategori') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="truck"></i> </div>
                                    <div class="side-menu__title"> Kategori </div>
                                </a>
                            </li>
					
							
                            <li>
                                <a href="{{ Url('/admin/barang') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                    <div class="side-menu__title"> Barang </div>
                                </a>
                            </li>
							 
							
				
					
                    
					
                     <li>
                        <a href="{{ Url('/admin/logout') }}" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="exit"></i> </div>
                            <div class="side-menu__title">
                                Logout 
                               
                            </div>
                        </a>
                        
                    </li>
                    
                   
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <div class="search hidden sm:block">
                           
                        </div>
                        <a class="notification sm:hidden" href=""> <i data-feather="search" class="notification__icon dark:text-gray-300"></i> </a>
                        
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                   
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                       
                        <div class="dropdown-menu w-56">
                            <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                                <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                    <div class="font-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Administrator</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                   
                                </div>
                                <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                
                <input type="hidden" value="{{ date('Y-m-d H:i:s') }}" id="current_time"/>
                <!-- END: Top Bar -->
				@yield("content")
                
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<script src="https://cdn.ckeditor.com/4.20.0/basic/ckeditor.js"></script>
        <script>
            $(document).ready(function()
            {
               $("select").select2(); 
			    CKEDITOR.replace( 'about' );
            });
        </script>
		  <script type="text/javascript">
			$(function () {
				$(".number").on('keyup', function () {
					if($(this).val() != "")
					$(this).val(numberWithCommas(parseFloat($(this).val().replace(/,/g, ""))));
				});
				$(".number").trigger("keyup");
			});
			function numberWithCommas(x) {
				return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}
		</script>
        <!-- END: JS Assets-->
    </body>
</html>