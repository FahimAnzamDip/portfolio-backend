<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutsController extends Controller
{

    public function index() {
        $abouts = About::findOrFail(1);

        return view('backend.pages.abouts.index', [
            'abouts' => $abouts
        ]);
    }
}
