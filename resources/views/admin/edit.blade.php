@extends('layout')

@section("content")



<div class="container" >
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Product</h5>
            </div>
            <div class="modal-body pt-3 pb-5 ">
                <div class="row">
                    
                    <div class="col-md-12">
                        <form action="{{route('update_product')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">

                            @csrf 

                            <input type="hidden" name="old_image"  value="{{$edits->image}}">

                            <input name="id" type="hidden" class="form-control" id="fname" value="{{$edits->id}}">

                            <div class="form-group">
                                <label for="name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder=" " name="name" id="name"  value="{{$edits->name}}" required="">
                            </div>
                            <div class="form-group">
                                <label for="price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" placeholder=" " name="price" id="price" value="{{$edits->price}}" required="">
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-form-label">Expiry Date</label>
                                <input type="date" class="form-control" placeholder=" " name="date" id="date" value="{{$edits->date}}" required="">
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Product Image</label>
                                <div class="col-sm-9">
                                    <img style="height: 110px; width: 100px" src="{{asset($edits->image)}}"> <br>

                                    <br><input name="image" type="file" class="form-control" id="file"  />
                                    </div>
                            </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Update">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection