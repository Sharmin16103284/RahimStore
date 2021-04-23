<!-- admin\add_category.blade.php -->

@extends('admin.layout')

@section('content')


			<div class="page-wrapper">
           <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        	
                            <form action="{{route('insert_cat')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            
                            @csrf	

                                <div class="card-body">
                                    <h4 class="card-title">Add new Category</h4>

                                    <div class="form-group row">
                                        <label for="category" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input name="category" type="text" class="form-control" id="category" placeholder="Category Name Here">
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
       

@endsection