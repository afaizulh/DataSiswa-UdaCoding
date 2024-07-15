<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        DataSiswa::create([
            'created_by' => $user->id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenjang' => $request->jenjang
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dataSiswa = DataSiswa::find($id);

        return view('detail.edit', compact('dataSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dataSiswa = DataSiswa::find($id);
        $user = Auth::user();

        $dataSiswa->update([
            'created_by' => $user->id,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jenjang' => $request->jenjang
        ]);

        return redirect()->route('detail', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DataSiswa::find($id)->delete();

        return redirect()->route('home');
    }
}
