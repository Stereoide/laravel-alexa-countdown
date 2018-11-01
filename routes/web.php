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

\Develpr\AlexaApp\Facades\AlexaRouter::launch('/', 'IntentController@launch');

\Develpr\AlexaApp\Facades\AlexaRouter::sessionEnded('/', 'IntentController@sessionEnded');

\Develpr\AlexaApp\Facades\AlexaRouter::intent('/', 'AddCountdownIntent', 'IntentController@addCountdown');

\Develpr\AlexaApp\Facades\AlexaRouter::intent('/', 'ListCountdownsIntent', 'IntentController@listCountdowns');

\Develpr\AlexaApp\Facades\AlexaRouter::intent('/', 'GetNextCountdownIntent', 'IntentController@getNextCountdown');
