<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Subject;
use App\Models\Complete;
use Illuminate\Http\Request;
use Auth;
use Config;
use PhpParser\Node\Expr\Assign;
use Session;

class SiswaTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugass = Assignment::get();
        $color = Config::get('constants.color');
        $kumpul = Complete::get();
        $subjects = Subject::where('classroom_id', Auth::user()->student->classroom_id)->get();
        return view('siswa.tugas.index', compact('tugass', 'subjects', 'color', 'kumpul'));
    }

    public function akun()
    {
        $akun = Auth::user();
        return view('siswa.akun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tugas = Assignment::where('id', $id)->first();
        $kumpul = Complete::where('assignment_id', $id)->where('user_id', Auth::id())->count();
        return view('siswa.tugas.show', compact('tugas', 'kumpul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas = Assignment::find($id);
        return view('siswa.tugas.kumpul', compact('id', 'tugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required',
        ]);

        $tugas = new Complete();
        $tugas->assignment_id = $id;
        $tugas->user_id = Auth::id();
        $tugas->link = $request->link;
        $save = $tugas->save();

        if ($save) {
            Session::flash('success', 'Sukses mengumpulkan tugas');
            return redirect()->route('siswa.tugas.index');
        } else {
            Session::flash('errors', ['' => 'Gagal mengumpulkan tugas!']);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
