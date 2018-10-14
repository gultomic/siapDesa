<?php
// PUBLIC ROUTES
Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/struktur-organisasi', 'HomeController@struktur')->name('struktur');
Route::get('/sejarah', 'HomeController@sejarah')->name('sejarah');
Route::get('/potensi','HomeController@potensi'); 
Route::get('/artikel', 'HomeController@artikel')->name('artikel');
Route::get('/artikel/{name}', 'HomeController@lihat_artikel')->name('artikel.lihat');
Route::get('/foto','HomeController@foto' )->name('foto');

// Route::get('/layanan', function () {
//     return view('layanan');
// })->name('layanan');

// Route::get('/produk', function () {
//     return view('produk');
// })->name('produk');
Route::get('/test/{id}', 'PostController@test');

Route::resource('/post', 'PostController');
Route::get('/posts', 'PostController@list')->name('posts');

Route::resource('/tag', 'TagController');
Route::resource('/apparatus', 'ApparatusController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{nama}', 'HomeController@show');

Route::resource('/type', 'TypeController');
Route::get('/types', 'TypeController@list')->name('types');

Route::resource('/profile', 'ProfileController');
Route::get('profil/{name}', 'ProfileController@profil');
// Route::get('profil/{name}', 'ProfileController@struktur');

Route::resource('/gallery', 'GalleryController');
Route::get('/galleries/{content}', 'GalleryController@list')->name('galleries');

Route::resource('/population', 'PopulationController');
Route::get('/population/list/{id}', 'PopulationController@list')->name('populations.list');
Route::get('/populations', 'PopulationController@list')->name('populations');
Route::post('/population/get_population/{id}', 'ServicingController@get_population')->name('get_population');

Route::resource('/education', 'EducationController');
Route::get('/educations', 'EducationController@list')->name('educations');

Route::resource('/occupation', 'OccupationController');
Route::get('/occupations', 'OccupationController@list')->name('occupations');

Route::resource('/facility', 'FacilityController');
Route::get('/facilitys', 'FacilityController@list')->name('facilitys');

// ---------------------------- API services ----------------------------
/* servicings/value/field */
Route::get('/servicing/servicings/{id}/{name}', 'ServicingController@servicings')->name('servicings');

//services list Routes
Route::get('/servicing/new', 'ServicingController@new')->name('new');
Route::get('/servicing/create_new', 'ServicingController@new_create')->name('new.create');
Route::get('/servicing/show_new/{id}', 'ServicingController@new_show')->name('new.show');
Route::put('/servicing/update_new/{id}', 'ServicingController@new_update')->name('new.update');
Route::get('/servicing/edit_new/{id}', 'ServicingController@new_edit')->name('new.edit');
Route::get('/servicing/verify_new/{id}', 'ServicingController@new_verify')->name('new.verify');
Route::get('/servicing/news/', 'ServicingController@news')->name('news');
Route::post('/servicing/store_new', 'ServicingController@new_store')->name('new.store');
Route::delete('/servicing/delete_new/{id}', 'ServicingController@new_delete')->name('new.delete');

// services process list route
Route::get('/servicing/process_service', 'ServicingController@process_service')->name('process_service');
Route::get('/servicing/process_services', 'ServicingController@process_services')->name('process_services');
Route::get('/servicing/process_verify/{id}', 'ServicingController@process_verify')->name('process.verify');

// services done list route
Route::get('/servicing/done_service', 'ServicingController@done_service')->name('done_service');
Route::get('/servicing/done_services', 'ServicingController@done_services')->name('done_services');

// counter notify services
Route::get('/servicing/counter_services/{name}', 'ServicingController@counter_services')->name('counter_services');

Route::resource('/criteria', 'CriteriaController');