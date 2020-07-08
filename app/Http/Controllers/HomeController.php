<?php

namespace App\Http\Controllers;

use App\Services;

class HomeController extends Controller
{
    /**
     * Show Index Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index')->with([
            'services' => $this->getServices()
        ]);
    }

    /**
     * Get data from DB Services table
     *
     * @return mixed
     */
    public function getServices()
    {
        return Services::take(3)->inRandomOrder()->get();
    }
}
