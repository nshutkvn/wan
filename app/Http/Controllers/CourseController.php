<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function regis(){
        return view('course');
    }

    public function saveCourses(Request $request){
        $course=new Course();
        $course->course_name=$request->name;
        $course->details=$request->details;
        $course->save();

        // $name=$request->name;
        // $details=$request->details;
        return ;
    }

    public function retrieveCourse(){
        $getCourses= Course::all();

        return view('courses', ['course' => $getCourses]);
    }

    public function deleteCourse($id){
        $course = Course::find($id);
        if(!$course){
            return "record not found";
        }
        $course -> delete();
        
        return redirect('/get-course');

    }

    public function GetUpdateCourseFrm($id){
        // $showSaveFrm= false;
        return view( 'course', ['course' =>$id]);

    }

    public function UpdateCourse(Request $request, $id) {
        $course=Course::find($id);
        $course->course_name=$request->name;
        $course->details=$request->details;
        $course->update();

        // $name=$request->name;
        // $details=$request->details;
        return redirect('/get-course');
        

    }


}