<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil 10 log activity terbaru
        $activities = Activity::latest()->take(10)->get();

        return view('dashboard', compact('activities'));
    }
}