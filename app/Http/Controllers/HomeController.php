<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function HomePage() {
        $msg = "Welcome to my site";
        $secondLine = "This is a student dashboard";
        // $html = "<h2>Hello para</h2>";
        $isLogin = true;

        $users = ["ali", "aslam", "amjad", "jameel"];

        // 1 way to send data to view
        return view('home.index', ["message" => $msg, "secondLine" => $secondLine, "users" => $users, "isLogin" => $isLogin] );

        // 2nd way to send data to view
        // return view("home.index", compact("msg"));
    }

    public function ServicesPage() {
        return view("home.services");
    }
}
