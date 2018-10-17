<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QController extends Controller
{
    public function index(){
      return "<h1>Q-A (AMA)</h1><br>Ask us anything :)";
    }

    public function show(){
      $question = DB::table("questions")
      ->where("id", 1)
      ->first();

      $answers = DB::table("answer")
      ->where("question_id", 1)
      ->orderBy("created_at", "asc")
      ->get();

      dd($answers);
    }



    public function index(){
      $questions = DB::table("questions")
        ->get($questions);
    }

    public function show
}
