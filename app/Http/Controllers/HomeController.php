<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function HomePage() {
        return view('home.index');
    }

    public function ServicesPage() {
        return view("home.services");
    }
}
