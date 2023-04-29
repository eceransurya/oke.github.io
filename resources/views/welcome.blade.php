<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tes</title>
    <script src="{{ asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-lg-2 bg-opacity-50" id="mainNav">
        <div class="container-fluid bg-opacity-50">
          <a href="#" class="navbar-brand">
            <img src="{{('img/logo1.jpg')}}" alt="" width="100" height="90" class="rounded-circle" style=" box-shadow: 5px 5px;" >
          
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#gas" aria-controls="gas" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
          </button>
  
          <div class="collapse navbar-collapse" id="gas">
            <ol class="navbar-nav mx-auto">
              <li class="nav-item px-lg-4 ">
              <a href="index.php" class="nav-link text-uppercase"> 
                home
              </a> 
              </li>
              <li class="nav-item px-lg-4">
                <a href="about.php" class="nav-link text-uppercase"> 
                    about
                  </a> 
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    menu
                    </a>
                    <ul class="dropdown-menu" id="drop">
                      <li><a class="dropdown-item text-uppercase" href="makan.php">makan</a></li>
                      <li><a class="dropdown-item text-uppercase" href="minum.php">minum</a></li>
                      <li><a class="dropdown-item text-uppercase" href="camilan.php">cemilan</a></li>
                    </ul>
                  </li>
                  <li class="nav-item px-lg-4 ">
                    <a href="STORE.php" class="nav-link text-uppercase"> 
                store
              </a> 
              </li>
              @guest
              @if (Route::has('login'))
              @auth
              <li class="nav-item px-lg-4 ">
              <a href="{{ url('/home') }}" class="nav-link text-uppercase">Home</a>
              </li>
              
              @else
              <li class="nav-item px-lg-4 ">
                <a href="{{ route('login') }}" class="nav-link text-uppercase">Log in</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item px-lg-4 ">
                        <a href="{{ route('register') }}" class="nav-link text-uppercase">Register</a>
                    </li>
                        @endif
                    @endauth
              @endif
              @endguest
            </ol>
          </div>
          
        <form class="d-flex" role="PESEN OPO ?">
        <input class="form-control me-2" type="PESEN OPO ?" placeholder="PESEN OPO ?" aria-label="PESEN OPO ?">
          <a href="login.php"><button class="btn btn-success" type="submit">
            GOLEK
            </button></a>
            </form>
                  </div>
          </nav>
          
       <!-- end navbar -->
       <script src="{{asset('js/app.js')}}"></script>
</body>
</html>