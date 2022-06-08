<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstraplogin.css">
    <link rel="stylesheet" href="/teslogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
        
          <div class="col-md-7 col-lg-5">
           
              <div class="card mx-3 my-5" >
                  <div class="card-body">
                    <div class="card-title">
                        <form action="/register" method="post" class="my-login-validation">
                            @csrf
                            <div class="form-group">
                                <h3 class="text-center">Register</h3>
                                <label class="mt-5" for="nama">Nama</label>
                                <input id="nama" type="text" class="form-control" name="name" required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan isi nama anda
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                                <div class="invalid-feedback">
                                    Email invalid
                                </div>
                            </div>
                            
                           

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password dibutuhkan
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="password">Konfirmasi Password</label>
                              <input id="password" type="password" class="form-control" name="password" required data-eye>
                              <div class="invalid-feedback">
                                  Password tidak sesuai
                              </div>
                          </div>
                            <div class="form-group">
                              <label for="status">Pengguna</label>
                              <select class="form-select form-control my-3" aria-label="Default select example" id="status" name="status">
                                <option value="penulis">Penulis</option>
                                <option value="pembaca">Pembaca</option>

                              </select>
                              {{-- <input type="radio" name="status" id="status" value="pembaca" class="form-control">
                              <label for="pembaca">Pembaca</label>
                              <input type="radio" name="status" id="status" value="penulis" class="form-control">
                              <label for="penulis">Penulis</label> --}}
                                
                                <br>
                               
                              <div class="invalid-feedback">
                                  Silahkan Jenis pengguna
                              </div>
                          </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              
            
            </div>
        </div>
    </div>
</body>
</html>