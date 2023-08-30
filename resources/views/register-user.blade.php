<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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

    <!-- REGISTER -->
    <section>
      <div class="container" style="padding-top: 80px; margin-bottom: 80px;">
            <h3>Register</h3>
            <br>
            <div>
                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Company’s name</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Email</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Password</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Confirm Password</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Company’s Headquarters Address</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Company's Logo</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>

                <label for="exampleDataList" class="form-label" style="font-weight: bold;">Company’s Phone Number</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div>
                    <a href="/">
                        <div class="d-grid gap-2">
                        <button class="btn btn__primary" type="button">Submit</button>
                        </div>
                    </a>
                </div>
            </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>