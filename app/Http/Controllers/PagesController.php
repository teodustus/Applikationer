<?php

namespace App\Http\Controllers;

use \Illuminate\Console\AppNamespaceDetectorTrait;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to the index';
        return view('pages.index')->with('title',$title);
    }

    public function home() {
        return view('pages.home');
    }

    public function about() {

        $data = array(
            
            'title' => 'services',
            'about' => ['information', 'Programming', 'tu madre']
        


        );

        return view('pages.about')->with($data);
    }
}
