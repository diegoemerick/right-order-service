<?php

Route::get('/v1/order', 'ServiceOrderController@index');
Route::post('/v1/order', 'ServiceOrderController@create');
Route::put('/v1/order/{id}', 'ServiceOrderController@update');
Route::get('/v1/order/{id}', 'ServiceOrderController@get');
Route::delete('/v1/order/{id}', 'ServiceOrderController@delete');

Route::get('/v1/offer', 'OrderLawyerOfferController@listOffers');
Route::post('/v1/offer', 'OrderLawyerOfferController@createOrderOffer');
Route::get('/v1/offer/{orderId}', 'OrderLawyerOfferController@listOffersByOrder');
