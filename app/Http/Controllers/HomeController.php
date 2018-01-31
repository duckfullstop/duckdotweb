<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Index page!
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.index');
    }
    /**
     * Contact details page!
     *
     * @return Response
     */
    public function contact()
    {
        return view('pages.contact');
    }
    /**
     * Portfolio page!
     *
     * @return Response
     */
    public function portfolio()
    {
        return view('pages.portfolio');
    }
}
