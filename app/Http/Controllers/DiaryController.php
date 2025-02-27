<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaryController extends Controller
{
  public function index() {
    $name = 'Laravel';
    return view('diary.index', compact('name'));
  }
}
