<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ArtMula - Control Panel</title>
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    @yield('scripts')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


<body>    
  <section id="container">     
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('admin/dashboard') }}" class="logo"><b>ArtMula</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                   
					<li><a class="logout" href="{{ route('logout') }}"  onclick="event.preventDefault();                                document.getElementById('logout-form').submit();">Logout</a></li>
            	</ul>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
                </form>

            </div>
        </header>
      <!--header end-->
      
     
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">             
              <ul class="sidebar-menu" id="nav-accordion">
                  
				  <li>
                      <a href="{{ asset('/admin/dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  
				   <li>
                      <a href="{{ asset('/admin/members') }}">
                          <i class="fa fa-user"></i>
                          <span>Manage members</span>
                      </a>
                  </li>  

				   <li>
                      <a href="{{ asset('/admin/siteoptions') }}">
                          <i class="fa fa-cogs"></i>
                          <span>Manage Site Options</span>
                      </a>
                  </li> 

				  <li>
                      <a href="{{ asset('/admin/paymentoptions') }}">
                          <i class="fa fa-credit-card"></i>
                          <span>Manage Payment Options</span>
                      </a>
                  </li> 

				  <li>
                      <a href="{{ asset('/admin/page') }}">
                         <i class="fa fa-book"></i>
                          <span>Manage Pages</span>
                      </a>
                  </li> 

                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Manage Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="">Blank Page</a></li>
                          <li><a  href="">Login</a></li>
                          <li><a  href="">Lock Screen</a></li>
                      </ul>
                  </li>-->

              </ul>              
          </div>
      </aside>
      <!--sidebar end-->
      
     
	   <!--=============================================-->
        <main class="py-4">
            @yield('content')
        </main>
	   <!--=============================================-->

<!-- Footer -->
      <footer class="site-footer">
          <div class="text-center">
              &copy;<?php echo date('Y'); ?> - Crafted with <i class="fa fa-heart" aria-hidden="true" style="color:red"></i> by <a href="https://www.roastedweb.com/" target="_blank" style="color:red">Roasted web</a>
              
          </div>
      </footer>      
  </section>

   
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

<!-- Footer -->
</body>
</html>