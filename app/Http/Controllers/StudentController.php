<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;
use App\Student;

use Redirect;

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
        $page = 'pagestudent';
        $student = Student::paginate(10);
        return view('backend.student.manage_student', compact('page','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'pagestudent';
        $class = Classroom::all();
        $student = Student::all();
        return view('backend.student.add_student', compact('page','student','class'));
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
            'nama_student' => 'required|string|max:100',
            'id_class' => 'required',
        ]);
        $student = $request->except('_token');
        try {
             Student::insert($student); 
        } catch (Exception $e) {
                    return Redirect::route('managestudent.index');
        }
        return Redirect::route('managestudent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = 'pagestudent';
        $student = Student::all();
        $student = Student::find($id);
        return view('backend.student.show_student', compact('page','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = 'pagestudent';
        $class = Classroom::all();
        $student = Student::all();
        $student = Student::find($id);

        return view('backend.student.edit_student', compact('page','student','class'));
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
            'nama_student' => 'required|string|max:100',
            'id_class' => 'required',
        ]);
        $student = $request->except('_token','_method');
        try {
             Student::where('id_student', $id)->update($student);
        } catch (Exception $e) {
                    return Redirect::route('managestudent.index');
        }
        return Redirect::route('managestudent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id_student',$id)->delete();
        return Redirect::route('managestudent.index');
    }
}
