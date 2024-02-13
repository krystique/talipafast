<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingAddress extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }
    
    public function store(Request $request)
    {
        $students = Student::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        $students->academic()->create([
            'course' => $request->course,
            'year' => $request->year,
        ]);

        $students->country()->create([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital,
        ]);
        
        return redirect(route('students.index'))->with('message','Student Data created successfully.');
    }
    
    
    public function show(Student $students)
    {
        return view('students.show', ['students' => $students]);
    }

    
    public function edit(Student $students)
    {
        return view('students.edit', ['students' => $students]);
    }
    
    public function update(Student $students, Request $request)
    {
        $students->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        $students->academic()->update([
            'course' => $request->course,
            'year' => $request->year,
        ]);

        $students->country()->update([
            'continent' => $request->continent,
            'country_name' => $request->country_name,
            'capital' => $request->capital,
        ]);
       
        return redirect(route('students.index'))->with('message','Student Data updated successfully.');
    }
}
