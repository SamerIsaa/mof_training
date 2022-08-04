<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Model\Feature;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['features'] = Feature::query()->active()->get();

        return view('landing.index' , $data);
    }
}
