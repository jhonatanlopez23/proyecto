<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }

    public function show($id)
    {
        return Course::find($id);
    }

    public function create(Request $request)
    {
        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return response()->json($course, 200);
    }


    public function delete($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return response(null, 200);
    }
}
