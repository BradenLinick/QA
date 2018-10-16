<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QController extends Controller
{
    public function index(){
      return "This is the list of questions";
    }
}
