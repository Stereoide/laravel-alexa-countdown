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

Develpr\AlexaApp\Http\Routing\AlexaRoute::launch('/', 'IntentController@launch');

Develpr\AlexaApp\Http\Routing\AlexaRoute::sessionEnded('/', 'IntentController@sessionEnded');

Develpr\AlexaApp\Http\Routing\AlexaRoute::intent('/', 'AddCountdownIntent', 'IntentController@addCountdown');

Develpr\AlexaApp\Http\Routing\AlexaRoute::intent('/', 'ListCountdownsIntent', 'IntentController@listCountdowns');

Develpr\AlexaApp\Http\Routing\AlexaRoute::intent('/', 'GetNextCountdownIntent', 'IntentController@getNextCountdown');
