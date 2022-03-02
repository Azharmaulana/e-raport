<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/my-login.css') }}">
</head>

<body>
    <div class="login-dark">
        <form action="{{ route('siswa.create') }}" method="post" autocomplete="off">
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
				<i class="icon ion-ios-locked-outline"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="name" name="name" placeholder="Nama" value="{{ old('name') }}">
            <span class="text-danger">
                    @error('name') {{ $message }} @enderror
            </span>
            </div>
            <div class="form-group">
                <input class="form-control" type="username" name="username" placeholder="Username" value="{{ old('username') }}">
                <span class="text-danger">
                    @error('username'){{ $message }} @enderror
            </span>
            </div>
			<div class="form-group">
				<input class="form-control" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                <span class="text-danger">
			<span class="text-danger">
                    @error('email'){{ $message }} @enderror
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
				<a href="{{ route('siswa.login') }}">Have already account ? Login</a>
			</div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>