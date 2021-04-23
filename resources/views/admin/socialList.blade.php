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
                                                <th>Facebook</th>
                                                <th>Linkedin Phone Number</th>
												<th>Twitter</th>
                                                <th>Github</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                    @foreach($socialLists as $socialList)
                                            <tr>
                                                <td scope="row">{{$socialList->id}}</td>
                                                <td>{{$socialList->facebook}}</td>
                                                <td>{{$socialList->linkedin}}</td>
												<td>{{$socialList->twitter}}</td>
                                                <td>{{$socialList->github}}</td>
                                                <td>
    												<a href="{{url('/deleteSocial/')}}/{{$socialList->id}}">
    												    <span><i class="fa fa-trash"></i></span>
    												</a>

                                                </td>
                                            </tr>
                    @endforeach                        
                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Facebook</th>
                                                <th>Linkedin Phone Number</th>
												<th>Twitter</th>
                                                <th>Github</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

@endsection