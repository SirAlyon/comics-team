<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('custom-css')

</head>

<body>
    

    <header>
        @include('partials.header')
    </header>

    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="col-3">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('admin.dashboard')}}">
                                
                                Dashboard
                              </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin.characters.index')}}">
                                  Characters
                                </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('admin.comics.index')}}">
                                Comics
                              </a>
                          </li>
            
                          <li class="nav-item">
                            <a class="nav-link" href="">
                              Series
                            </a>
                        </li>
                          </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-9">
                    @yield('content')
                </div>
            </div>
        </div>
        

    </main>


    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>