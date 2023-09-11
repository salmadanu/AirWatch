<!DOCTYPE html>
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
            <a class="navbar nav-link active logo" href="/login">AIRWATCH</a>
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
            <form action="/register" method="post">
            @csrf
            <div>
                <label for="nama_perusahaan" class="form-label" style="font-weight: bold;">Company’s name</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Nama perusahaan</p>
                <div class="input-group mb-3">
                    <input type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan">
                </div>
                
                <label for="email_perusahaan" class="form-label" style="font-weight: bold;">Company's Email</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Email perusahaan</p>
                <div class="input-group mb-3">
                    <input type="email" name="email_perusahaan" class="form-control @error('email_perusahaan') is-invalid @enderror" id="email_perusahaan">
                </div>

                <label for="username_perusahaan" class="form-label" style="font-weight: bold;">Username</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Username untuk akun perusahaan</p>
                <div class="input-group mb-3">
                    <input type="text" name="username_perusahaan" class="form-control @error('username_perusahaan') is-invalid @enderror" id="username_perusahaan">
                </div>

                <label for="password_perusahaan" class="form-label" style="font-weight: bold;">Password</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Password untuk akun perusahaan</p>
                <div class="input-group mb-3">
                    <input type="password" name="password_perusahaan" class="form-control @error('password_perusahaan') is-invalid @enderror" id="password_perusahaan">
                </div>

                <label for="provinsi_perusahaan" style="font-weight: bold;">Company’s Province</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Provinsi kantor pusat perusahaan</p>
                <select class="form-select mb-3 @error('provinsi_perusahaan') is-invalid @enderror" id="provinsi_perusahaan" name="provinsi_perusahaan" aria-label="Company's Province" style="font-weight: bold;">
                    <option value="" selected></option>
                    <option value="banten">Banten</option>
                    <option value="dki_jakarta">DKI</option>
                </select>
                
                <label for="kabupaten_perusahaan" style="font-weight: bold;">Company’s Regency</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Kabupaten kantor pusat perusahaan</p>
                <select class="form-select mb-3 @error('kabupaten_perusahaan') is-invalid @enderror" id="kabupaten_perusahaan" name="kabupaten_perusahaan" aria-label="Company's Regency" style="font-weight: bold;">
                    <option value="" selected></option>
                    <option value="banten">Banten</option>
                    <option value="dki_jakarta">DKI</option>
                </select>
                

                <label for="alamat_perusahaan" class="form-label" style="font-weight: bold;">Company’s Headquarters Full Address</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Alamat kantor pusat perusahaan</p>
                <div class="input-group mb-3">
                    <input type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" id="alamat_perusahaan">
                </div>

                <label class="form-label" style="font-weight: bold;">Company's Logo</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Logo perusahaan</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control @error('logo_perusahaan') is-invalid @enderror" name="logo_perusahaan" id="inputGroupFile02">
                </div>                

                <label for="nomor_telfon_perusahaan" class="form-label" style="font-weight: bold;">Company’s Phone Number</label>
                <p style="font-size: 14px; font-style: italic; color: gray;">Nomor telfon kantor pusat perusahaan</p>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                    <input type="text" name="nomor_telfon_perusahaan" class="form-control @error('nomor_telfon_perusahaan') is-invalid @enderror" aria-describedby="basic-addon1">
                </div>

                <div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </a>
                </div>
            </div>
        </form>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>