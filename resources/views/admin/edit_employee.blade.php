<!-- admin/edit_employee.blade.php -->

@extends('admin.layout')
 
@section('content')

			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12"> 
                        <div class="card">

                            <form action="{{route('update_employee')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                           @csrf

                                <div class="card-body">
                                    <h4 class="card-title">Update employee Information</h4>

                                     <input type="hidden" name="old_image"  value="{{$edits->image}}">

                                    <input name="id" type="hidden" class="form-control" id="fname" value="{{$edits->id}}">

                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 text-right control-label col-form-label">Date*</label>
                                        <div class="col-sm-9">
                                            <input name="date" type="text" class="form-control" id="date" value="{{$edits->date}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name*</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" id="fname" value="{{$edits->name}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label" for="category_id">Designation*</label>
                                        <select class="form-control col-sm-9" id="category_id" name="category_id" required>
                                          <option required>Select Designation</option>

                                @foreach($cats as $cat)         
                                          <option value="{{$cat->id}}" required>{{$cat->category}}</option>
                                @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid" class="col-sm-3 text-right control-label col-form-label">NID*</label>
                                        <div class="col-sm-9">
                                            <input name="nid" type="number" class="form-control" id="nid" value="{{$edits->nid}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-3 text-right control-label col-form-label">Adress*</label>
                                        <div class="col-sm-9">
                                            <input name="address" type="text" class="form-control" id="address" value="{{$edits->address}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="blood_group" class="col-sm-3 text-right control-label col-form-label">Blood Group</label>
                                        <div class="col-sm-9">
                                            <input name="blood_group" type="text" class="form-control" id="blood_group" value="{{$edits->blood_group}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="number" class="col-sm-3 text-right control-label col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input name="number" type="number" class="form-control" id="number" value="{{$edits->number}}" required>
										</div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="salary" class="col-sm-3 text-right control-label col-form-label">Salary*</label>
                                        <div class="col-sm-9">
                                            <input name="salary" type="number" class="form-control" id="salary" value="{{$edits->number}}" required>
                                        </div>
                                    </div>

									{{-- <div class="form-group row">
                                        <label for="image" class="col-sm-3 text-right control-label col-form-label">Image*</label>
                                        <div class="col-sm-9">
                                        	<img style="height: 110px; width: 100px" src="{{asset($edits->image)}}"> <br>

                                            <input name="image" type="file" class="form-control" id="file"  />
										    </div>
                                    </div> --}}
                                   
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button name="submit" type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    </div>
                    </div>
                    

@endsection