<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreecController extends Controller
{
    /**
     * Display a listing of the index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('freecs.index');
    }
}
