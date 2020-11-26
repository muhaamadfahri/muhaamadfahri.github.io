<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = students::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'NRP' => 'required|size:9'
        ]);

        $student = new Students;
        $student->nama = $request->Nama;
        $student->nrp = $request->NRP;
        $student->email = $request->Email;
        $student->jurusan = $request->Jurusan;

        $student->save();
        // Students::create([
        //     'nama' => $request->Nama,
        //     'nrp' => $request->NRP,
        //     'email' => $request->Email,
        //     'jurusan' => $request->Jurusan
        //    ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $students = students::find($id);
        // return $students;
        return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $students = students::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required',
            'NRP' => 'required|size:9'
        ]);
        Students::where('id', $id)
            ->update([
                'nama' => $request->Nama,
                'nrp' => $request->NRP,
                'email' => $request->Email,
                'jurusan' => $request->Jurusan

            ]);

        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {   Students::destroy($id);
        $students = Students::find($id);
        return redirect('/students')->with('status', 'Data Mahasiswa Berhasil Dihapus   !');
    }
}
