<!-- admin/add_employee.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <form action="{{route('insertContact')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                            @csrf 

                                <div class="card-body">
                                    <h4 class="card-title">Add Contact Info</h4>

                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone Number*</label>
                                        <div class="col-sm-9">
                                            <input name="phone1" type="number" class="form-control" id="phone1" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-3 text-right control-label col-form-label">Another Phone Number</label>
                                        <div class="col-sm-9">
                                            <input name="phone2" type="number" class="form-control" id="phone2" placeholder="Phone Number">
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                        <div class="col-sm-9">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Address*</label>
                                        <div class="col-sm-9">
                                            <input name="address" type="test" class="form-control" id="address" placeholder="Address" required>
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