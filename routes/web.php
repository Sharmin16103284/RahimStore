<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\insertController;


//index page
Route::get('/', [insertController::class, 'index'])->name('index');


//price_range blade file //add new price range
Route::get('/admin/price_range', [insertController::class, 'price_range'])->name('price_range');
//insert into price_range file
Route::post('/admin/add_price_range', [insertController::class, 'add_price_range'])->name('add_price_range');
//end


//insert blade file //add new product
Route::get('/admin/insert', [insertController::class, 'insert'])->name('insert');
//insert into add new product form
Route::post('/admin/insert', [insertController::class, 'insert_product'])->name('insert_product');
//end


//view all products
Route::get('/admin/view_product', [insertController::class, 'view_product'])->name('view_product');


//edit product page view
Route::get('/admin/edit_product/{pro_id}', [insertController::class, 'edit_product'])->name('edit_product');
//update product 
Route::post('/admin/update_product', [insertController::class, 'update_product'])->name('update_product');


//hard delete product
Route::get('/admin/delete_product/{del_id}',[insertController::class, 'delete_product'])->name('delete_product');


//filter priceRange category wise
Route::get('/priceRange/product/{p_id}',[insertController::class, 'priceRange_product'])->name('priceRange_product');