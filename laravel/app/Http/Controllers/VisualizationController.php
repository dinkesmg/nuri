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
    public function predictionParticipantCase()
    {
        return Inertia::render('Visualization/PredictionCase', []);
    }
    public function topCaseInCity()
    {
        return Inertia::render('Visualization/TopCaseInCity', []);
    }
}
