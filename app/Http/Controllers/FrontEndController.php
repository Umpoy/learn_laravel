<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function page(Request $request)
    {
        $page_title = "Home Page";
        
        if($request->path() == 'about'){
            $page_title = "About Page";
        }

        if($request->path() == 'contact'){
            $page_title = "Contact Page";
        }

        if($request->path() == 'blog'){
            $page_title = "Blog Page";
        }

        return view('pages.static', ['page_title' => $page_title]);
    }
}
