<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pendaftaran</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/vendor/chartist/css/chartist-custom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <h2><strong>Pendaftaran Member Warung</strong></h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <form method="POST" action="{{ route('register') }}" class="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="name" type="text" placeholder="Masukkan Nama Anda...."
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input id="email" type="email" placeholder="Masukkan Email Anda...."
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input id="alamat" type="text" placeholder="Masukkan alamat anda...."
                                class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                value="{{ old('alamat') }}" required autocomplete="alamat">

                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <select class="form-select btn btn-primary"  id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value=" ">Gender...</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="nomor"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <div class="input-group">
                            <span class="input-group-text">+62</span>
                            <input id="nomor" type="number" placeholder="Masukkan nomor anda...."
                                class="form-control @error('nomor') is-invalid @enderror" name="nomor"
                                value="{{ old('nomor') }}" required autocomplete="nomor">
                            </div>
                            @error('nomor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input id="password" type="password" placeholder="Masukkan Password Anda...."
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input id="password-confirm" type="password" placeholder="Masukkan Password Anda Lagi...."
                                class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" class="btn btn-primary form-submit">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::asset('js/boostrap-bundle-min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
</body>

</html>
