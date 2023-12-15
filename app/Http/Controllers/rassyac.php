<?php

namespace App\Http\Controllers;

use App\Models\rassya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class rassyac extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=rassya::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'Kelas'=>'required',
            'Minat'=>'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Kelas'=> $request->input('Kelas'),
            'Minat'=> $request->input('Minat'),
        ];
        rassya::create($data);
        return redirect('isian');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit(string $id)
    {
        $data = rassya::where('Nama',$id)->first();
        return view('isian.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama'=>'required',
            'Kelas'=>'required',
            'Minat'=>'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Kelas'=> $request->input('Kelas'),
            'Minat'=> $request->input('Minat'),
        ];
        rassya::where('Nama',$id)->update($data);
        return redirect('isian')->with('Data Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        rassya::where('Nama',$id)->delete();
        return redirect('isian')->with('Data Berhasil Dihapus.');
    }
}
