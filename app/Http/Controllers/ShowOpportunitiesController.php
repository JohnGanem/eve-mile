<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowOpportunitiesController extends Controller
{
    public function __invoke(Request $request)
    {
        return "test";
    }
}
