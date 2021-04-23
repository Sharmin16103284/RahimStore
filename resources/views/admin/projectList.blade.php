<!-- admin/employee_list.blade.php -->

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Projects</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Headline</th>
                                                <th>Title</th>
												<th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    @foreach($projectList as $projectLis)
                                            <tr>
                                                <td scope="row">{{$projectLis->id}}</td>
                                                <td>{{$projectLis->headline}}</td>
                                                <td>{{$projectLis->title}}</td>
												<td>{{$projectLis->description}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($projectLis->image)}}">
                                                </td>
                                                <td>
    												<a href="{{url('/deleteProject/')}}/{{$projectLis->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                    @endforeach                        
                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Headline</th>
                                                <th>Title</th>
												<th>Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

@endsection