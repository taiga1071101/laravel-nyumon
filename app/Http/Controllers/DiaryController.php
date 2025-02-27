<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
  public function index() {
    $diaries = Diary::all();
    return view('diary.index', compact('diaries'));
  }

  public function create() {
    return view('diary.create');
  }

  public function save(Request $request) {
    // $title = $request->input('title');
    // $body = $request->textarea('body');

    $validated = $request->validate([
      'title' => 'required|max:20',
      'body' => 'required',
    ]);

    $diary = new Diary();
    $diary->date = date("Y-m-d");
    $diary->title = $validated['title'];
    $diary->body = $validated['body'];
    $diary->save();

    return back()->with('message', '保存しました');
  }

  public function show($id) {
    $diary = Diary::find($id);
    return view('diary.show', compact('diary'));
  }

  public function edit($id) {
    $diary = Diary::find($id);
    return view('diary.edit', compact('diary'));
  }

  public function update(Request $request, $id) {
    $diary = Diary::find($id);

    $validated = $request->validate([
      'title' => 'required|max:20',
      'body' => 'required|max:400',
    ]);

    $diary->update($validated);
    return back()->with('message', '更新しました');
  }

  public function destroy(Request $request) {
    $id = $request->route('id');
    $diary = Diary::find($id);
    $diary->delete();
    return redirect()->route('diary.index');
  }
}
