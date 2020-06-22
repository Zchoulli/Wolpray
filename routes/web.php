<?php



/**
   * @name:        Web routes
   * @author:      Zaid - Patrik - Henry
   * @description: Each route of this app belongs to an middleware (admin - client - manager) , each role has his functions and belongs
   * only for this role , for example : if a route/function belongs to an admin middleware ... only the admin can see the content of this
   * route/function.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
*/





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Route::get('/', 'AdminController@index')->name('FailRouteAdmin')->middleware('admin');
//Route::get('/', 'ManagerController@index')->name('FailRouteManager')->middleware('manager');
//Route::get('/', 'ClientController@index')->name('FailRouteClient')->middleware('client');
Route::get('/', 'HomeController@index');
Route::get('contact', 'HomeController@contact');


/**========== CLIENT ==========**/
Route::get('/client', 'ClientController@index')->name('client')->middleware('client');
Route::get('client', 'ClubController@getIndex')->name('clientclubs')->middleware('client');
Route::resource('client', 'ClientController')->middleware('client');
Route::group(['prefix' => 'dropdown'], function () {
    Route::get('/modifyclient', 'ClientController@modifyClient')->name('modifyclient')->middleware('client');
    Route::get('/deleteclient', 'ClientController@deleteClient')->name('deleteclient')->middleware('client');
    Route::get('/listclubs', 'ClientController@listClubs')->name('listclubs')->middleware('client');
    Route::get('/listmyreservations', 'ClientController@listMyReservations')->name('listmyreservations')->middleware('client');
    Route::get('/listmybills', 'ClientController@listMyBills')->name('listmybills')->middleware('client');
});
Route::post('delete', 'ClientController@destroy{{id}}')->name('delete')->middleware('client');

Route::get('client/show/{id}', 'ClubController@getShow')->name('showclient')->middleware('client');

Route::get('home/show/{id}', 'HomeController@getShow');

Route::get('contactform', 'ClientController@contact')->name('contactform')->middleware('client');

Route::post('client/updateprofileclient/{id}', 'ClientController@UpdateProfileClient')->name('updateprofileclient')->middleware('client');

/**========== MANAGER ==========**/

Route::get('/manager', 'ManagerController@index')->name('manager')->middleware('manager');
Route::resource('deleteproduct', 'ManagerController')->middleware('manager');

Route::get('profilemanager', 'ManagerController@profileManager')->name('profilemanager')->middleware('manager');
Route::get('modifymanager', 'ManagerController@modifyManager')->name('modifymanager')->middleware('manager');
Route::get('clubmanager', 'ManagerController@clubManager')->name('clubmanager')->middleware('manager');
Route::get('modifyclub', 'ManagerController@modifyClub')->name('modifyclub')->middleware('manager');
Route::get('productmanager', 'ManagerController@productManager')->name('productmanager')->middleware('manager');
Route::get('addproduct', 'ManagerController@addProduct')->name('addproduct')->middleware('manager');
Route::get('addticket', 'ManagerController@addTicket')->name('addticket')->middleware('manager');
Route::get('deleteproduct', 'ManagerController@deleteProduct')->name('deleteproduct')->middleware('manager');
Route::get('tablemanager', 'ManagerController@tableManager')->name('tablemanager')->middleware('manager');
Route::get('listreservation', 'ManagerController@ListReservations')->name('listreservation')->middleware('manager');
Route::post('addproduct', 'ManagerController@ConfirmAddProduct')->name('confirmaddproduct')->middleware('manager');
Route::post('addticket', 'ManagerController@ConfirmAddTicket')->name('confirmaddticket')->middleware('manager');
Route::post('manager/modifysingle/{id}', 'ManagerController@modifySingleProduct')->name('modifysingle')->middleware('manager');
Route::post('manager/updateproduct/{id}', 'ManagerController@updateProduct')->name('updateproduct')->middleware('manager');
Route::post('manager/updatemanager/{id}', 'ManagerController@updateManager')->name('updatemanager')->middleware('manager');
Route::post('manager/updateclub/{id}', 'ManagerController@updateClub')->name('updateclub')->middleware('manager');


/**========== ADMIN ==========**/
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
//Route::get('/admin', 'AdminController@destroy')->name('admin')->middleware('admin');
Route::resource('listusers', 'AdminController')->middleware('admin');
Route::get('listadmin', 'AdminController@Listadmin')->name('listadmin')->middleware('admin');
Route::get('listusers', 'AdminController@Listusers')->name('listusers')->middleware('admin');
Route::get('listmanagers', 'AdminController@Listmanagers')->name('listmanagers')->middleware('admin');
Route::get('deleteadmin', 'AdminController@deleteadmin')->name('deleteadmin')->middleware('admin');
Route::get('deleteclient', 'AdminController@deleteclient')->name('deleteclient')->middleware('admin');
Route::get('deletemanager', 'AdminController@deletemanager')->name('deletemanager')->middleware('admin');

Route::get('addmanager', 'AdminController@Addmanager')->name('addmanager')->middleware('admin');
Route::post('addmanager', 'AdminController@ConfirmAddManager')->name('addmanagerconfirm')->middleware('admin');
Route::get('addadmin', 'AdminController@Addadmin')->name('addadmin')->middleware('admin');
Route::post('addadmin', 'AdminController@ConfirmAddAdmin')->name('addadminconfirm')->middleware('admin');
Route::get('addclub', 'AdminController@Addclub')->name('addclub')->middleware('admin');
Route::post('addclub', 'AdminController@ConfirmAddClub')->name('addclubconfirm')->middleware('admin');

Route::get('listclubs', 'AdminController@listclubs')->name('listclubs')->middleware('admin');
Route::get('profileadmin', 'AdminController@profileAdmin')->name('profileadmin')->middleware('admin');
Route::get('modifyadmin', 'AdminController@ViewModifyAdmin')->name('modifyadmin')->middleware('admin');
Route::post('admin/updateprofileadmin/{id}', 'AdminController@UpdateProfileAdmin')->name('updateprofileadmin')->middleware('admin');
Route::get('listbills', 'AdminController@listBills')->name('listbills')->middleware('admin');

Route::get('gmaps', 'HomeController@gmaps');
Route::get('home/gmapshow', 'HomeController@gmapshow');










