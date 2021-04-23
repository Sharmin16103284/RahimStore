<!-- admin/add_employee.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('insertAbout')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf 

                                <div class="card-body">
                                    <h4 class="card-title">About us</h4>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Company Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Company Name Here" required>
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input name="description" type="text" class="form-control" id="description" placeholder="Description" required>
                                        </div>
                                    </div>
                                    
									<div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div>
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection