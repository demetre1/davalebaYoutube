<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\YoutubeDavaleba;

class YoutubeDavalebaController extends Controller
{
    public  function index(){
        $YoutubeDavaleba = YoutubeDavaleba::all();
        return view("დავალება გაკეთებულია",compact("YoutubeDavaleba"));
    }
}
