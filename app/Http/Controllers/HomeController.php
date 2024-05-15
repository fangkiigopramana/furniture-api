<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $experiences = Experience::all();
        $projects = Project::all();
        return view('home', compact('experiences','projects'));
    }
}
