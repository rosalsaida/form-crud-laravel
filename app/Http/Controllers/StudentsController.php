<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();
        return view('students.table', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'gpa' => $request->gpa
        ];
        $proses = Students::create($data);

        if ($proses) {
            echo "<script>alert('Data submitted successfully!')</script>";
        } else {
            echo "<script>alert('Data is success removed!')</script>";
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('students.table');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Students::find($id);
       //  dd($proses);
       return view('students.editform', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Students::find($id);
        $data->update($request->all());
        return redirect()->route('view')->with('success','Data is success edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Students::find($id);
        $data->delete();
        return redirect()->route('view')->with('success','Data is success removed');
    }
}
