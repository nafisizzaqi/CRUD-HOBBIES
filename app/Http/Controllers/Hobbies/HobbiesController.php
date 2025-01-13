<?php

namespace App\Http\Controllers\Hobbies;

use App\Models\Hobbie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Hobbie::orderBy('hobby', 'asc')->get();
        // dd($data);
        return view("hobi.hobby",compact('data'));
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
        $request->validate([
            'hobi'=>'required|min:3'
        ],

[
            'hobi.min'=>'Isian wajib lebih dari 3 huruf',
            'hobi.required'=>'Isian wajib diisikan'
        ]);

        $data = [
            'hobby'=>$request->input('hobi')
        ];

        Hobbie::create($data);

        return redirect()->route('hobi')->with('success', 'Data berhasil disimpan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'hobi'=>'required|min:3'
        ],

[
            'hobi.min'=>'Isian wajib lebih dari 3 huruf',
            'hobi.required'=>'Isian wajib diisikan'
        ]);

        $data = [
            'hobby'=>$request->input('hobi'),
            'is_done'=>$request->input('is_done')
        ];

        Hobbie::where('id', $id)->update($data);
        return redirect()->route('hobi')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hobbie::where('id', $id)->delete();
        return redirect()->route('hobi')->with('success', 'Data berhasil dihapus');
    }
}
