<!-- admin/add_employee.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('insertBanner')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf 

                                <div class="card-body">
                                    <h4 class="card-title">Add new service</h4>

                                    
                                    <div class="form-group row">
                                        <label for="title1" class="col-sm-3 text-right control-label col-form-label">Title one</label>
                                        <div class="col-sm-9">
                                            <input name="title1" type="text" class="form-control" id="title1" placeholder="Title one" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title2" class="col-sm-3 text-right control-label col-form-label">Title two</label>
                                        <div class="col-sm-9">
                                            <input name="title2" type="text" class="form-control" id="title2" placeholder="Title two" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="title3" class="col-sm-3 text-right control-label col-form-label">Title three</label>
                                        <div class="col-sm-9">
                                            <input name="title3" type="text" class="form-control" id="title3" placeholder="Title three" required>
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