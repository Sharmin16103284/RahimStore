<!-- index.blade.php -->
<!-- admin.login.blade.php -->

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <title>Login</title>
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
							  
							  <div class="collapse navbar-collapse align-content-center" id="navbarNav">
							    <ul class="navbar-nav">
							      <li class="nav-item">
							        <a class="nav-link" href="">Login</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="">Register</a>
							      </li>
							    </ul>
							  </div>
							</nav>
						</div>
                    </div>
                    </div>
    		  </div>
                    </div>
        </div>
    </div>
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>
</body>

</html>

			

