<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('Assets/Auth/css/style.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
		<div class="card card0 border-0">
			<div class="row d-flex">
				<div class="col-lg-6">
					<div class="card1 pb-5">
						<div class="row">
							<img src="{{ asset('Assets/Frontend/img/iconmedia-logo.png') }}" class="logo">
						</div>
						<div class="row px-3 justify-content-center mt-4 mb-5 border-line">
							<img src="{{ asset('Assets/Frontend/img/hero-slider/slider2.jpg') }}" class="image">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card2 card border-0 px-4 py-5">
						<div class="row mb-4 px-3">
							<h6 class="mb-0 mr-4 mt-2">Masuk ke akun anda.</h6>
						</div>
						<div class="row px-3 mb-4">
							<div class="line"></div>
							<small class="or text-center"></small>
							<div class="line"></div>
						</div>
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<div class="row px-3">
								<label class="mb-1"><h6 class="mb-0 text-sm">Email Address</h6></label>
								<input class="mb-4 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Enter a valid email address">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="row px-3">
								<label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
								<input type="password" class="mb-4 @error('password') is-invalid @enderror" name="password" placeholder="Enter password">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="row mb-3 px-3">
								<button type="submit" class="btn btn-dark text-center">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="bg-blue py-4">
				<div class="row px-3">
					<small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2023. All rights reserved.</small>
					<div class="social-contact ml-4 ml-sm-auto">
						<span class="fa fa-facebook mr-4 text-sm"></span>
						<span class="fa fa-google-plus mr-4 text-sm"></span>
						<span class="fa fa-linkedin mr-4 text-sm"></span>
						<span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</body>
</html>