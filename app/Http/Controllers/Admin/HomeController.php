<?php

namespace Delivery\Http\Controllers\Admin;

class HomeController extends Controller {
    /**
     * HomeController constructor.
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.home');
    }
}
