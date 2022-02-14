<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Faculty $faculty)
    {
        $students = $this->getStudents($faculty);

        return view('students.index', compact($students));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        request()->validate(
            [
                'student_id' => 'required',
                'faculty_id' => 'required|exists:categories,id',
                'lecture_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'DOB' => 'required',

            ]);

        Student::create(
            [
                'student_id' => 'required',
                'faculty_id' => 'required',
                'lecture_name' => 'required',
                'email' => 'required',
                'gender' => 'required',
                'DOB' => 'required',

            ]);

        return redirect('/students');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show( Faculty $faculty ,Student $student)
    {
        return view('students.show', [
            'student' => $student,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
    }

    private function getStudents(Faculty $faculty)
    {
        $student = Student::with('faculty', 'user');

        if($faculty->exists)
        {
            $student = $faculty->students();
        }

        return $student->paginate(10);

    }



}
