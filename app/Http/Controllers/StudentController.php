<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = student::all();
        return view('student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create', compact('data'));
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
            'nis' => 'required|max:8',
            'nama' => 'required|max:100',
            'rombel' => 'required',
            'rayon' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pas_foto' => 'required|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $imgname = $request->pas_foto->getClientOriginalName();
        $request->pas_foto->move(public_path('image'), $imgname);


        $student = new student();
        $student->nis = $request->nis;
        $student->nama = $request->nama;
        $student->rombel = $request->rombel;
        $student->rayon = $request->rayon;
        $student->alamat = $request->alamat;
        $student->agama = $request->agama;
        $student->pas_foto = $imgname;
        $student->save();

        return redirect('/dashboard')->with('status', 'Data Berhasil di Tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        student::where('id', $student->id)
                ->update([
                            'nis' => $request->nis,
                            'nama' => $request->nama,
                            'rombel' => $request->rombel,
                            'rayon' => $request->rayon,
                            'alamat' => $request->alamat,
                            'agama' => $request->agama,
                            'pas_foto' => $request->pas_foto
                        ]);

        return redirect('/dashboard')->with('status', 'Data Berhasil di Update !');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        student::destroy($student->id);
        return redirect('/dashboard')->with('status', 'Data Berhasil di Delete !');;
    }

}
