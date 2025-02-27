<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class ApiDiaryController extends Controller
{
  public function index() {
    $diaries = Diary::all();
    return response()->json($diaries);
  }
}
