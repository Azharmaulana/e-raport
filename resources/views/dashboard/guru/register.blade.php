<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/my-login.css') }}">
</head>

<body>
    <div class="login-dark">
        <form action="{{ route('guru.create') }}" method="post" autocomplete="off">
            @if(Session::get('success'))
                <div class="alert alert-danger">
                    {{ Session::get('success') }}
                </div>                
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>                
            @endif
            @csrf
            <h2 class="sr-only">Register</h2>
            <div class="illustration">
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg>
            </div>
            <div class="form-group">
                <input class="form-control" type="name" name="name" placeholder="Nama" value="{{ old('name') }}">
            <span class="text-danger">
                    @error('name') {{ $message }} @enderror
            </span>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <span class="text-danger">
                    @error('email'){{ $message }} @enderror
            </span>
            </div>
			<div class="form-group">
				<input class="form-control" type="kelas" name="kelas" placeholder="Input Kelas" value="{{ old('kelas') }}">
                <span class="text-danger">
			<span class="text-danger">
                    @error('kelas'){{ $message }} @enderror
            </span>
			</div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                <span class="text-danger">
                    @error('password'){{ $message }} @enderror
                </span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Register</button>
            </div>
			<div class="link">
				<a href="{{ route('guru.login') }}">Have already account ? Login</a>
			</div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>