<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>La Pausa</title>
      
      <!-- Bootstrap 4 -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Styles -->
      <link href="{{ asset('css/lapausa.css') }}" rel="stylesheet">
    </head>
<body>
    

    <div class="container-fluid">
            <div class="row">
              <nav class="col-md-2 d-none d-md-block bg-1 sidebar h100 p-0">
                <div class="sidebar-sticky h-100">
                  @include('layouts.dashboard_menu')
                </div>
              </nav>
          
              <main role="main" class="col-md-9 ml-sm-auto col-lg-10 bg-5">
                <div class="row">
                  <nav class="col-12 py-2 bg-light"> 
                    <ul class="nav d-flex justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                 {{-- Content --}}
                <div class="row justify-content-center py-5">                                 
                 <div class="col-11">
                  @yield('content')
                 </div>
                </div>
              </main>
            </div>
          </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
