<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Finance Technology EAD</title>

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">  
    <link href="{{asset('css/half-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/everything.css')}}" rel="stylesheet">
    <link href="{{asset('asset/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Finance Technology</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/myTabungan')}}">MyTabungan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <?php if (Auth::guest()): ?>
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/login')}}">Login</a>
              </li>
            <?php else: ?>
              <li class="nav-item ">
                <a class="nav-link" href="{{ url('/logout')}}">Logout</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{ asset('asset/image/1.jpg') }}');">
            <div class="carousel-caption d-none d-md-block">
              <h3>Finance Technology</h3>
              <p>Web Bertemakan Finance</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('asset/image/2.jpg') }}');">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: #000000;">Tabungan Pelajar</h3>
              <p style="color: #000000;">Ayo Mendaftar Dari dini!</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('asset/image/3.png') }}');">
            <div class="carousel-caption d-none d-md-block">
              <h3>Tabungan Rencana</h3>
              <p>Anda memiliki mimpi di masa depan, ayo menabung dari sekarang]</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>


    @yield("sub_menu")

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Kelompok 11 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    

  </body>
</html>
