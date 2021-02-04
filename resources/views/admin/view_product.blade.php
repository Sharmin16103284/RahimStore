@extends('layout')

@section("content")



<div class="container" >
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">All Products</h5>
            </div>
            <div class="modal-body pt-3 pb-5 ">
                <div class="row">
                    
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>

                              @foreach($lists as $list)

                              <tr>
                                <th scope="row">{{$list->id}}</th>
                                <td>{{$list->name}}</td>
                                <td><img width="60px" src="{{asset($list->image)}}"></td>
                                <td>{{$list->price}}</td>
                                <td>{{$list->date}}</td>
                                <td>
                                  <a href="{{url('/admin/edit_product/')}}/{{$list->id}}">
                                  <span><i class="fa fa-edit"></i></span>
                                  </a>
                                  <a href="{{url('/admin/delete_product/')}}/{{$list->id}}">
                                      <span><i class="fa fa-trash"></i></span>
                                  </a>
                                </td>
                              </tr>

                              @endforeach     


                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection