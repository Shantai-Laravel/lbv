<?php

$prefix = session('applocale');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/sitemap.xml', 'SitemapController@index');

// Front routes
Route::group(['prefix' => $prefix], function()  {
    //guest user settings
    Route::post('set-user-settings', 'Controller@setUserSettings');
        Route::get('/',     'PagesController@index')->name('home');
        Route::get('/home', 'PagesController@index');

        Route::get('/services/{alias}', 'BlogController@getServicePage');
        Route::get('/services/{alias}{childAlias}', 'BlogController@getServicesListPage');

        Route::post('missing-delivery-country', 'Controller@missingDeliveryCountry');
        Route::post('/contact-feed-back', 'FeedBackController@contactFeedBack');

        // Bootsrap Modal get countries list
        Route::post('/bootsrap-get-countries-list', 'Controller@getCountriesList');
        Route::post('/save-country-user', 'Controller@saveCountryUser');

        // Pages
        Route::get('/{pages}', 'PagesController@getPages')->name('pages');

        // Localization
        Cache::forget('country.js');
        Route::get('/js/country.js', 'Controller@setCountry')->name('assets.countries');

        // Localization
        Cache::forget('lang.js');
        Route::get('/js/lang.js', 'LanguagesController@changeLangScript')->name('assets.lang');
});
