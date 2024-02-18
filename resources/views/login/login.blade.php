<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
	<link rel="icon" href="{{asset('img/logobn.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../login-form-15/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(../img/gedungbn.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
                @if(session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                  </div>
                @endif
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $item)
                        <li>{{ $item }}</li>
                      @endforeach
                  </ul>
                  </div>
               @endif
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="https://if.uinsgd.ac.id" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-globe"></span></a>
										<a href="https://instagram.com/ifuinbandung?igshid=MzMyNGUyNmU2YQ==" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
									</p>
								</div>
			      	</div>
							<form action="/login" method="POST" class="signin-form">
                @csrf
			      		<div class="form-group mt-3">
                  <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" @error('email') @enderror autofocus required>
                  <label class="form-control-placeholder" for="email">Email</label>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
			      		</div>
		            <div class="form-group">
		              <input name="password" id="password-field" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button name="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="../login-form-15/js/jquery.min.js"></script>
  <script src="../login-form-15/js/popper.js"></script>
  <script src="../login-form-15/js/bootstrap.min.js"></script>
  <script src="../login-form-15/js/main.js"></script>

	</body>
</html>

