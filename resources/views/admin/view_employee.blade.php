<!-- admin\view_employee.blade.php -->

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Admin Panel</title>
    <link href="{{asset('admin/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('admin/dist/css/style.min.css')}}" rel="stylesheet">

    <style type="text/css" media="all">
    	body{
    		background-image: linear-gradient(to bottom right, yellow, pink, skyblue, blue);
    	}

    </style>
    
</head>

<body>

		<div class="container-fluid"> <br><br>
			<h2 class="text-center">Employee Details</h2><br><br>
           <div class="row">


           	
           		<div class="col-md-3"> 
           			<div class="card">
                            <div class="card-body">
                                <div class="align-items-center row">
                                        <div class="col-sm-9 align-items-center">
                                                <img class="align-items-center" style="height: 100%; width: 100%; transform: translateX(20%);"  src="{{asset($viewss->image)}}"> 
                                        	
										</div>
                                        
                                            
                                        

                                    </div>

                            </div>
                        
                </div>
                
                        
                </div>


                <div class="col-md-9"> 
                	<div class="card">
                            <div class="card-body">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Joinning Date: </label>
                                        <div class="col-sm-9">
                                        	<table>
                                        		<tr>
                                        			<td>{{$viewss->date}}</td>
                                        		</tr>
                                        	</table>
                                        	 <p></p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Name: </label>
                                        <div class="col-sm-9">
                                        	<table>
                                        		<tr>
                                        			<td>{{$viewss->name}}</td>
                                        		</tr>
                                        	</table>
                                        	 <p></p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Category: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->relationBetweenEmployeeAndCategory->category}}</p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">NID: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->nid}}</p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Adress: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->address}}</p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Blood Group: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->blood_group}}</p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Mobile Number: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->number}}</p>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-left">Salary: </label>
                                        <div class="col-sm-9">
                                        	 <p>{{$viewss->salary}}</p>
										</div>
                                    </div>
                                   

                            </div>
                        
                </div>
                
            </div>
        </div>

    <br><br>    
<div class="container-fluid"> 
    <a style="float: right; width: 150px; " class="btn btn-outline-danger hidethispart" href="javascript:print()">Print</a> 
</div>
    <br><br>


 <!-- footer -->
       <div class="container-fluid">
          
		  
		<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center" style="color: white; text-shadow: black">
                Designed and Developed by Sharmin Sultana
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('admin/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/pages/chart/chart-page-init.js')}}"></script>

</body>

</html>
                    

