<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif
      <div class="content">
          <div class="title m-b-md">
              Relations
          </div>

          <div class="links">
              <a href="{{route('proyectos')}}">Proyectos</a>
							<a href="{{route('empleados')}}">Empleados</a>
							<a href="{{route('departamentos')}}">Departamentos</a>
          </div>
          <hr><br><br>
					<div class="op">
          	@yield('content')
					</div>
      </div>
  </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
