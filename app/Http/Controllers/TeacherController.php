<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teacher;
use App\Classroom;

use Redirect;

class TeacherController extends Controller
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
        $page = 'pageteacher';
        $teacher = Teacher::paginate(10);
        return view('backend.teacher.manage_teacher', compact('page','teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'pageteacher';
        $class = Classroom::all();
        $teacher = Teacher::all();
        return view('backend.teacher.add_teacher', compact('page','teacher','class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_teacher' => 'required|string|max:100',
            'id_class' => 'required',
        ]);
        $teacher = $request->except('_token');
        try {
             Teacher::insert($teacher); 
        } catch (Exception $e) {
                    return Redirect::route('manageteacher.index');
        }
        return Redirect::route('manageteacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = 'pageteacher';
        $teacher = Teacher::all();
        $teacher = Teacher::find($id);
        return view('backend.teacher.show_teacher', compact('page','teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = 'pageteacher';
        $class = Classroom::all();
        $teacher = Teacher::all();
        $teacher = Teacher::find($id);

        return view('backend.teacher.edit_teacher', compact('page','teacher','class'));
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
        $validatedData = $request->validate([
            'nama_teacher' => 'required|string|max:100',
            'id_class' => 'required',
        ]);
        $teacher = $request->except('_token','_method');
        try {
             Teacher::where('id_teacher', $id)->update($teacher);
        } catch (Exception $e) {
                    return Redirect::route('manageteacher.index');
        }
        return Redirect::route('manageteacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::where('id_teacher',$id)->delete();
        return Redirect::route('manageteacher.index');
    }
}
