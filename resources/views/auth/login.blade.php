
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V17</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/imageslog/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/loginf/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/loginf/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/vendorlog/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/csslog/util.css">
	<link rel="stylesheet" type="text/css" href="css/csslog/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form  method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                
                       {{csrf_field()}}
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="Empno" class="input100" type="text" class="form-control{{ $errors->has('Empno') || $errors->has('Email') ? ' is-invalid' : '' }}" name="Empno" value="{{ old('Empno') }}"  placeholder="Employee No/Email" required autofocus >
                                 @if ($errors->has('Empno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Empno') }}</strong>
                                    </span>
                                @endif

                                @if ($errors->has('Email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Email') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input id="password" type="password" class="input100"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" placeholder="Password" required>
                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="txt2" for="remember">
                                        {{ __('Remember Me') }}
                                        
                                    </label>
                                </div>
                            </div>
                        </div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                        
                        {{ __('Login') }}
                            
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">					
                        @if (Route::has('password.request'))
                                    <a class="txt2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
					</div>

					<div class="w-full text-center">
						<a href="/register" class="txt3">
                        {{ __('Sign Up') }}
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/imageslog/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/vendorlog/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/vendorlog/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/vendorlog/bootstrap/js/popper.js"></script>
	<script src="vendor/vendorlog/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/vendorlog/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/vendorlog/daterangepicker/moment.min.js"></script>
	<script src="vendor/vendorlog/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/vendorlog/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/loginjs/main.js"></script>

</body>
</html>
