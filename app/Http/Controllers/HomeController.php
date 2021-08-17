<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        return view('web.index');
    }
    public function profil() {
        return view('web.profil.index');
    }
    public function pen() {
        return view('web.pen.index');
    }
    // ps
    public function ps() {
        return view('web.ps.index');
    }
    public function landfill() {
        return view('web.ps.landfill');
    }
    public function rdf() {
        return view('web.ps.rdf');
    }
    //progress
    public function proyek() {
        return view('web.progress.proyek');
    }
    public function konstruksi() {
        return view('web.progress.konstruksi');
    }
    public function kajian() {
        return view('web.progress.kajian');
    }
    public function amdal() {
        return view('web.progress.amdal');
    }
    public function designbuild() {
        return view('web.progress.designbuild');
    }
    public function kolaborasi() {
        return view('web.kolaborasi.index');
    }
    public function kontak() {
        return view('web.kontak.index');
    }
}
