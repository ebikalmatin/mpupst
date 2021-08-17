<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Dashboard"], ['link' => "javascript:void(0)", 'name' => "Admin"], ['name' => "Index"],
        ];
        //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true];
        return view('dashboard.index', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);
    }
}
