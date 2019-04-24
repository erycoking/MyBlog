<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "This is erycoking";
        return view('pages.index')->withTitle($title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = [
            'title' => 'Services', 
            'services' => ['Web Design', 'Programming', 'Seo']
        ];
        return view('pages.services') -> with($data);
    }
}
