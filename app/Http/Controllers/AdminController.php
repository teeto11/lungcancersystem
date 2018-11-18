<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Option;
Use App\Question;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.addAdmin');
    }
    public function alladmins(){
        $admins = Admin::all();
        return view('admin.allAdmins',compact('admins'));
    }

    public function addAdmin(Request $request){
        $admin = new Admin();
        $admin->firstname = $request['firstname'];
        $admin->lastname = $request['lastname'];
        $admin->email = $request['email'];
        $admin->password = bcrypt($request['password']);
        $admin->save();
        return redirect()->back()->with('message', 'successfully added a new admin');

    }
    public function questions(){
        return view('admin.addQuestion');
    }
    public function storequestions(Request $request){
        $question = new Question();
        $option = new Option();
        //dd($request['question_text']);
        $question->question_text = $request['question_text'];
        $question->save();
        $option_text = $request['option_text'];
        $option_value = $request['option_value'];

         for($i=0;$i<count($option_text);$i++){
            $option = new Option();
            $option->question_id = $question->id;
            $option->option_text = $option_text[$i];
            $option->option_point_value = $option_value[$i];
            $option->save();
         }
         return redirect()->back()->with('message', 'successfully added a question');
    }

    public function allquestions(){
        $questions= Question::with(['option'])->get();
        return view('admin.allQuestions',compact('questions'));
    }

    public function deleteadmin($id){
       
        $admin = Admin::find($id);
        if(!$admin){
            return redirect()->back()->with('message', 'admin id not found');
        }else{
            $admin->delete();
        return redirect()->back()->with('message', 'admin deleted');
        }
    }

     public function deletequestion($id){
         $question = Question::find($id);
         $question->delete();
         $option =  Option::where('question_id',$id)->delete();
         return redirect()->back()->with('message', 'question deleted');
         
    }

     public function editquestion($id){
        $question = Question::find($id);
         return view('admin.editQuestion',compact('question'));
     }

     public function editquestionstore(Request $request){
        $question = Question::find($request->question_id);
        $option = Option::where('question_id',$request->question_id)->first();
        //dd($option);
        //dd($request['question_text']);
        $question->question_text = $request['question_text'];
         $question->save();
       // $option->option_text = $request['option_text'];
        //$option->option_value = $request['option_value'];
        
         for($i=0;$i<count($request['option_text']);$i++){
            $option->question_id = $question->id;
            $option->option_text = $request['option_text'][$i];
            $option->option_point_value =  $request['option_value'][$i];
            $option->save();
         }
         return redirect()->back()->with('message', 'successfully updated the question');
     }

}
