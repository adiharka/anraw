<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Classroom;
use Session;
use Config;
use Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::get();
        return view('admin.siswa.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = Classroom::get();
        return view('admin.siswa.add', compact('class'));
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
            'name' => 'required',
            'nisn' => 'required',
            'no' => 'required',
            'class' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->nisn;
        $user->role = 'siswa';
        $user->password = Hash::make($request->password);
        $save = $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->NISN = $request->nisn;
        $student->phonenumber = $request->no;
        $student->classroom_id = $request->class;
        $save2 = $student->save();

        if($save && $save2){
            Session::flash('success', 'Sukses menambah siswa');
            return redirect()->route('admin.siswa.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah siswa!']);
            return redirect()->route('admin.siswa.create');
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
        $student = Student::where('id', $id)->first();
        $subject = Subject::where('classroom_id', $student->classroom_id)->get();
        $color = Config::get('constants.color');
        return view('admin.siswa.show', compact('student', 'subject', 'color', 'id'));
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
        User::destroy(Student::where('id', $id)->first()->user_id);
        Student::destroy($id);

        return redirect()->route('admin.siswa.index')
                        ->with('success','Sukses menghapus siswa');
    }
}
