<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Subject;
use App\Models\complete;
use Illuminate\Http\Request;
use Auth;
use Config;
use PhpParser\Node\Expr\Assign;
use Session;
use Illuminate\Support\Str;

class guruTugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugas = Assignment::where('teacher_id', Auth::user()->teacher->id)->get();
        $color = Config::get('constants.color');
        $subjects = Subject::where('teacher_id', Auth::user()->teacher->id)->get();
        return view('guru.tugas.index', compact('tugas', 'subjects', 'color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::where('teacher_id', Auth::user()->teacher->id)->get();

        return view('guru.tugas.create', compact('subjects'));
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
            'class' => 'required',
            'judul' => 'required|max:13',
            'detail' => 'required',
            'deadline' => 'required',
        ]);

        $tugas = new Assignment();
        $tugas->teacher_id = Auth::user()->teacher->id;
        $tugas->subject_id = $request->class;
        $tugas->judul = $request->judul;
        $tugas->deskripsi = $request->detail;
        $tugas->deadline = $request->deadline;

        // Foto
        if ($request->hasfile('photo')) {
            $image = $request->file('photo');
            $name = Str::random(9) . '.' . $image->extension();
            $path = $image->storeAs('uploads', $name, 'public');
            $tugas->foto = '/storage/' . $path;
        }

        $save = $tugas->save();
        if ($save) {
            Session::flash('success', 'Sukses menambah tugas');
            return redirect()->route('guru.tugas.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah tugas!']);
            return back();
        }
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
        $complete = complete::where('assignment_id', $id)->get();
        return view('guru.tugas.show', compact('tugas', 'complete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignment::destroy($id);

        return back()->with('success', 'Sukses menghapus tugas');
    }
}
