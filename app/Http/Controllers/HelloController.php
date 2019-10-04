<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = [
            'Cool service',
            'Another cool service'
        ];

        $services = \App\Service::all();

        return view('services', compact('services'));
    }
}
