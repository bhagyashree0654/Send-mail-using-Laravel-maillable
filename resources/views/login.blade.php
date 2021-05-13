<?php session_start(); ?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link href="assets\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
		
		<!-- Favicons -->
	  <link href="public\tools\indexLogo.jpg" rel="icon">
	  <link href="public\tools\indexLogo.jpg" rel="indexLogo">
	  
	  <style>
		*{
			margin:0px;
			padding:0px;
		}
	  </style>
		
		<title>Log In...</title>
	</head>
	<body>
		<div class="container mt-5">
			<div class="row w-100 d-flex justify-content-center align-items-center main-div">
				<div class="col-12 col-lg-6 col-md-8 col-xl-9">
					<div class="card py-3 px-2">
						<h1 class="text-center my-3 text-capitalize">
							<span>ମହାରାଜା ଶ୍ରୀରାମ ଚନ୍ଦ୍ର ଭଞ୍ଜ ଦେଓ ବିଶ୍ଵବିଦ୍ୟାଳୟ</span></h1>
                            <div class="container">
                                <div class="py-5 text-center">
                                  <img class="d-block mx-auto mb-4" src="public/tools/logo.jfif" alt="logo" width="60" height="60">
                                </div>
                               </div>
						<div class="division">
							<div class="row">
                                <h3 class=" col-6 mx-auto mb-4 mt-0 text-center text-capitalize">
                                    <span>Login Form</span></h3>
							</div>
							
							<form class="myForm" id="loginform" action="loginValidate" method="post">
								<div class="mb-3">
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="name@example.com">
										<input type="hidden" class="form-control tooltips" name="_token" id="_token" value="{{ csrf_token() }}"/>
										<input type="hidden" class="form-control" id="hidId" name="hidId" aria-describedby="id">
										
									</div>
								</div>

								<div class="mb-3">
									<div class="form-group">
										<input type="password" name="password"class="form-control" id="password" placeholder="Password">
									</div>
								</div>

								<div class="row">
									<div class="col-md-12  bn text-capitalize text-right">
										<a href="register" class="register">Register Here</a>
									</div>
								</div>
								<div>
									<button type="submit" id="login" class="btn btn-block btn-primary my-3 btn-lg">Log In</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="public/plugins/jquery-3.4.1.min.js"> </script>
		
	</body>
</html>