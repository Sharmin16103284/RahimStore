<!-- admin/employee_list.blade.php -->

@extends('admin.layout')

@section('content')

	 <div class="page-wrapper">
           <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Employee</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Image</th>
												<th>Category</th>
                                                <th>NID</th>
                                                <th>Adress</th>
                                                <th>Blood Group</th>
                                                <th>Mobile Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    @foreach($lists as $list)
                                            <tr>
                                                <td scope="row">{{$list->id}}</td>
                                                <td>{{$list->name}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($list->image)}}">
                                                </td>
                                                <td>{{$list->relationBetweenEmployeeAndCategory->category}}</td>
												<td>{{$list->nid}}</td>
                                                <td>{{$list->address}}</td>
                                                <td>{{$list->blood_group}}</td>
                                                <td>{{$list->number}}</td>
                                                <td>
                                                    <a title="View details" href="{{url('/view_employee/')}}/{{$list->id}}">
                                                        <span><i class="fa fa-id-badge"></i></span>
                                                    </a>
    												<a title="Edit" href="{{url('/edit_employee/')}}/{{$list->id}}">
    												    <span><i class="fa fa-edit"></i></span>
    												</a>
    												<a title="Move to trash" href="{{url('/trashEmployee/')}}/{{$list->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                    @endforeach                        
                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Image</th>
												<th>Category</th>
                                                <th>NID</th>
                                                <th>Adress</th>
                                                <th>Blood Group</th>
                                                <th>Mobile Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection