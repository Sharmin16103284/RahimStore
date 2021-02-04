@extends('layout')

@section("content")



<div class="container" >
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Price Range</h5>
            </div>
            <div class="modal-body pt-3 pb-5 ">
                <div class="row">
                    
                    <div class="col-md-12">
                        <form action="{{route('add_price_range')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">

                           @csrf
                            
                            <div class="form-group">
                                <label for="price" class="col-form-label">Price Range</label>
                                <input type="text" class="form-control" placeholder=" " name="price" id="price" required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Submit">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection