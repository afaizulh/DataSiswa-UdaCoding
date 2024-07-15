<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $dataSiswa = DataSiswa::all();
        $user = Auth::user();

        return view('home', compact(['dataSiswa', 'user']));
    }

    public function create()
    {
        return view('detail.create');
    }

    public function show($id)
    {
        $user = Auth::user();
        $dataSiswa = DataSiswa::find($id);

        return view('detail.detail', compact(['user', 'dataSiswa']));
    }
}
