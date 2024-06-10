<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<title>@yield('title')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<link rel="shortcut icon" href={{'/assets/media/logos/favicon.ico'}} />
		<link href={{"/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"}} rel="stylesheet" type="text/css" />
		<link href={{"/assets/plugins/global/plugins.bundle.css"}} rel="stylesheet" type="text/css" />
		<link href={{"/assets/css/style.bundle.css"}} rel="stylesheet" type="text/css" />
	</head>

    <body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url('{{'/assets/media/illustrations/sigma-1/14.png'}}')">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="user" method="POST">
							@csrf
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Sign In to Orca</h1>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Username</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="username"/>
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									{{-- <a href="../../demo2/dist/authentication/flows/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
								</div>
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
							</div>
							<div class="text-center">
								{{-- <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5"> --}}
								<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Login</span>
									{{-- <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
								</button>
								{{-- <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a> --}}
							</div>
						</form>
					</div>
				</div>
				<div class="d-flex flex-center flex-column-auto p-10">
					<div class="d-flex align-items-center fw-bold fs-6">
						{{-- <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
						<a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a> --}}
					</div>
				</div>
			</div>
		</div>
		<script src="{{'/assets/plugins/global/plugins.bundle.js'}}"></script>
		<script src="{{'/assets/js/scripts.bundle.js'}}"></script>
		<script src="{{'/assets/js/custom/authentication/sign-in/general.js'}}"></script>
	</body>
</html>