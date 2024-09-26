<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;

use Redirect;

class ClassroomController extends Controller
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
        $page = 'pageclass';
        $class = Classroom::paginate(10);
        return view('backend.class.manage_class', compact('page','class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'pageclass';
        $class = Classroom::all();
        return view('backend.class.add_class', compact('page','class'));
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
            'nama_class' => 'required|string|max:100',
        ]);
        $class = $request->except('_token');
        try {
             Classroom::insert($class); 
        } catch (Exception $e) {
                    return Redirect::route('manageclass.index');
        }
        return Redirect::route('manageclass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = 'pageclass';
        $class = Classroom::all();
        $class = Classroom::find($id);
        return view('backend.class.show_class', compact('page','class'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = 'pageclass';
        $class = Classroom::all();
        $class = Classroom::find($id);

        return view('backend.class.edit_class', compact('page','class'));
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
            'nama_class' => 'required|string|max:100',
        ]);
        $class = $request->except('_token','_method');
        try {
             Classroom::where('id_class', $id)->update($class);
        } catch (Exception $e) {
                    return Redirect::route('manageclass.index');
        }
        return Redirect::route('manageclass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Classroom::where('id_class',$id)->delete();
        return Redirect::route('manageclass.index');
    }
}
