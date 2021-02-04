

@extends('layout')

@section("content")

  <!-- banner -->
  <div class="banner-text">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li class="banner">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>w</span>omen's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner2">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>m</span>en's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">35% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner3">
                <div class="container">   
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>k</span>id's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F
                                    </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- //banner -->
<!--services-->

<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            
        </li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
<div class="innerf-pages section">
    <div class="fh-container mx-auto">
        <div class="row my-lg-5 mb-5">
            <!-- grid left -->
            <div class="side-bar col-lg-3">
                <!--preference -->
                <div class="left-side"> 
                    <h3 class="shopf-sear-headits-sear-head">
                        <span>Price </span>Range</h3>
                    <ul>
                            @foreach ($price_range as $price_ran)
                                <li>
                            <input type="checkbox" class="checked" name="arr1" id="arr1">
                            <label for="arr1">

                                 <a href="{{URL::to('/priceRange/product/'.$price_ran -> id)}}"> {{$price_ran -> price}}</a>
                                 
                                 
                                 </label>
                            </li> 
                                
                            @endforeach
                                                           

                    </ul>
                </div>
                <!--preference -->
           
                <!-- // preference -->
            </div>
            <!-- //grid left -->
            <!-- grid right -->
            <div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>p</span>roducts within your price range</h5>


        

                <!-- card group  -->
                <div class="card-group">
                    <!-- card -->
                    @foreach($all_products as $product)
                    <div class="col-lg-3 col-sm-6 p-0">
                        <div class="card product-men p-3">
                            <div class="men-thumb-item">
                                <img src="{{asset($product->image)}}" alt="img" class="card-img-top" style="height: 200px">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="womens.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                            </div>


                            <!-- card body -->
                            <div class="card-body  py-3 px-2">
                                <h5 class="card-title text-capitalize">{{$product->name}}</h5>
                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-dark font-weight-bold">{{$product->price}}</p><p style="padding-left: 40%">{{$product->date}}</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //card -->
                    @endforeach 

                    
                </div><!-- //card group -->  
             
                
            </div>
        </div>
    </div>
</div>
<!--// Shop -->



    
@endsection