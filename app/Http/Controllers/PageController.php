<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function nmd() {
        return view('pages.default', [
            'title' => 'NMD',
            'content' => '<p>Hello <strong>NMD</strong> from the PageController</p>'
        ]);
    }
}
