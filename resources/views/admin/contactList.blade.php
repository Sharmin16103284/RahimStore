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
                                                <th>First Phone Number</th>
                                                <th>Second Phone Number</th>
												<th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    @foreach($contactLists as $contactList)
                                            <tr>
                                                <td scope="row">{{$contactList->id}}</td>
                                                <td>{{$contactList->phone1}}</td>
                                                <td>{{$contactList->phone2}}</td>
												<td>{{$contactList->email}}</td>
                                                <td>{{$contactList->address}}</td>
                                                <td>
    												<a href="{{url('/deleteContact/')}}/{{$contactList->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                    @endforeach                        
                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Phone Number</th>
                                                <th>Second Phone Number</th>
												<th>Email</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

@endsection