<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        return abort(503, 'A ver espérese');
    }
}
