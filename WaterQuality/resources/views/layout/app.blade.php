<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<title>{{ config('app.name', 'laravel') }}</title>-->
    <title>Environmental agency @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
       /* Style the footer */
    footer {
        position: absolute;
        bottom:0;
        width: 100%;
        height:30px;   /* Height of the footer */
        text-align:center;
        margin-left: auto;
        margin-right: auto;
        
}
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar " style=" background-color: #006666">
            <div class="container">
                <a class="navbar-brand" style="color:white" href="{{ url('/') }}">
                    Water Quality
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                <a class="nav-link" style="color:white" href="/"><i class="fa fa-home" style="color:white"></i> Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" style="color:white" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="/">Cities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="/">Counties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white" href="/">Rivers</a>
                </li>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

              <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>-->
            </li>
        </ul>
    </div>
        </nav>
        <br>
        <div class="container" >
            <div class="row-sm-12">
              <div class="col-sm-12">
                    <form>
                      <div class="form-group row row-sm-12 pull-right">
                        <label for="" class="form-control-label" style="float:right">Search</label>
                        
                        <div class="col-sm-8">
                          <select class="form-control selectpicker" id="select-country" data-live-search="true"  data-style="btn btn-ligth" style="float:right">
                         <option data-tokens="London">London</option>
                         <option data-tokens="Manchester">Manchester</option>
                         <option data-tokens="Leeds">Leeds</option>
                          </select>
                          
                        </div>
                        <span class="input-group-btn" >
                          <button class="btn btn-success" type="button" ><i class="fa fa-search" ></i> Search</button>
                        </span>
                      </div>
                    </form>
                    <div id="map">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1-3jFUZ3ASehrggUK-zaoeTkYeAHP5f8b" width="640" height="480"></iframe>
                    </div>
                   
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

          </div>
          <!-- /.container -->   
          <br>
        @if($errors->any())
        <div>
            Errors:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    
        @endif
       
        @if (session('message'))
            <p><b class="alert alert-success">{{ session('message') }}</b></p>
        @endif 
        <br>

     <div class="container">
            @yield('content')
            <div id="footer">
                <footer>
              <p >Copyright <i class="fa fa-copyright"></i>  - All Rights reserved </p>
                </footer>
            </div>
    </div>
</div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
