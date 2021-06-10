<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Session;
use Config;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = Classroom::withCount('student')->get();
        $color = Config::get('constants.color');
        return view('admin.kelas.index',compact('class','color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.add');
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
            'major' => 'required',
        ]);
        $letter = classroom::where('class', $request->class)->where('major', $request->major)->count() + 1;

        $class = new classroom();
        $class->class = $request->class;
        $class->major = $request->major;
        $class->letter = $letter;
        $save = $class->save();

        if($save){
            Session::flash('success', 'Sukses menambah kelas');
            return redirect()->route('admin.kelas.index');
        } else {
            Session::flash('errors', ['' => 'Gagal menambah kelas!']);
            return redirect()->route('admin.kelas.create');
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
        //
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
