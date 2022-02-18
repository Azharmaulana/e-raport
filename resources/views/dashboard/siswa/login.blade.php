<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="{{ route('siswa.create') }}" method="POST" autocomplete="off">
					@if(Session::get('success'))
					<div class="alert alet-success">
						{{ Session::get('success') }}
					</div>
					@endif
					@if(Session::get('fail'))
					<div class="alert alet-danger">
						{{ Session::get('fail') }}
					</div>
					@endif
					@csrf
					<label aria-hidden="true">Siswa Register</label>
					<input type="text" name="name" placeholder="Name" required="" value="{{ old('name') }}" autofocus>
					<input type="text" name="username" placeholder="User name" required="" value="{{ old('username') }}" autofocus>
					<input type="email" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
					<span class="text-center"> 
						@error('email'){{ $message }}@enderror
					</span>
					<input type="password" name="password" placeholder="Password" required="" value="{{ old('password') }}" autofocus>
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="{{ route('siswa.check') }}" method="POST" autocomplete="off">
					@if(Session::get('fail'))
						<div class="alert alert-danger">
							{{ Session::get('fail') }}
						</div>
					@endif
					@csrf
					<label for="chk" aria-hidden="true">Siswa Login</label>
					<input type="email" name="email" placeholder="Email" autofocus value="{{ old('email') }}">
					<span class="text-center"> 
						@error('email'){{ $message }}@enderror
					</span>
					<input type="password" name="password" placeholder="Password" autofocus value="{{ old('password') }}">
					<span class="text-center">
						@error('password'){{ $message }}@enderror
					</span>
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>