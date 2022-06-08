<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Document</title>
        <link rel="stylesheet" href="/bootstraplogin.css">
        <link rel="stylesheet" href="/teslogin.css">
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" >
        <div class="col-md-7 col-lg-5">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">	
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              {{ session('loginError') }}
            </div>
            @endif
              <div class="card mx-3 my-5 ">
                  <div class="card-body">
                    <div class="card-title">
                        <form action="/login" method="post" class="my-login-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <h3 class="text-center">Login</h3>
                                <label class="mt-5" for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                                <div class="invalid-feedback">
                                   Email yang dimasukkan salah
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password yang dimasukkan salah
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Login
                                </button>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Ingatkan Saya
                                                  <input type="checkbox" checked>
                                                  <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="w-50 text-md-right">
                                                    <a href="#">Lupa Password</a>
                                                </div>
                                </div>
                                <!-- <hr style="border-top: 1px solid grey;">
                                <a type="button" href="lupa_pass.php" class="btn btn-block btn-link mt-2">Buat akun?</a> -->
                            </div>
                        </form>
                        <hr style="border-top: 1px solid grey;">
                        <p class="text-center">Belum punya akun? <a data-toggle="tab" href="/register">Register</a></p>
                    </div>
                  </div>
                </div>
            
            
        </div>
        </div>
    </div>
</body>
</html>