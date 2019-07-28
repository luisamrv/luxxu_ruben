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

////////////////////////
///// PAGES + MENU /////
////////////////////////

////////////////////////////////////////////////
// HOMEPAGE
Route::get('/',[
	'uses' => 'FrontEndController@getHomepage',
	'as' => 'FrontEnd.homepage'
]);

////////////////////////////////////////////////
// ABOUT
Route::get('/about', [
	'uses' => 'FrontEndController@getAbout',
	'as' => 'FrontEnd.about'
]);

// LUXXU'S WORLD
Route::get('/about', [
	'uses' => 'FrontEndController@getLuxxusWorld',
	'as' => 'FrontEnd.about'
]);

// TERMS AND CONDITIONS
Route::get('/terms-and-conditions', [
	'uses' => 'FrontEndController@getTermsAndConditions',
	'as' => 'FrontEnd.terms-and-conditions'
]);

// CLEAN AND CARE
Route::get('/terms-and-conditions#cleanandcare', [
	'uses' => 'FrontEndController@getCleanAndCare',
	'as' => 'FrontEnd.terms-and-conditions'
]);

// FAQS
Route::get('/terms-and-conditions#faqs', [
	'uses' => 'FrontEndController@getFaqs',
	'as' => 'FrontEnd.terms-and-conditions'
]);

////////////////////////////////////////////////
// PRODUCTS
Route::get('/all-products', [
	'uses' => 'FrontEndController@getAllProducts',
	'as' => 'FrontEnd.all-products'
]);

// LIGHTING
Route::get('/lighting', [
	'uses' => 'FrontEndController@getLighting',
	'as' => 'FrontEnd.lighting'
]);

// FURNITURE
Route::get('/furniture', [
	'uses' => 'FrontEndController@getFurniture',
	'as' => 'FrontEnd.furniture'
]);

// FINISHES
Route::get('/finishes', [
	'uses' => 'FrontEndController@getFinishes',
	'as' => 'FrontEnd.finishes'
]);

// CATALOGUE
Route::get('/download-catalogue', [
	'uses' => 'FrontEndController@getCatalogue',
	'as' => 'FrontEnd.catalogue'
]);

// PRODUCT DETAIL
Route::get('/products/{product}', [
	'uses'=>'FrontEndController@getProductDetail',
    'as'=> 'FrontEnd.product-detail'
]);

////////////////////////////////////////////////
// INSPIRATIONS
Route::get('/inspirations', [
	'uses' => 'FrontEndController@getInspirations',
	'as' => 'FrontEnd.inspirations'
]);

// INTERIORS
Route::get('/interiors', [
	'uses' => 'FrontEndController@getInteriors',
	'as' => 'FrontEnd.interiors'
]);

// DESIGN BOOKS
Route::get('/interiors/design-books', [
	'uses' => 'FrontEndController@getEbooks',
	'as' => 'FrontEnd.ebooks'
]);

// TRENDS
Route::get('/trends', [
	'uses' => 'FrontEndController@getTrends',
	'as' => 'FrontEnd.trends'
]);

// BLOG
Route::get('/blog', [
	'uses' => 'FrontEndController@getBlog',
	'as' => 'FrontEnd.blog'
]);

// VIDEO
Route::get('/video', [
	'uses' => 'FrontEndController@getVideo',
	'as' => 'FrontEnd.video'
]);

////////////////////////////////////////////////
// PRESS
Route::get('/press', [
	'uses'=>'FrontEndController@getPress',
    'as'=> 'FrontEnd.press'
]);

// PRESSROOM 
Route::get('/pressroom', [
	'uses'=>'FrontEndController@getPressroom',
    'as'=> 'AreaPress.pressroom'
]);

// PRESSROOM - ALL PRODUCTS
Route::get('/pressroom/all-products', [
	'uses'=>'FrontEndController@getPressroomAllProducts',
    'as'=> 'AreaPress.all-products'
]);

// PRESSROOM - LIGHTING
Route::get('/pressroom/lighting', [
	'uses'=>'FrontEndController@getPressroomLighting',
    'as'=> 'AreaPress.lighting'
]);

// PRESSROOM - FURNITURE
Route::get('/pressroom/furniture', [
	'uses'=>'FrontEndController@getPressroomFurniture',
    'as'=> 'AreaPress.furniture'
]);

// PRESSROOM - MAGAZINE COVERS
Route::get('/pressroom/magazine-covers', [
	'uses'=>'FrontEndController@getPressroomMagazineCovers',
    'as'=> 'AreaPress.magazine-covers'
]);

// PRESSROOM - TRADESHOWS
Route::get('/pressroom/tradeshows', [
	'uses'=>'FrontEndController@getPressroomTradeshows',
    'as'=> 'AreaPress.tradeshows'
]);

// PRESSROOM - PROJECTS
Route::get('/pressroom/projects', [
	'uses'=>'FrontEndController@getPressroomProjects',
    'as'=> 'AreaPress.projects'
]);

// PRESSROOM - PRODUCT DETAIL
Route::get('/pressroom/products/{product}', [
	'uses'=>'FrontEndController@getPressroomDetailProduct',
    'as'=> 'AreaPress.detail-product'
]);

// PRESSROOM - CATEGORY
Route::get('/pressroom/{category}', [
	'uses'=>'FrontEndController@getPressroomAllCategoryProduct',
    'as'=> 'AreaPress.category-product'
]);

////////////////////////////////////////////////
// CONTACT US
Route::get('/contact-us', [
	'uses' => 'FrontEndController@getContactUs',
	'as' => 'FrontEnd.contact-us'
]);

