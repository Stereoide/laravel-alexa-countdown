<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Develpr\AlexaApp\Alexa;

class IntentRequestController extends Controller
{
    public function launch()
    {
        return Alexa::say('Start');
    }

    public function sessionEnded()
    {
        return Alexa::say('Sitzung beendet');
    }

    public function addCountdown()
    {
        return Alexa::say('Countdown hinzufügen');
    }

    public function listCountdowns()
    {
        return Alexa::say('Countdowns abfragen');
    }

    public function getNextCountdown()
    {
        return Alexa::say('nächsten Countdown abfragen');
    }
}
