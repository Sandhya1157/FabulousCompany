<?php

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

Route::get('/', function(){
    return view('front/index');

});
/********************home ********************/
Route::get('/home', 'Front\HomeController@index')->name('home');


/********************Services ********************/
Route::get('/service', 'Front\ServiceController@index')->name('services');





/********************Career ********************/
Route::get('/career', 'Front\CareerController@index')->name('career');



/********************Gallery ********************/
Route::get('/gallery', 'Front\GalleryController@index')->name('gallery');





/********************Project ********************/
Route::get('/project', 'Front\ServiceController@index')->name('project');





/********************Blog ********************/
Route::get('/blog', 'Front\BlogController@index')->name('blog');



/********************Contact ********************/
Route::get('/contact', 'Front\ContactController@index')->name('contact');







/********************CivilProject ********************/
Route::get('/civilproject', 'Front\CivilProjectController@index')->name('civilProject');


/********************ITProject ********************/
Route::get('/itproject', 'Front\ItProjectController@index')->name('itProject');


/********************ElectronicsProject ********************/
Route::get('/electronicsproject', 'Front\ElectronicsProjectController@index')->name('electronicsProject');





/********************AdminDashboard ********************/
Route::get('/admin/dashboard', 'Back\DashboardController@index')->name('dashboard');


/********************Heading ********************/
Route::get('/admin/client/heading', 'Back\HeadingController@index')->name('client.heading');
Route::post('/admin/client/heading/store', 'Back\HeadingController@store')->name('client.heading.store');
Route::get('/admin/client/heading/{heading}/edit', 'Back\HeadingController@edit')->name('client.heading.edit');
Route::patch('/admin/client/heading/update/{heading}', 'Back\HeadingController@update')->name('client.heading.update');
Route::get('/admin/client/heading/delete/{heading}', 'Back\HeadingController@delete')->name('client.heading.delete');



/********************OurProject ********************/
Route::get('/admin/client/ourproject', 'Back\OurProjectController@index')->name('client.ourproject');
Route::post('/admin/client/ourproject/store', 'Back\OurProjectController@store')->name('client.ourproject.store');
Route::get('/admin/client/ourproject/{ourproject}/edit', 'Back\OurProjectController@edit')->name('client.ourproject.edit');
Route::patch('/admin/client/ourproject/update/{ourproject}', 'Back\OurProjectController@update')->name('client.ourproject.update');
Route::get('/admin/client/ourproject/delete/{ourproject}', 'Back\OurProjectController@delete')->name('client.ourproject.delete');



/********************AboutUs ********************/
Route::get('/admin/client/aboutus', 'Back\AboutUsController@index')->name('client.aboutus');
Route::post('/admin/client/aboutus/store', 'Back\AboutUsController@store')->name('client.aboutus.store');
Route::get('/admin/client/aboutus/{about}/edit', 'Back\AboutUsController@edit')->name('client.aboutus.edit');
Route::patch('/admin/client/aboutus/update/{about}', 'Back\AboutUsController@update')->name('client.aboutus.update');
Route::get('/admin/client/aboutus/delete/{about}', 'Back\AboutUsController@delete')->name('client.aboutus.delete');




/********************Logo ********************/
Route::get('/admin/dashboard/logo', 'Back\LogoController@index')->name('logo');
Route::post('/admin/dashboard/logo/store', 'Back\LogoController@store')->name('logo.store');
Route::get('/admin/dashboard/logo/{logo}/edit', 'Back\LogoController@edit')->name('logo.edit');
Route::patch('/admin/dashboard/logo/update/{logo}', 'Back\LogoController@update')->name('logo.update');
Route::get('/admin/dashboard/logo/delete/{logo}', 'Back\LogoController@delete')->name('logo.delete');



/********************Category ********************/
Route::get('/admin/dashboard/category', 'Back\CategoryController@index')->name('category');
Route::post('/admin/dashboard/category/store', 'Back\CategoryController@store')->name('category.store');
Route::get('/admin/dashboard/category/{category}/edit', 'Back\CategoryController@edit')->name('category.edit');
Route::patch('/admin/dashboard/category/update/{category}', 'Back\CategoryController@update')->name('category.update');
Route::get('/admin/dashboard/category/delete/{category}', 'Back\CategoryController@delete')->name('category.delete');


/********************Service ********************/
Route::get('/admin/dashboard/service', 'Back\ServiceController@index')->name('service');
Route::post('/admin/dashboard/service/store', 'Back\ServiceController@store')->name('service.store');
Route::get('/admin/dashboard/service/{service}/edit', 'Back\ServiceController@edit')->name('service.edit');
Route::patch('/admin/dashboard/service/update/{service}', 'Back\ServiceController@update')->name('service.update');
Route::get('/admin/dashboard/service/delete/{service}', 'Back\ServiceController@delete')->name('service.delete');

/********************video ********************/
Route::get('/admin/dashboard/video', 'Back\VideoController@index')->name('video');
Route::post('/admin/dashboard/video/store', 'Back\VideoController@store')->name('video.store');
Route::get('/admin/dashboard/video/{video}/edit', 'Back\VideoController@edit')->name('video.edit');
Route::patch('/admin/dashboard/video/update/{video}', 'Back\VideoController@update')->name('video.update');
Route::get('/admin/dashboard/video/delete/{video}', 'Back\VideoController@delete')->name('video.delete');


/********************Civil Project ********************/
Route::get('/admin/dashboard/civilproject', 'Back\CivilProjectController@index')->name('civilproject');
Route::post('/admin/dashboard/civilproject/store', 'Back\CivilProjectController@store')->name('civilproject.store');
Route::get('/admin/dashboard/civilproject/{civilproject}/edit', 'Back\CivilProjectController@edit')->name('civilproject.edit');
Route::patch('/admin/dashboard/civilproject/update/{civilproject}', 'Back\CivilProjectController@update')->name('civilproject.update');
Route::get('/admin/dashboard/civilproject/delete/{civilproject}', 'Back\CivilProjectController@delete')->name('civilproject.delete');

/********************Footer ********************/
Route::get('/admin/dashboard/footer', 'Back\FooterController@index')->name('footer');
Route::post('/admin/dashboard/footer/store', 'Back\FooterController@store')->name('footer.store');
Route::get('/admin/dashboard/footer/{footer}/edit', 'Back\FooterController@edit')->name('footer.edit');
Route::patch('/admin/dashboard/footer/update/{footer}', 'Back\FooterController@update')->name('footer.update');
Route::get('/admin/dashboard/footer/delete/{footer}', 'Back\FooterController@delete')->name('footer.delete');

/********************Gallery ********************/
Route::get('/admin/dashboard/gallery', 'Back\GalleryController@index')->name('gallery');
Route::post('/admin/dashboard/gallery/store', 'Back\GalleryController@store')->name('gallery.store');
Route::get('/admin/dashboard/gallery/{gallery}/edit', 'Back\GalleryController@edit')->name('gallery.edit');
Route::patch('/admin/dashboard/gallery/update/{gallery}', 'Back\GalleryController@update')->name('gallery.update');
Route::get('/admin/dashboard/gallery/delete/{gallery}', 'Back\GalleryController@delete')->name('gallery.delete');
