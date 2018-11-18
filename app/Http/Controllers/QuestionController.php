<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Option;
class QuestionController extends Controller
{
    public function questions(){
        $questions= Question::with(['option'])->get();
        //dd($questions[]->option);
         //$questions = $quest->toArray();
       // dd($questions);
        return view('question',compact('questions'));
    }
    public function result(Request $request){
        
        $answer = $request['answer'];
        //dd($request);
        //dd($answer);
        $sum = array_sum($answer);
       
         if($sum <= 18){
            $status="your chances of having cancer is low ";
           $category = "Low Risk level";
           $score =  $sum;
           $recommendation = "visit the hospital";
         }else if($sum >= 19 && $sum<=23){
            $status="you may have cancer"; 
            $category = "Medium Risk level";
            $score =  $sum;
            $recommendation = "visit the hospital";
         }else{
            $status="your cancer risk is on the high side"; 
            $category = "High Risk level";
           $score =  $sum;
           $recommendation = "visit the hospital";
         }
         
         $data = [
              'status' => $status,
               'category' => $category,
                'score' => $score,
                'recommendation' => $recommendation
        ]; 
       // dd($data);
        return view('result',$data);
    }
}
