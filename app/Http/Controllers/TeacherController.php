<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Subject;
use Session;
use Config;
use Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::get();
        $user = User::get();
        $color = Config::get('constants.color');
        return view('admin.guru.index',compact('teacher', 'user','color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            'nip' => 'required',
            'no' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->nip;
        $user->role = 'guru';
        $user->password = Hash::make($request->password);
        $save = $user->save();

        $teacher = new Teacher();
        $teacher->user_id = $user->id;
        $teacher->NIP = $request->nip;
        $teacher->phonenumber = $request->no;
        $teacher->address = $request->address;
        $save2 = $teacher->save();

        if($save && $save2){
            Session::flash('success', 'Sukses menambah guru');
            return redirect()->route('admin.guru.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah guru!']);
            return redirect()->route('admin.guru.create');
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
        $teacher = Teacher::where('id', $id)->first();
        $subject = Subject::where('teacher_id', $id)->get();
        $color = Config::get('constants.color');
        return view('admin.guru.show', compact('teacher', 'subject', 'color', 'id'));
    }

    public function subject($id)
    {
        $class = Classroom::get();
        return view('admin.guru.subject', compact('class', 'id'));
    }

    public function storeSubject(Request $request, $id) {
        $request->validate([
            'subject' => 'required',
            'class' => 'required',
        ]);

        $subject = new Subject();
        $subject->name = $request->subject;
        $subject->teacher_id = $id;
        $subject->classroom_id = $request->class;
        $save = $subject->save();

        if($save){
            Session::flash('success', 'Sukses menambah pelajaran');
            return redirect()->route('admin.guru.show', $id);
        } else {
            Session::flash('errors', ['' => 'Gagal menambah pelajaran!']);
            return redirect()->route('admin.guru.subject', $id);
        }
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
        User::destroy(Teacher::where('id', $id)->first()->user_id);
        Teacher::destroy($id);

        return redirect()->route('admin.guru.index')
                        ->with('success','Sukses menghapus guru');
    }
}
