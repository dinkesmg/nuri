<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VisualizationController extends Controller
{
    public function monitoringParticipantCase()
    {
        return Inertia::render('Visualization/ParticipantCase', []);
    }
}
