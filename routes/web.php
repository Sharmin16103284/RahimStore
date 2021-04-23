<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\bannerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\otherController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\socialController;









Route::get('/homepage',[indexController::class, 'homepage'])->name('home');






// ========== admin==========

Route::get('/', function () {
    return view('admin\dashboard');
});

// ========= employee category ===========
//add category blade
Route::get('/add_category',[employeeController::class, 'add_category'])->name('add_category');
// add_category insert
Route::post('/insert_cat',[employeeController::class, 'insert_cat'])->name('insert_cat');

//view_category 
Route::get('/view_category',[employeeController::class, 'view_category'])->name('view_category');
//hard delete category
Route::get('/del_cat/{cat_id}',[employeeController::class, 'del_cat'])->name('del_cat');


// ====== employee details ============

//add_employee blade
Route::get('/add_employee',[employeeController::class, 'add_employee'])->name('add_employee');
//insert into add_employee
Route::post('/insert_employee',[employeeController::class, 'insert_employee'])->name('insert_employee');

//employee_list blade
Route::get('/employee_list',[employeeController::class, 'employee_list'])->name('employee_list');

//edit_employee blade
Route::get('/edit_employee/{Emp_id}',[employeeController::class, 'edit_employee'])->name('edit_employee');
//update edit_employee
Route::post('update_employee',[employeeController::class, 'update_employee'])->name('update_employee');

//view_employee blade
route::get('/view_employee/{e_id}',[employeeController::class, 'view_employee'])->name('view_employee');
// trashEmployee
Route::get('/trashEmployee/{id}',[employeeController::class, 'trashEmployee'])->name('trashEmployee');
// former employee
Route::get('/former',[employeeController::class, 'former'])->name('former');


// ========= recent projects ===========
// add project
Route::get('/addProject', [projectController::class, 'addProject'])->name('addProject');
//insert into  add project
Route::post('/insertProject', [projectController::class, 'insertProject'])->name('insertProject');
// projectList
Route::get('/projectList', [projectController::class, 'projectList'])->name('projectList');
// deleteProject
Route::get('/deleteProject/{id}', [projectController::class, 'deleteProject'])->name('deleteProject');


// ========== about =========
// addAbout
Route::get('/addAbout',[aboutController::class, 'addAbout'])->name('addAbout');
// insertAbout
Route::post('/insertAbout',[aboutController::class, 'insertAbout'])->name('insertAbout');
// aboutList
Route::get('/aboutList',[aboutController::class, 'aboutList'])->name('aboutList');
// deleteAbout
Route::get('/deleteAbout/{id}',[aboutController::class, 'deleteAbout'])->name('deleteAbout');


// ============== contact =============
// addContact
Route::get('/addContact',[contactController::class, 'addContact'])->name('addContact');
// insertContact
Route::post('/insertContact',[contactController::class, 'insertContact'])->name('insertContact');
// contactList
Route::get('/contactList',[contactController::class, 'contactList'])->name('contactList');
// deleteContact
Route::get('/deleteContact/{id}',[contactController::class, 'deleteContact'])->name('deleteContact');


// =========== social links =================
// addSocial
Route::get('/addSocial',[socialController::class, 'addSocial'])->name('addSocial');
// insertSocial
Route::post('/insertSocial',[socialController::class, 'insertSocial'])->name('insertSocial');
// socialList
Route::get('/socialList',[socialController::class, 'socialList'])->name('socialList');
// deleteSocial
Route::get('/deleteSocial/{id}',[socialController::class, 'deleteSocial'])->name('deleteSocial');


// ========= service =============
// service
Route::get('/service',[serviceController::class, 'service'])->name('service');
// insertService
Route::post('/insertService',[serviceController::class, 'insertService'])->name('insertService');
// serviceList
Route::get('/serviceList',[serviceController::class, 'serviceList'])->name('serviceList');
// deleteService
Route::get('/deleteService/{id}',[serviceController::class, 'deleteService'])->name('deleteService');
// serviceText
Route::get('/serviceText',[serviceController::class, 'serviceText'])->name('serviceText');
// insertServiceText
Route::post('/insertServiceText',[serviceController::class, 'insertServiceText'])->name('insertServiceText');



// =========== banner ==============
// banner
Route::get('/banner',[bannerController::class, 'banner'])->name('banner');
// insertBanner
Route::post('/insertBanner',[bannerController::class, 'insertBanner'])->name('insertBanner');


// ============ footer =============
// footer
Route::get('/footer',[otherController::class, 'footer'])->name('footer');
// insertFooter
Route::post('/insertFooter',[otherController::class, 'insertFooter'])->name('insertFooter');


// ======== title and logo ===============
// title
Route::get('/title',[otherController::class, 'title'])->name('title');
// insertFooter
Route::post('/insertTitle',[otherController::class, 'insertTitle'])->name('insertTitle');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