// BRAND AMBASSADORS
Route::get('/brand-ambassadors', [
	'uses' => 'FrontEndController@getBrandAmbassadors',
	'as' => 'FrontEnd.brand-ambassadors'
]);

// SHOWROOMS
Route::get('/showrooms', [
	'uses' => 'FrontEndController@getShowrooms',
	'as' => 'FrontEnd.showrooms'
]);

////////////////////////////////////////////////
// READY TO SHIP
Route::get('/ready-to-ship', [
	'uses' => 'FrontEndController@getReadyToShip',
	'as' => 'FrontEnd.ready-to-ship'
]);

// STOCK
Route::get('/stock', [
	'uses' => 'FrontEndController@getStock',
	'as' => 'FrontEnd.stock'
]);

// PARTNERS
Route::get('/partners', [
	'uses' => 'FrontEndController@getPartners',
	'as' => 'FrontEnd.partners'
]);

// CATEGORYS
Route::get('/{category}', [
	'uses'=>'FrontEndController@getAllCategoryProducts',
    'as'=> 'FrontEnd.category'
]);
////////////////////////////////////////////////
// END PAGES + MENU

////////////////////////
//////// FORMS ////////
////////////////////////

// CONTACT US
Route::post('/process-forms/contact-us', [
	'uses' => 'FormController@ContactUs',
	'as' => 'ProcessForm.contact-us'
]);

// GENERAL INQUIRE (BRAND AMBASSADORS)
Route::post('/process-forms/general-inquire', [
	'uses' => 'FormController@GeneralInquire',
	'as' => 'ProcessForm.general-inquire'
]);

// SUBSCRIBE FOOTER
Route::post('/process-forms/subscribe', [
	'uses' => 'FormController@Subscribe',
	'as' => 'ProcessForm.subscribe'
]);

// INQUIRE - GET INFO
Route::post('/process-forms/inquire-get-info', [
	'uses' => 'FormController@InquireGetInfo',
	'as' => 'ProcessForm.inquire-get-info'
]);

// INQUIRE - GET PRICE
Route::post('/process-forms/inquire-get-price', [
	'uses' => 'FormController@InquireGetPrice',
	'as' => 'ProcessForm.inquire-get-price'
]);

// PRODUCT SHEET
Route::post('/process-forms/product-sheet', [
	'uses' => 'FormController@ProductSheet',
	'as' => 'ProcessForm.product-sheet'
]);

// PRODUCT CUSTOMIZE
Route::post('/process-forms/product-customize', [
	'uses' => 'FormController@ProductCustomize',
	'as' => 'ProcessForm.product-customize'
]);

// EBOOK DOWNLOAD
Route::post('/process-forms/download-ebook', [
	'uses' => 'FormController@DownloadEbook',
	'as' => 'ProcessForm.download-ebook'
]);

// EBOOK NEW PRODUCTS DOWNLOAD
Route::post('/process-forms/download-ebook-new-products', [
	'uses' => 'FormController@DownloadEbookNewProducts',
	'as' => 'ProcessForm.download-ebook-new-products'
]);

// CATALOGUE LUXXU DOWNLOAD
Route::post('/process-forms/download-catalogue-luxxu', [
	'uses' => 'FormController@DownloadCatalogueLuxxu',
	'as' => 'ProcessForm.download-catalogue'
]);

// CATALOGUE LUXXU HOME DOWNLOAD
Route::post('/process-forms/download-catalogue-luxxu-home', [
	'uses' => 'FormController@DownloadCatalogueLuxxuHome',
	'as' => 'ProcessForm.download-catalogue-luxxu-home'
]);

// APPOINTMENT
Route::post('/process-forms/appointment', [
	'uses' => 'FormController@Appointment',
	'as' => 'ProcessForm.appointment'
]);

// SHOWROOMS
Route::post('/process-forms/showrooms', [
	'uses' => 'FormController@Showrooms',
	'as' => 'ProcessForm.showrooms'
]);

// TRADESHOW
Route::post('/process-forms/tradeshow', [
	'uses' => 'FormController@Tradeshow',
	'as' => 'ProcessForm.tradeshow'
]);

// READY TO SHIP
Route::post('/process-forms/ready-to-ship', [
	'uses' => 'FormController@ReadyToShip',
	'as' => 'ProcessForm.ready-to-ship'
]);

// STOCK
Route::post('/process-forms/stock', [
	'uses' => 'FormController@Stock',
	'as' => 'ProcessForm.stock'
]);

// PRESS LOGIN
Route::post('/process-forms/press-login', [
	'uses' => 'FormController@PressLogin',
	'as' => 'ProcessForm.press-login'
]);

// PRESS REGISTER
Route::post('/process-forms/press-register', [
	'uses' => 'FormController@PressRegister',
	'as' => 'ProcessForm.press-register'
]);

// PRESS DOWNLOAD PRESS KIT
Route::post('/process-forms/press-download-press-kit', [
	'uses' => 'FormController@PressKit',
	'as' => 'ProcessForm.press-download-press-kit'
]);

// PRESS DOWNLOAD PRESS BOOK
Route::post('/process-forms/press-download-press-book', [
	'uses' => 'FormController@PressBook',
	'as' => 'ProcessForm.press-download-press-book'
]);

// PRESS NEWSLETTER
Route::post('/process-forms/press-newsletter', [
	'uses' => 'FormController@PressNewsletter',
	'as' => 'ProcessForm.press-newsletter'
]);
////////////////////////////////////////////////
// END FORMS

////////////////////////
//////// EVENTS ////////
////////////////////////

// ISALONI 2019
Route::get('/news/events/isaloni-2019', [
	'uses' => 'FrontEndController@isaloni2019',
	'as' => 'Events.isaloni-2019'
]);
////////////////////////////////////////////////
// END EVENTS