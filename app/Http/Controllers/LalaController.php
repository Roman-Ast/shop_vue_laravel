<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LalaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke() {
        return view('lala');
    }
}
