<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- My Css  --}}
    <link href="{{ asset('assets/css/landing-page.css" rel="styleshee') }}t">
    <title>Home</title>
  </head>
  <body>
    {{--  Header  --}}
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">e-raport adalah sebuah raport siswa pada umumnya yang berbasis web.</p>
              </div>
              {{-- <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                  <li><a href="#" class="text-white">Instagram</a></li>
                  <li><a href="#" class="text-white"> Facebook</a></li>
                  <li><a href="#" class="text-white">Email</a></li>
                </ul>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="navbar navbar-dark bg-dark bg-gradient shadow-sm">
          <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <h4>e-raport</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </header>
    {{--  End Header  --}}
    
    {{--  Main area  `--}}
    <main>
      <div class="album py-5 ">
        <div class="container">
          <h2 class="text-center text-bold text-black">MASUK SEBAGAI</h2> <br>
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <h5 class="text-center ">Admin</h5>
                <a href="{{ route('admin.login') }}" class="login popup-with-form">
                <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="{{ asset('assets/images/landing-page/admin.png') }}" alt=""></a>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <h5 class="text-center">Guru</h5>
                <a href="{{ route('guru.login') }}" class="popup with-form">
                <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="{{ asset('assets/images/landing-page/guru.png') }}" alt=""></a>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <h5 class="text-center">Siswa</h5>
                <a href="{{ route('siswa.login') }}">
                <img class="bd-placeholder-img card-img-top" width="100%" height="300" src="{{ asset('assets/images/landing-page/siswa.png') }}" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    {{--  End Main area  --}}



   {{--  Script  --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{--  My Script  --}}
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>