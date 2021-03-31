<?php

namespace App\Http\Controllers;

use App\Models\AddCourse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_admin()
    {
        return view('admin.admin_index');
    }

    public function add_course()
    {
        return view('admin.addcourse');
    }

    public function add_paper(Request $request)
    {

        $paper = new AddCourse();
        $paper->year = $request->year;
        $paper->degree = $request->degree;
        $paper->semester = $request->semester;
        $paper->subject = $request->subject;
        $paper->question_1 = $request->question_1;
        $paper->marks_1 = $request->marks_1;
        $paper->answer_1 = $request->answer_1;
        $paper->question_2 = $request->question_2;
        $paper->marks_2 = $request->marks_2;
        $paper->answer_2 = $request->answer_2;
        $paper->question_3 = $request->question_3;
        $paper->marks_3 = $request->marks_3;
        $paper->answer_3 = $request->answer_3;
        $paper->price = $request->price;
        $paper->save();

        return redirect()->route('view_paper');

    }

    public function view_paper()
    {
        $data = AddCourse::all();
        return view('admin.view_course', compact('data'));
    }

    public function edit($id)
    {
        $user = AddCourse::findorFail($id);
        return view('admin.updatecourse', compact('user'));

    }

    public function delete($id)
    {
        $user = AddCourse::findorFail($id);
        $user->delete();
        return redirect()->route('view_paper');
    }

    public function updatecourse(Request $request)
    {
        $paper = AddCourse::findorfail($request->id);
        $paper->year = $request->year;
        $paper->degree = $request->degree;
        $paper->semester = $request->semester;
        $paper->subject = $request->subject;
        $paper->question_1 = $request->question_1;
        $paper->marks_1 = $request->marks_1;
        $paper->answer_1 = $request->answer_1;
        $paper->question_2 = $request->question_2;
        $paper->marks_2 = $request->marks_2;
        $paper->answer_2 = $request->answer_2;
        $paper->question_3 = $request->question_3;
        $paper->marks_3 = $request->marks_3;
        $paper->answer_3 = $request->answer_3;
        $paper->price = $request->price;
        $paper->save();

        return redirect()->route('view_paper');
    }
}
