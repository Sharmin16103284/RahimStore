<!-- admin/view_category.blade.php -->


@extends('admin.layout')

@section('content')


					  <div class="page-wrapper">
					  	<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Category List</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                            @foreach($view_cats as $view_cat)
                    
                                            <tr>
                                                <td scope="row">{{$view_cat->id}}</td>
                                                <td>{{$view_cat->category}}</td>
                                                <td>
    												<a href="{{url('/del_cat/')}}/{{$view_cat->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>
                                                </td>
                                            </tr>
                            @endforeach  

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                    

@endsection