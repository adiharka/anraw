<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use Session;
use Config;
use Auth;

class guruKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->teacher->id;
        $teacher = Teacher::where('id', $id)->first();
        $subject = Subject::where('teacher_id', $id)->get();
        $color = Config::get('constants.color');
        return view('guru.jadwal.index', compact('teacher', 'subject', 'color', 'id'));
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
        $student = Student::where('classroom_id', $id)->get();
        $subject = Subject::where('classroom_id', $id)->get();
        $color = Config::get('constants.color');
        return view('guru.jadwal.show', compact('student', 'subject', 'color', 'id'));
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
        //
    }
}
