<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to the lsapp";
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = "About us";
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => "Our services",
            'services' => ['web design', 'programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
