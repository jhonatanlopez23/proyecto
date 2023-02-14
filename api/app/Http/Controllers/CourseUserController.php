<?php

namespace App\Http\Controllers;

use App\Models\Courses_Users;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{
    public function index()
    {
        return Courses_Users::all();
    }
}
