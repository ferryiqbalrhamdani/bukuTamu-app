<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-primary">
    {{-- login --}}
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h1 class="text-center my-3">Buku Tamu App</h1>

                    </div>
                    <div class="card-body">
                        <div class="p-4 p-md-5">
                           

                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik">
                                </div>
                                <div class="mb-5">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary form-control">Login</button>
                            </form>
                            <p class="my-3">Belum punya akun?<a href="">Daftar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir login --}}
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>