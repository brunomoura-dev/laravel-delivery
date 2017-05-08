<?php

namespace Delivery\Http\Controllers\Admin;

use Delivery\Http\Controllers\Controller;

class DashboardController extends Controller {


    public function index(){
        return view('admin.home');
    }
}
