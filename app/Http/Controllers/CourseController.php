<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\AddRequest;
use App\Course;
use DB;
class CourseController extends Controller
{
	public function getIndex(){
    	$course= DB::table('course')->get()->toArray();
    	return view('index',['data'=>$course]);
    }
    public function getList(){
    	$course= DB::table('course')->get()->toArray();
    	return view('manage',['data'=>$course]);
    }
    public function getAdd(){
    	return view('upload');
    }
    public function postAdd(AddRequest $request){
    	
    	$course=new Course;
    	$course->nickname=$request->txtFullName;
    	$course->namevideo=$request->txtNameYoutube;
    	$course->linkyoutube=$request->txtLink;
    	$course->email=$request->email;
    	$course->intro=$request->txtIntro;
    	$course->created_at=new \DateTime();

    	$course->save();
    	return redirect()->route('getList');

    }
    public function getEdit($id){
    	$data= Course::find($id)->toArray();
    	return view('update',['data'=>$data]);
    }
    public function postEdit(Request $request, $id){
    	$course = Course::find($id);
    	$course->nickname=$request->txtFullName;
    	$course->namevideo=$request->txtNameYoutube;
    	$course->linkyoutube=$request->txtLink;
    	$course->email=$request->email;
    	$course->intro=$request->txtIntro;
    	$course->updated_at=new \DateTime();
    	$course->save();
        return redirect()->route('getList');
    }
    public function getDelete($id){
    	 $course = Course::find($id);

        $course->delete();
        return redirect()->route('getList');
    }
}
