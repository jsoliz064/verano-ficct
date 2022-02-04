<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:admin')->only('index2');
    }
    public function index(){
        return Estudiante::all();
    }
    public function index2(){
        return view('estudiante.indexadmin');
    }
}
