<?php
// FuduGo\contactform\src\routes\web.php

/*Route::get('contact', function(){
    return view('Contactform::contact');
});

Route::post('contact', function(){
	echo "<h2>Posted Values</h2>";
    echo "<p>Name: " . request()->get('name') . "</p>";
    echo "<p>Email: " . request()->get('email') . "</p>";
    echo "<p>Message: " . request()->get('message') . "</p>";
})->name('contact');*/

Route::group(['namespace' => 'FuduGo\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});

?>