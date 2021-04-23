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
                                            </tr>
                                        </thead>
                                        <tbody>

                    @foreach($formerLists as $formerList)
                                            <tr>
                                                <td scope="row">{{$formerList->id}}</td>
                                                <td>{{$formerList->name}}</td>
                                                <td>
                                                    <img width="60px" src="{{asset($formerList->image)}}">
                                                </td>
                                                <td>{{$formerList->relationBetweenEmployeeAndCategory->category}}</td>
												<td>{{$formerList->nid}}</td>
                                                <td>{{$formerList->address}}</td>
                                                <td>{{$formerList->blood_group}}</td>
                                                <td>{{$formerList->number}}</td>
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
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
@endsection