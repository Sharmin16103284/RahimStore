@extends('layout')

@section("content")



<div class="container" >
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Product</h5>
            </div>
            <div class="modal-body pt-3 pb-5 ">
                <div class="row">
                    
                    <div class="col-md-12">
                        <form action="{{route('insert_product')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">

                            @csrf 
                            
                            <div class="form-group">
                                <label for="name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder=" " name="name" id="name" required="">
                            </div>

                            <label for="cars">ADD price range here:</label>

                                <select name="price_id" id="cars"> 
                                    <option value="">Select any One</option>

                                    @foreach ($price_range as $price_ran)
                                        
                                   

                                <option value="{{ $price_ran -> id}}">{{$price_ran -> price}}</option>
                               
                                @endforeach
                                </select>  

                            <div class="form-group">
                                <label for="price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" placeholder=" " name="price" id="price" required="">
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-form-label">Expiry Date</label>
                                <input type="date" class="form-control" placeholder=" " name="date" id="date" required="">
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Product Image</label>
                                <input type="file" class="form-control" placeholder=" " name="image" id="image" required="">
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