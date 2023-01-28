<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> دخول الأدمن </title>

		<!--Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/css/icons.css') }}">

		<!--Style css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/toggle-menu/sidemenu.css') }}">

	</head>

	<body class="bg-light">
		<div id="app" class="page">
			<section class="section section-2">
                <div class="container">
					<div class="row">
						<div class="single-page single-pageimage construction-bg cover-image " data-image-src="dashboard/assets/img/weather1.jpeg">
							<div class="row">
							    <div class="col-lg-6 col-xl-6">
									<div class="mt-xl-5">
										<div class="bg-transparent carouselTestimonial1 p-4 mx-auto mt-xl-5 mb-3 w-600">
											<div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
												<ol class="carousel-indicators carousel-indicators1">
													<li data-target="#carouselTestimonial" data-slide-to="0" class="active"></li>
													<li data-target="#carouselTestimonial" data-slide-to="1"></li>
													<li data-target="#carouselTestimonial" data-slide-to="2"></li>
												</ol>
												<div class="carousel-inner">
													<div class="carousel-item text-center active">
														<img style="height: 130px;" src="{{ asset('dashboard/assets/img/brand/logo.png') }}" class="mb-2  mt-lg-0 " alt="logo">
														<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adipiscing elit varius quam at, luctus dui. Mauris magna metus consectetur adipiscing elit.</p>
													</div>
													<div class="carousel-item text-center">
														<img style="height: 130px;" src="{{ asset('dashboard/assets/img/brand/logo.png') }}" class="mb-2  mt-lg-0 " alt="logo">
														<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adip varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel.</p>
													</div>
													<div class="carousel-item text-center">
														<img style="height: 130px;" src="{{ asset('dashboard/assets/img/brand/logo.png') }}" class="mb-2  mt-lg-0 " alt="logo">
														<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, consectetur adipiscing elit consectetur adipiscing elit luctus dui. Mauris magna metus.</p>
													</div>
												</div>

											</div>
									    </div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6">
									<div class="login-sec">
										<div class=" text-center card mb-0">
                                            <form id="login" method="POST" action="{{ route('login') }}" class="card-body" tabindex="500" >
                                                @csrf
												<h4 class="mb-3">Login</h4>
												<div class="">
													<div class="form-group">
														{{-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> --}}

                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
													<div class="form-group">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
													</div>
													<div class="checkbox">
														<div class="custom-checkbox custom-control">
															<input data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
															<label for="checkbox-1" class="custom-control-label">تذكرنى</label>
														</div>
													</div>
												</div>
												<div class="submit mt-3 mb-3">
													<button type="submit" class="btn btn-primary btn-block">
                                                        {{ __('Login') }}
                                                    </button>
												</div>
                                                @if (Route::has('password.request'))
                                                <p>
                                                    <a class="mb-2" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </p>
                                            @endif
										    </form>
									    </div>
								    </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!--Jquery.min js-->
		<script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>

		<!--popper js-->
		<script src="{{ asset('dashboard/assets/js/popper.js') }}"></script>

		<!--Tooltip js-->
		<script src="{{ asset('dashboard/assets/js/tooltip.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="{{ asset('dashboard/assets/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>

		<!--Scroll-up-bar.min js-->
		<script src="{{ asset('dashboard/assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>

		<script src="{{ asset('dashboard/assets/js/moment.min.js') }}"></script>

		<!--mCustomScrollbar js-->
		<script src="{{ asset('dashboard/admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!--Sidemenu js-->
		<script src="{{ asset('dashboard/admin/assets/plugins/toggle-menu/sidemenu.js') }}"></script>

		<!--Scripts js-->
		<script src="{{ asset('dashboard/admin/assets/js/scripts.js') }}"></script>
	</body>
</html>
