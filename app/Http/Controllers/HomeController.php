<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function toBaru()
    {
        return view('baru');
    }

    public function postData(Request $request)
    {
        $data = new kelas;
        $data->name = $request->name;
        $data->address = $request->address;
        $data->save();

        return $request;
        // return "ok";
    }


}
