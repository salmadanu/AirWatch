{{-- @extends('view') --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >

    <!-- Icon Font Awesome -->
    <script src="https://kit.fontawesome.com/034a66e8b9.js" crossorigin="anonymous"></script>

    <title>AIRWATCH</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-0 fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar nav-link active logo" href="#page-top">AIRWATCH</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- LOGIN -->
    <section>
      <div class="container" style="padding-top: 100px;">
        <div class="row justify-content-center">
          <div class="row">

            <!-- LOGO AIRWATCH -->
            <div class="col d-flex justify-content-center align-items-center">
                <img class="logo__pict img-fluid" src="{{ asset('img/logo.png') }}" alt="Logo Airwatch">
            </div>

            <!-- LOGIN FORM -->
            <div class="col">
                <h3>Login</h3>
                <br>

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                    
                @endif

                
                <div>
                    <label for="Username" class="form-label" style="font-weight: bold;">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control">
                    </div>

                    <label for="exampleDataList" class="form-label" style="font-weight: bold;">Password</label>
                    <div class="input-group mb-3">
                      <input type="password" name="password" class="form-control form-control-md"  id="password" required>
                    </div>

                    <p>Haven’t registered yet?
                        <span>
                            <a class="active-link" href="/register">Register Now</a>
                        </span>
                    </p>

                    <div class="d-grid gap-2">
                        <button class="btn btn__primary" type="button">Login</button>
                      </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
